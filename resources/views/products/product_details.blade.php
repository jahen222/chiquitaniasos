@extends('layouts.layout_carprojects')

@section('content')
    <!------ Breadcrumbs Start ------>
    <div class="impl_bread_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>{{$product->name}}</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/store') }}">Tienda</a></li>
                        <li class="breadcrumb-item active">Producto</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!------ Purchase Car Start ------>
    <div class="impl_buy_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="impl_buycar_wrapper">
                        <div class="impl_buycar_color" id="color_car">
                            <div class="slider slider-for1">
                                @foreach($images as $image)
                                    <div><img src="{{$image->path_to_thumbnail}}" alt="" style="display:block;margin:auto;"></div>
                                @endforeach
                            </div>
                            <div class="slider slider-nav1">
                                @foreach($images as $image)
                                    <div><span class="car_color car_clr1"></span></div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12" id="info">
                    <div class="impl_buycar_data">
                        <h1>{{$product->name}}</h1>
                        <h4>Marca: {{$product->brand}}</h4>
                        <h4>Modelo: {{$product->model}}</h4>
                        <h4>Hecho en: {{$product->made_in}}</h4>
                        <h4>Año de fabricación: {{$product->year}}</h4>
                        <br>
                        <h1>${{$product->price}} </h1>
                        <p>{{$product->description}}</p>
                        <div class="impl_old_buy_btn">
                            @if(Session::has('cart'))
                                @if(!array_key_exists($product->id, Session::get('cart')->products))

                                    <a id="add_{{$product->id}}" class="add_to_cart impl_btn" href="{{ url('/cart/add/'.$product->id) }}">
                                        <span class="glyphicon glyphicon-shopping-cart"></span><b>Add to cart</b>
                                    </a>

                                    <a id="remove_{{$product->id}}" class="remove_from_cart impl_btn" href="{{ url('/cart/delete/'.$product->id) }}" hidden>
                                        <span class="glyphicon glyphicon-remove"></span><b>Remove</b>
                                    </a>

                                @else

                                    <a id="add_{{$product->id}}" class="add_to_cart impl_btn" href="{{ url('/cart/add/'.$product->id) }}" hidden>
                                        <span class="glyphicon glyphicon-shopping-cart"></span><b>Add to cart</b>
                                    </a>

                                    <a id="remove_{{$product->id}}" class="remove_from_cart impl_btn" href="{{ url('/cart/delete/'.$product->id) }}">
                                        <span class="glyphicon glyphicon-remove"></span><b>Remove</b>
                                    </a>

                                @endif

                            @else

                                <a id="add_{{$product->id}}" class="add_to_cart impl_btn" href="{{ url('/cart/add/'.$product->id) }}">
                                    <span class="glyphicon glyphicon-shopping-cart"></span><b>Add to cart</b>
                                </a>

                                <a id="remove_{{$product->id}}" class="remove_from_cart impl_btn" href="{{ url('/cart/delete/'.$product->id) }}" hidden>
                                    <span class="glyphicon glyphicon-remove"></span><b>Remove</b>
                                </a>

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------ Car description wrapper Start ------>
    <div class="impl_descrip_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="impl_heading">
                        <h1>description</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>Car Brand</h2>
                        <p>Expedition ,</p>
                        <p>Centaur</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>FUEL ECONOMY</h2>
                        <p>EPA combined/city/highway : </p>
                        <p>15-16/13/20-21 mpg</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>ENGINE TYPE</h2>
                        <p>DOHC 32-valve V-8, aluminum</p>
                        <p>block and heads, port fuel</p>
                        <p>injection</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>TRANSMISSION</h2>
                        <p>6-speed Automatic With Manual </p>
                        <p>Shifting Mode</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>Displacement</h2>
                        <p>286 cu in, 4691 cc</p>
                        <p>Power: 454 hp @ 7000 rpm</p>
                        <p>Torque: 384 lb-ft @ 4750 rpm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>VEHICLE TYPE</h2>
                        <p>Front-Engine, </p>
                        <p>Rear-Wheel-Drive, </p>
                        <p>4-Passenger, 2-Door </p>
                        <p>Coupe or Convertible</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>PERFORMANCE</h2>
                        <p>Zero to 60 mph: 4.5-4.7 sec</p>
                        <p>Standing ¼-mile: 13.0-13.2 sec</p>
                        <p>Top speed: 178-187 mph</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>DIMENSIONS</h2>
                        <p>Wheelbase: 115.8 in</p>
                        <p>Length: 193.3-193.7 in</p>
                        <p>Width: 75.4 in Height: 54.3 in</p>
                        <p>Curb weight : 4400-4600 lb</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------ Car description wrapper Start ------>
    <div class="impl_review_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="impl_heading">
                        <h1>user reviews</h1>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="review_slider slick-initialized slick-slider slick-vertical">
                        <div class="slick-list draggable" style="height: 765px;"><div class="slick-track" style="opacity: 1; height: 3825px; transform: translate3d(0px, -1530px, 0px);"><div class="impl_review_box slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1" style="width: 945px;">
                            <h2>Reviewing After 10,000 kms And Six Months Of Driving Dawn, Curiosity</h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> 15 September 2017
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jasmine Keith</h4>
                        </div><div class="impl_review_box slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1" style="width: 945px;">
                            <h2>Best Deal , Value For Money Review After 7000 kms </h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> By : Christopher Brown
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jasmine Keith</h4>
                        </div><div class="impl_review_box slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 945px;">
                            <h2>Not Meeting Expectation Regarding The Features Listed By Dawn, Curiosity</h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> 15 September 2017
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jake Nolan</h4>
                        </div><div class="impl_review_box slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 945px;">
                            <h2>Reviewing After 10,000 kms And Six Months Of Driving Dawn, Curiosity</h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> 15 September 2017
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jasmine Keith</h4>
                        </div><div class="impl_review_box slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="width: 945px;">
                            <h2>Best Deal , Value For Money Review After 7000 kms </h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> By : Christopher Brown
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jasmine Keith</h4>
                        </div><div class="impl_review_box slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" style="width: 945px;">
                            <h2>Not Meeting Expectation Regarding The Features Listed By Dawn, Curiosity</h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> 15 September 2017
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jake Nolan</h4>
                        </div><div class="impl_review_box slick-slide slick-current slick-active" data-slick-index="3" aria-hidden="false" tabindex="0" style="width: 945px;">
                            <h2>Reviewing After 10,000 kms And Six Months Of Driving Dawn, Curiosity</h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> 15 September 2017
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jasmine Keith</h4>
                        </div><div class="impl_review_box slick-slide slick-active" data-slick-index="4" aria-hidden="false" tabindex="0" style="width: 945px;">
                            <h2>Best Deal , Value For Money Review After 7000 kms </h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> By : Christopher Brown
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jasmine Keith</h4>
                        </div><div class="impl_review_box slick-slide slick-active" data-slick-index="5" aria-hidden="false" tabindex="0" style="width: 945px;">
                            <h2>Not Meeting Expectation Regarding The Features Listed By Dawn, Curiosity</h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> 15 September 2017
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jake Nolan</h4>
                        </div><div class="impl_review_box slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" tabindex="-1" style="width: 945px;">
                            <h2>Reviewing After 10,000 kms And Six Months Of Driving Dawn, Curiosity</h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> 15 September 2017
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jasmine Keith</h4>
                        </div><div class="impl_review_box slick-slide slick-cloned" data-slick-index="7" aria-hidden="true" tabindex="-1" style="width: 945px;">
                            <h2>Best Deal , Value For Money Review After 7000 kms </h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> By : Christopher Brown
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jasmine Keith</h4>
                        </div><div class="impl_review_box slick-slide slick-cloned" data-slick-index="8" aria-hidden="true" tabindex="-1" style="width: 945px;">
                            <h2>Not Meeting Expectation Regarding The Features Listed By Dawn, Curiosity</h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> 15 September 2017
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jake Nolan</h4>
                        </div><div class="impl_review_box slick-slide slick-cloned" data-slick-index="9" aria-hidden="true" tabindex="-1" style="width: 945px;">
                            <h2>Reviewing After 10,000 kms And Six Months Of Driving Dawn, Curiosity</h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> 15 September 2017
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jasmine Keith</h4>
                        </div><div class="impl_review_box slick-slide slick-cloned" data-slick-index="10" aria-hidden="true" tabindex="-1" style="width: 945px;">
                            <h2>Best Deal , Value For Money Review After 7000 kms </h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> By : Christopher Brown
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jasmine Keith</h4>
                        </div><div class="impl_review_box slick-slide slick-cloned" data-slick-index="11" aria-hidden="true" tabindex="-1" style="width: 945px;">
                            <h2>Not Meeting Expectation Regarding The Features Listed By Dawn, Curiosity</h2>
                            <ul class="review_rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="review_date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> 15 September 2017
                            </div>
                            <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                            <h4 class="review_author">By : Jake Nolan</h4>
                        </div></div></div>
                        <!--2-->

                        <!--3-->

                        <!--4-->

                        <!--5-->

                        <!--6-->

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
