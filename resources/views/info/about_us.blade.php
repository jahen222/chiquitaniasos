@extends('layouts.layout_carprojects')

@section('content')
    <!------ Header Start Desktop------>
    <section class="curve_svg_about d-none d-md-block">
        <!------ Curve Start -----
        <svg id="curve_service" data-name="Layer-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1416.99 148.01">
            <path class="cls-1" d="M0,280.8S283.66,59,608.94,163.56s437.93,150.57,808,10.34V309.54H0V280.8Z" transform="translate(0-135.53)"/>
        </svg>-->
    </section>

      <!------ Welcome Wrapper Start ------>
      <div class="impl_welcome_wrapper impl_bottompadder80" style="background-color: black;">
          <div class="container">
                <!------ Search bar header ------>
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                        <div class="impl_welcome_img">
                            <img src="{{ asset('src/maracucho/img/logo.png') }}" alt="Welcome" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                        <div class="impl_welcome_text">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <h3 style="color: #ff5500;">{!! $setting->company_intermediate_text !!}</h3>
                        </div>
                    </div>
                </div>
          </div>
      </div>

      <div class="box_about1">
        <div class="container">
          <div class="row">
            <div class="col-sm" style="margin-top: 100px;">
              {!! $setting->company_poligon1_text1 !!}
            </div>
            <div class="col-sm" style="margin-top: 200px;">
              <div class="impl_welcome_img">
                  <img src="{{ asset('src/maracucho/img/logo_mobile.png') }}" alt="Welcome" class="img-responsive">
              </div>
              <div style="margin-top: 230px;">
                  {!! $setting->company_poligon1_text2 !!}
              </div>
            </div>
            <div class="col-sm" style="margin-top: 100px;">
              {!! $setting->company_poligon1_text3 !!}<br>
            </div>
          </div>
        </div>
      </div>

      <div class="box_about2">
        <div class="container box_about2_texto">
          <div class="row">
            <div class="col-5">
              <div class="impl_welcome_img" style="margin-top: -8px;">
                  <img src="{{ asset('src/maracucho/img/logo.png') }}" alt="Welcome" class="img-responsive">
              </div>
              <div style="padding-top: 380px;">
                  {!! $setting->company_poligon2_text1 !!}
              </div>
            </div>
            <div class="col-2">
            </div>
            <div class="col-5" style="margin-top: 120px;">
              {!! $setting->company_poligon2_text2 !!}
            </div>
          </div>
        </div>
        <div class="d-none d-xl-block">
            <div class="box_about2_raya1">

            </div>
            <div class="box_about2_raya2">

            </div>
            <div class="box_about2_raya3">

            </div>
        </div>
      </div>

@endsection
