@extends('layouts.layout_carprojects')

@section('content')

    <!------ Header Start Desktop------>
    <section class="curve_svg_service d-none d-md-block">
        <div class="div_rounder_service">
          {!! $setting->service_header_text !!}
        </div>
        <!------ Curve Start ----

        <svg id="curve_service" data-name="Layer-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1416.99 148.01">
            <path class="cls-1" d="M0,280.8S283.66,59,608.94,163.56s437.93,150.57,808,10.34V309.54H0V280.8Z" transform="translate(0-135.53)"/>
        </svg>-->
    </section>
    <br>
    <br>
    <br>
      <!------ Welcome Wrapper Start ------>
      <div class="impl_welcome_wrapper impl_bottompadder80" style="background-color: black;">
          <div class="container">
                <!------ Search bar header ------>
                <div class="col-md-6 text-center search-panel" style="padding-top: 0%">
                    <form action="{{ route('store') }}" method="POST">
                        <fieldset class="form-group">
                            <h2 for="search-box">{!! $setting->service_intermediate_text !!}</h2>
                            <input type="text" class="main-input" id="search-box" name="busqueda" disabled>
                        </fieldset>
                    </form>
                </div>
          </div>
      </div>
      <div class="box_service_macro">
        <div class="box_service">

        </div>
      </div>
      <div class="impl_searchbox_wrapper impl_home_searchbox" style="background-color: white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                            <div class="impl_search_box   custom_select">
                                {!! $setting->service_info_text !!}
                            </div>
                        </div>
                        <!--about info-->
                        <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                              @foreach($recommendedProducts as $recommendedProduct)
                                <div class="col-lg-6 col-md-6">
                                    <div class="impl_facility_wrapper">
                                        <img src="{{$recommendedProduct->path_to_thumbnail}}" alt="" class="img-fluid">
                                        <div class="impl_ser_hover_ovrly">
                                            <div class="impl_ser_text">
                                                <a href="{{ url('/products/'.$recommendedProduct->id) }}"><h3>{{$recommendedProduct->name}}</h3></a>
                                            </div>
                                            <div class="impl_ser_text_ovrly">
                                                <a href="{{ url('/products/'.$recommendedProduct->id) }}"><h3>{{$recommendedProduct->name}}</h3></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box_service_macro2">
      <div class="box_service2">
        <div class="div_rounder_service">
          <h3>Lorem ipsum dolor sit</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>

@endsection
