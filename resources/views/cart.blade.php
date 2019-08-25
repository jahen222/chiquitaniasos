@extends('layouts.layout_carprojects')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/css/step.css') }}">

    <!------ Breadcrumbs Start ------>
    <div class="impl_bread_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>CART</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">CART</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!------ Sell wrapper  Start ------>
    <div class="impl_sell_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 offset-lg-1">
                  @if(isset($products) && Session::has('cart'))
                    <div class="impl_checkout_wrapper" id="impl_sform">
                        <div class="impl_step">
                                <div class="woocommerce">
                                    <form method="post" action="payWithpaypal">
                                        {{ csrf_field() }}
                                        <table class="table table-bordered shop_table cart">
                        										<thead>
                          											<tr>
                          												<th>Image</th>
                          												<th>Name</th>
                          												<th>Quantity</th>
                          												<th>Status</th>
                          												<th>Cost</th>
                          												<th>Remove</th>
                          											</tr>
                                                @foreach($products as $product)
                              											<tr>
                                												<td><a href="#"><img src="{{$product['product']['path_to_thumbnail']}}" width="50" height="50"></a></td>
                                												<td>{{$product['product']['name']}}</td>
                                												<td>
                                                          <div class="input-group pull-right" style="width: 150px;">
                                                              @if($product['quantity'] == 1)
                                                                  <span class="input-group-btn">
                                                                       <button id="minus_{{$product['id']}}" type="button" class="btn btn-default delete-item set-quantity" disabled="disabled" data-type="minus" style="width: 38px">
                                                                           -
                                                                       </button>
                                                                  </span>
                                                              @else
                                                                  <span class="input-group-btn">
                                                                       <button id="minus_{{$product['id']}}" type="button" class="btn btn-default delete-item set-quantity" data-type="minus" style="width: 38px">
                                                                           -
                                                                       </button>
                                                                  </span>
                                                              @endif
                                                              <input id="input_{{$product['id']}}" type="text"
                                                                   href="{{ url('/cart/products/'.$product['id'].'/quantity') }}"
                                                                   class="text-center form-control input-number"
                                                                   value="{{$product['quantity']}}" min="1" max="{{$product['onStock']}}" disabled="disabled">
                                                               @if($product['quantity'] == $product['onStock'])
                                                                   <span class="input-group-btn">
                                                                       <button id="plus_{{$product['id']}}" type="button" class="btn btn-default add-item set-quantity" disabled="disabled" data-type="plus" style="width: 38px">
                                                                           +
                                                                       </button>
                                                                   </span>
                                                               @else
                                                                   <span class="input-group-btn">
                                                                       <button id="plus_{{$product['id']}}" type="button" class="btn btn-default add-item set-quantity" data-type="plus" style="width: 38px">
                                                                           +
                                                                       </button>
                                                                   </span>
                                                               @endif
                                                           </div>
                                                        </td>
                                                        <td><b id="stock_{{$product['id']}}">En existencia</b></td>
                                												<td>$<b id="price_product_all_{{$product['id']}}">{{$product['priceForAllItems']}}</b></td>
                                												<td><a id="remove_{{$product['id']}}" class="remove_from_cart trash-remove" href="{{ url('/cart/delete/'.$product['id']) }}" data-toggle="tooltip" data-placement="top" title="Remove from cart">
                                                              <span class="cart_rmv_icon"><i class="fa fa-times" aria-hidden="true"></i></span>
                                                            </a>
                                                        </td>
                              											</tr>
                                                @endforeach
                        										</thead>
                                        </table>
                                        <a href="{{ url('/cart/delete/products') }}" class="remove_all">
                                            <span class="glyphicon glyphicon-remove"></span>Quitar todo
                                        </a>
                                        <div class="impl_cart_footer">
                                            <div class="impl_footer_subs">
                                                <input type="text" class="form-control" name="first_name" placeholder="Nombre" required>
                                                <input type="text" class="form-control" name="last_name" placeholder="Apellido" required>
                                                <input type="text" class="form-control" name="street" placeholder="Calle" required>
                                                <input type="text" class="form-control" name="city" placeholder="Ciudad" required>
                                                <input type="text" class="form-control" name="country" placeholder="País" required>
                                                <input type="text" class="form-control" name="postal_code" placeholder="Código Postal" required>
                                                <input type="text" class="form-control" name="phone_number" placeholder="Número de Teléfono" required>
                                            </div>
                                            <div class="cart-subtotals">
                                                <div class="total-line">
                                                    <span class="label">Subtotal</span>
                                                    <span id="money" class="value price">${{number_format($totalPrice, 2, '.', '')}}</span>
                                                </div>
                                                <div class="total-line total_amount">
                                                    <span class="label">total cost</span>
                                                    <span id="money2" class="value price">${{number_format($totalPrice, 2, '.', '')}}</span>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                                @if (Auth::guest())
                                    <button type="button" href="#signin" data-toggle="modal" class="next action-button impl_btn" value="Next" > Pagar</button>
                                @else
                                    <button type="submit" class="next action-button impl_btn" value="Next" > Pagar</button>
                                @endif
                            </form>
                        </div>
                    </div>
                    @else
                        <h3 class="text-center">Your cart is empty</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/jquery.js') }}"></script>
    <script src="{{ asset('js/delete_from_cart_view_in_cart_ajax.js') }}"></script>
    <script src="{{ asset('js/delete_from_cart_all_products_ajax.js') }}"></script>
    <script src="{{ asset('js/change_quantity_ajax.js') }}"></script>



@endsection
