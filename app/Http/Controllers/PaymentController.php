<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment as PaymentPaypal;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use App\Cart;
use App\Delivery;
use App\Order;
use App\OrderProduct;
use App\Payment;
use App\Product;
use Session;
use Auth;

class PaymentController extends Controller
{
    private $apiContext;

    public function __construct(){
        $paypal_conf = \Config::get('paypal');
        $this->apiContext = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->apiContext->setConfig($paypal_conf['settings']);
    }

    public function payWithpaypal(Request $request){
        if (!Auth::guest()){
            $input = $request->all();
            $user = Auth::user();
            \Session::put('street', $input['street']);
            \Session::put('postal_code', $input['postal_code']);
            \Session::put('city', $input['city']);
            \Session::put('country', $input['country']);
            \Session::put('phone_number', $input['phone_number']);
            \Session::put('first_name', $input['first_name']);
            \Session::put('last_name', $input['last_name']);



            if (!Session::has('cart')){
                return view('cart');
            }
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);

            $payer = new Payer();
            $payer->setPaymentMethod('paypal');

            $items = array();
            $count = 1;
            foreach ($cart->products as $product) {
                $items[$count] = new Item();
                $items[$count]->setName('Item '.$count)
                              ->setCurrency('USD')
                              ->setQuantity($product['quantity'])
                              ->setPrice($product['priceForOneItem']);
                $count++;
            }

            $item_list = new ItemList();
            $item_list->setItems($items);


            $amount = new Amount();
            $amount->setCurrency('USD')->setTotal($cart->totalPrice);

            $transaction = new Transaction();
            $transaction->setAmount($amount)
                        ->setItemList($item_list)
                        ->setDescription('Compra desde la plataforma Carprojects');

            $redirect_urls = new RedirectUrls();
            $redirect_urls->setReturnUrl(\URL::route('getPaymentStatus'))
                          ->setCancelUrl(\URL::route('getCancelStatus'));

            $payment = new PaymentPaypal();
            $payment->setIntent('Sale')
                    ->setPayer($payer)
                    ->setRedirectUrls($redirect_urls)
                    ->setTransactions(array($transaction));

            try{
                $payment->create($this->apiContext);
            }catch(\PayPal\Exception\PPConnectionException $ex){
                if(\Config::get('app.debug')){
                    \Session::put('error', 'Tiempo excedido.');
                    return \Redirect::route('getCancelStatus');
                }else{
                    \Session::put('error', 'Un error ha ocurrido.');
                    return \Redirect::route('getCancelStatus');
                }
            }

            foreach ($payment->getLinks() as $link){
                if ($link->getRel() == 'approval_url') {
                    $redirect_url = $link->getHref();
                    break;
                }
            }

            \Session::put('paypal_payment_id', $payment->getId());
            if (isset($redirect_url)){
                return \Redirect::away($redirect_url);
            }
            \Session::put('error', 'Un error ha ocurrido.');
            return \Redirect::route('getCancelStatus');
        }
        else{
            return \Redirect::route('/');
        }
    }

    public function getPaymentStatus(Request $request)
    {
        $input = $request->all();
        $user = Auth::user();
        $payment_id = Session::get('paypal_payment_id');
        Session::forget('paypal_payment_id');
        if (empty($input['PayerID']) || empty($input['token'])) {
            \Session::put('error', 'Un error ha ocurrido.');
            return \Redirect::route('getCancelStatus');
        }

        $street = Session::get('street');
        Session::forget('street');
        $postal_code = Session::get('postal_code');
        Session::forget('postal_code');
        $city = Session::get('city');
        Session::forget('city');
        $country = Session::get('country');
        Session::forget('country');
        $phone_number = Session::get('phone_number');
        Session::forget('phone_number');
        $first_name= Session::get('first_name');
        Session::forget('first_name');
        $last_name = Session::get('last_name');
        Session::forget('last_name');

        if (!Session::has('cart')){
            return back();
        }

        $payment = PaymentPaypal::get($payment_id, $this->apiContext);
        $execution = new PaymentExecution();
        $execution->setPayerId($input['PayerID']);
        $result = $payment->execute($execution, $this->apiContext);

        if ($result->getState() == 'approved') {

            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            $order = new Order();
            $order->email = $user->email;
            $order->first_name = $first_name;
            $order->last_name = $last_name;
            $order->street = $street;
            $order->postal_code = $postal_code;
            $order->city = $city;
            $order->country = $country;
            $order->phone_number = $phone_number;

            $discount = 0;

            if (Auth::check()){
                $order->user_id = Auth::user()->id;
                $discount = Auth::user()->discount;
            }

            $order->delivery_id = 1;
            $order->payment_id = 2;

            $delivery = Delivery::find($order->delivery_id);

            $totalPriceForProducts = $cart->totalPrice;
            $shipping = $delivery->price;
            $totalPaidForOrder = $totalPriceForProducts + $shipping - $discount;

            $order->total_paid = $totalPaidForOrder;
            $order->status = "Preparing to send";
            $order->save();

            foreach ($cart->products as $product){
                $orderProduct = new OrderProduct();
                $orderProduct->order_id = $order->id;
                $orderProduct->product_id = $product['id'];

                $orderProduct->quantity = $product['quantity'];
                $orderProduct->priceForAllItems = $product['priceForAllItems'];
                $orderProduct->save();

                $dbProduct = Product::find($product['id']);
                $dbProduct->quantity -= $product['quantity'];
                $dbProduct->save();
            }

            Session::forget('cart');

            return redirect()->to('/madeAnOrder');
        }
        \Session::put('error', 'Un error ha ocurrido.');
        return \Redirect::route('getCancelStatus');
    }

    public function getCancelStatus(Request $request)
    {
        $input = $request->all();
        $user = Auth::user();
        $payment_id = Session::get('paypal_payment_id');
        Session::forget('paypal_payment_id');
        $street = Session::get('street');
        Session::forget('street');
        $postal_code = Session::get('postal_code');
        Session::forget('postal_code');
        $city = Session::get('city');
        Session::forget('city');
        $country = Session::get('country');
        Session::forget('country');
        $phone_number = Session::get('phone_number');
        Session::forget('phone_number');
        $first_name= Session::get('first_name');
        Session::forget('first_name');
        $last_name = Session::get('last_name');
        Session::forget('last_name');

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $order = new Order();
        $order->email = $user->email;
        $order->first_name = $first_name;
        $order->last_name = $last_name;
        $order->street = $street;
        $order->postal_code = $postal_code;
        $order->city = $city;
        $order->country = $country;
        $order->phone_number = $phone_number;

        $discount = 0;

        if (Auth::check()){
            $order->user_id = Auth::user()->id;
            $discount = Auth::user()->discount;
        }

        $order->delivery_id = 1;
        $order->payment_id = 2;

        $delivery = Delivery::find($order->delivery_id);

        $totalPriceForProducts = $cart->totalPrice;
        $shipping = $delivery->price;
        $totalPaidForOrder = $totalPriceForProducts + $shipping - $discount;

        $order->total_paid = $totalPaidForOrder;
        $order->status = "Cancel";
        $order->save();

        foreach ($cart->products as $product){
            $orderProduct = new OrderProduct();
            $orderProduct->order_id = $order->id;
            $orderProduct->product_id = $product['id'];

            $orderProduct->quantity = $product['quantity'];
            $orderProduct->priceForAllItems = $product['priceForAllItems'];
            $orderProduct->save();
        }

        \Session::put('error', 'Un error ha ocurrido.');
        return view('orders.cancel_payment');
    }

}
