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

class OrderController extends Controller
{
    public function showCheckout(){

        if (!Session::has('cart')){
            return back();
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return view('orders.checkout', ['products' => $cart->products, 'totalPrice' => $cart->totalPrice]);
    }

    public function showPlaceAnOrder(){

        if (!Session::has('cart')){
            return back();
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        // Delivery methods
        $deliveries = Delivery::all();

        // Payment methods
        $payments = Payment::all();

        return view('orders.place_an_order', ['products' => $cart->products, 'totalPrice' => $cart->totalPrice, 'deliveries' => $deliveries, 'payments' => $payments]);
    }

    public function store(Request $request){

        $payment_id = Session::get('paypal_payment_id');
        Session::forget('paypal_payment_id');
        if (empty(\Input::get('PayerID')) || empty(\Input::get('token'))) {
            \Session::put('error', 'Un error ha ocurrido.');
            return \Redirect::route('status_bad');
        }

        $user = Auth::user();
        $input = $request->all();
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

        if (!Session::has('cart')){
            return back();
        }

        $payment = PaymentPaypal::get($payment_id, $this->apiContext);
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));
        $result = $payment->execute($execution, $this->apiContext);

        if ($result->getState() == 'approved') {

            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            $order = new Order();
            $order->email = $user->email;
            $order->first_name = $user->first_name;
            $order->last_name = $user->last_name;
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
            $order->payment_id = 1;

            $delivery = Delivery::find($order->delivery_id);

            $totalPriceForProducts = $cart->totalPrice;
            $shipping = $delivery->price;
            $totalPaidForOrder = $totalPriceForProducts + $shipping - $discount;

            $order->total_paid = $totalPaidForOrder;
            $order->status = "Pending";
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
        return \Redirect::route('status_bad');
    }

    public function showMadeAnOrder(){

        return view('orders.made_order');
    }
}
