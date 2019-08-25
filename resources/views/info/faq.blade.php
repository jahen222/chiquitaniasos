@extends('layouts.layout_carprojects')

@section('content')
    <!------ Header Start Desktop------>
    <section class="curve_svg_faq d-none d-md-block">

        <div class="div_rounder_service">
          {!! $setting->faq_header_text !!}
        </div>
        <!------ Curve Start ----
        <svg id="curve_faq" data-name="Layer-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1416.99 148.01">
            <path class="cls-1" d="M0,280.8S283.66,59,608.94,163.56s437.93,150.57,808,10.34V309.54H0V280.8Z" transform="translate(0-135.53)"/> d-none .d-md-block .d-lg-block d-xl-block
        </svg>-->
    </section>
    <div class="div_rounder_company" style="top: 105px;">
        <div class="">
            <div class="box_faq_raya1">

            </div>
            <div class="box_faq_raya2">

            </div>
            <br>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-5">
                <div class="form-group">
                  {!! $setting->faq_div_text1 !!}
                </div><br>
                <div class="form-group">
                    <h1 style="text-align: center;">FAQ</h1>
                </div>
                <div class="form-group">
                  {!! $setting->faq_div_text2 !!}
                </div>
            </div>
            <div class="col-lg-2 col-md-2">

            </div>
            <div class="col-lg-5 col-md-5">
              <div class="box_faq_scroll">
                {!! $setting->faq_div_text3 !!}
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <br><br>
                {!! $setting->faq_div_text4 !!}
                <br><br><br>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>


@endsection
