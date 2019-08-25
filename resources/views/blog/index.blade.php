@extends('layouts.layout_carprojects')

@section('content')
    <!------ Header Start Desktop------>
    <section class="curve_svg_blog d-none d-md-block">
        <div class="div_rounder_service">
          {!! $setting->blog_header_text !!}
        </div>
        <!------ Curve Start ----

        <svg id="curve_blog" data-name="Layer-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1416.99 148.01">
            <path class="cls-1" d="M0,280.8S283.66,59,608.94,163.56s437.93,150.57,808,10.34V309.54H0V280.8Z" transform="translate(0-135.53)"/>
        </svg>-->
    </section>

    <!------ Welcome Wrapper Start ------>
    <div class="impl_welcome_wrapper impl_bottompadder80" style="background-color: black;">
        <div class="container">
              <!------ Search bar header ------>
              <div class="row">
                  <div class="col-12">
                      <div class="impl_welcome_text">
                        <br><br><br><br>
                          <form action="" method="POST">
                              <fieldset class="form-group">
                                  <h2 for="search-box" style="text-align: center;">Quiero saber más</h2><br>
                                  <div class="impl_footer_subs">
                                      <input type="text" class="form-control" placeholder="Ingresa tu correo">
                                      <button class="foo_subs_btn"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                  </div>
                              </fieldset>
                          </form>
                      </div>
                  </div>
              </div>
        </div>
    </div>

    <!------ Blog section Start ------>
    <div class="impl_blog_wrapper impl_blog_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="impl_blog_inner">
                        <div class="row">
                            <!--sidebar end-->
                            <div class="col-lg-12 col-md-12 impl_blog_section">
                                <div class="row">
                                  @foreach($posts as $post)
                                    <div class="col-lg-3 col-md-3">
                                        <!--blog1-->
                                        <div class="impl_facility_wrapper">
                                        <img src="{{$post->path_to_image}}" alt="" class="img-fluid">
                                        <div class="impl_ser_hover_ovrly">
                                            <div class="impl_ser_text">
                                                <a href="{{ url('/blog/'.$post->id) }}"><h3>{{$post->title}}</h3></a>
                                            </div>
                                            <div class="impl_ser_text_ovrly">
                                                <a href="{{ url('/blog/'.$post->id) }}"><h3>{{$post->title}}</h3></a>
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
</div>
@endsection
