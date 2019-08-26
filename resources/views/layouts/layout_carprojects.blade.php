<!DOCTYPE html>
<!--
Template Name: Impel Car Dealer Responsive HTML Template
Version: 1.0.0
Author: Kamleshyadav
Website: http://himanshusofttech.com/
Purchase: http://themeforest.net/user/kamleshyadav
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- Begin Head -->

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Impel">
    <meta name="keywords" content="">
    <meta name="author" content="hsoft">
    <meta name="MobileOptimized" content="320">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--Srart Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/css/ion.rangeSlider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/css/ion.rangeSlider.skinFlat.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/js/plugin/magnific/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/js/plugin/nice_select/nice-select.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/js/plugin/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/js/plugin/slick/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/css/style.css') }}">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('src/maracucho/img/logo_favicon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/css/menu_slider.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>

<body>
    <!------ Header Start ------>
    <div class="impl_header_wrapper">
        <a href="{{ url('/') }}"><div class="impl_logo_mini d-none d-lg-block d-xl-block">
            <img src="{{ asset('src/maracucho/img/logo_v2.png') }}" alt="Logo" class="img-fluid">
        </div></a>

        <!--menu start-->
        <div class="impl_menu_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="impl_sorting_text custom_select">
                            <span class="impl_show"></span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="impl_category_type">

                            @if (Auth::guest())
                                <!-- Without Authentication Links -->
                                <a href="#signup" class="impl_btn impl_used_car d-none d-lg-block d-xl-block" data-toggle="modal">Registrarse</a>
                                <a href="#signin" class="impl_btn active d-none d-lg-block d-xl-block" data-toggle="modal">Entrar</a>
                            @else
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="impl_btn impl_used_car">Salir</a>
                                <ul>
                                    <li class="dropdown impl_btn active"><a ref="javascript:;" style="padding-top: 15px;">{{ Auth::user()->username }}</a>
                                        <ul class="sub-menu">
                                            @if(Auth::check() && Auth::user()->admin)
                                                    <li>
                                                        <a href="{{ url('/admin') }}">
                                                            <span class="glyphicon glyphicon-wrench"></span>Admin panel
                                                        </a>
                                                    </li>
                                            @endif
                                        </ul>
                                    </li>
                                </ul>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            @endif
                            </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <button class="impl_menu_btn">
                    			<i class="fa fa-car" aria-hidden="true"></i>
                    			<i class="fa fa-bars" aria-hidden="true"></i>
                    		</button>
                        <div class="impl_menu_inner">
                            <div class="impl_logo_responsive d-xl-none d-lg-none">
                                <a href="{{ url('/') }}"><img src="{{ asset('src/maracucho/img/logo_mobile.png') }}" alt="Logo" class="img-fluid"></a>
                            </div>
                            <div class="impl_menu">
                                <nav>
                                    <div class="menu_cross">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                    <ul>
                                        <li><a href="{{ route('blog') }}" >Inicio</a></li>
                                        @if (Auth::guest())
                                            <!-- Without Authentication Links -->
                                            <li class="d-xl-none d-lg-none"><a href="#signin" data-toggle="modal">Entrar</a></li>
                                            <li class="d-xl-none d-lg-none"><a href="#signup" data-toggle="modal">Registrarse</a></li>
                                        @else
                                            <li class="d-xl-none d-lg-none">
                                              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</a>
                                            </li>
                                        @endif
                                        @if(Auth::check() && Auth::user()->admin)
                                            <li class="d-xl-none d-lg-none"><a href="{{ url('/admin') }}">Admin panel</a></li>
                                        @endif
                                            <style>
                                                div#google_translate_element div.goog-te-gadget-simple{background-color:black; border-left: 0px; border-right: 0px; border-top: 0px; border-bottom: 0px; margin-top: -9px;}
                                                div#google_translate_element img.goog-te-gadget-icon{display: none;}
                                                div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span{color:#fff; border-left: 0px !important; font-family: 'Raleway', sans-serif; font-size: 14px; line-height: 1.5;}
                                                div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span:hover{color:#ff5500;}
                                            </style>​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​
                                            <li><div id="google_translate_element" style="margin-top: 15px;"></div></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--sign-in form-->
    <div class="modal" id="signin">
        <div class="impl_signin">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		             <span aria-hidden="true">×</span>
	          </button>
            <div class="impl_sign_form">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <h1>Entrar</h1>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="text" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}" required autofocus>
                        <span class="form_icon">
    				                 <i class="fa fa-envelope" aria-hidden="true"></i>
    			              </span>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>
                        <span class="form_icon">
    			                  <i class="fa fa-lock" aria-hidden="true"></i>
    			              </span>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="forget_password">
                        <div class="remember_checkbox">
                            <label>
    					                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                    </div>
                    <button type="submit" class="impl_btn">Entrar</button>
                    <p>¿Aún no tienes cuenta? <a class="impl_modal" href="#signup" data-toggle="modal">Registrate</a></p>
                    <p>Acceder con</p>
                    <a href="{{ url('/auth/google') }}" class="btn btn-google" style="color: black;"><i class="fa fa-google"></i> Google</a>
                    <a href="{{ url('/auth/facebook') }}" class="btn btn-facebook" style="color: black;"><i class="fa fa-facebook"></i> Facebook</a>
                </form>
            </div>
        </div>
    </div>
    <!--sign-up form-->
    <div class="modal" id="signup">
        <div class="impl_signin">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
	          </button>
            <div class="impl_sign_form">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <h1>Registro</h1>
                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <input id="username" type="text" placeholder="Username" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                        <span class="form_icon">
  					                <i class="fa fa-user" aria-hidden="true"></i>
  				              </span>
                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="text" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required>
                        <span class="form_icon">
  					                <i class="fa fa-envelope" aria-hidden="true"></i>
  				             </span>
                       @if ($errors->has('email'))
                           <span class="help-block">
                               <strong>{{ $errors->first('email') }}</strong>
                           </span>
                       @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" placeholder="Password" class="form-control"  name="password" required>
                        <span class="form_icon">
                            <i class="fa fa-lock" aria-hidden="true"></i>
  				              </span>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required>
                        <span class="form_icon">
                				    <i class="fa fa-lock" aria-hidden="true"></i>
                				</span>
                    </div>
                    <div class="forget_password">
                        <div class="container">
                            <div class="row">
                                <div class="col-1">
                                  <div class="remember_checkbox">
                                      <label>
                                          <input type="checkbox" name="acept" required>
                                          <span class="checkmark"></span>
                                      </label>
                                  </div>
                                </div>
                                <div class="col-11">
                                    <a href="{{asset('/src/pedro/terminos-y-condiciones-registro-usuario.pdf')}}" target='_blank'>He leído y acepto los Términos y Condiciones para el registro de usuarios.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="forget_password">
                        <div class="container">
                            <div class="row">
                                <div class="col-1">
                                  <div class="remember_checkbox">
                                      <label>
                                          <input type="checkbox" name="acept" required>
                                          <span class="checkmark"></span>
                                      </label>
                                  </div>
                                </div>
                                <div class="col-11">
                                    <a href="{{asset('/src/pedro/terminos-y-condiciones-registro-usuario.pdf')}}" target='_blank'>He leído y acepto las políticas de privacidad.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="impl_btn">Registrarse</button>
                    <p>¿Ya tienes cuenta? <a href="#signin" data-toggle="modal" class="impl_modal">Entrar</a></p>
                    <p>Acceder con</p>
                    <a href="{{ url('/auth/google') }}" class="btn btn-google" style="color: black;"><i class="fa fa-google"></i> Google</a>
                    <a href="{{ url('/auth/facebook') }}" class="btn btn-facebook" style="color: black;"><i class="fa fa-facebook"></i> Facebook</a>
                </form>
            </div>
        </div>
    </div>

    {{-- Content --}}
    @yield('content')
    <?php
        $setting = \App\Setting::findOrFail(1);
    ?>
    <!------ Footer Section Start ------>
    <div class="impl_footer_wrapper" style="background-color: black;">
        <div class="container">
            <div class="impl_social_wrapper">
                <ul>
                    <li><a target="_blank" href="https://www.facebook.com/{{$setting->footer_facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i> @ {{$setting->footer_facebook}} </a></li>
                    <li><a target="_blank" href="https://twitter.com/{{$setting->footer_twitter}}"><i class="fa fa-twitter" aria-hidden="true"></i> @ {{$setting->footer_twitter}} </a></li>
                    <li><a target="_blank" href="https://gmail.com/"><i class="fa fa-envelope-o" aria-hidden="true"></i> {{$setting->footer_email}} </a></li>
                </ul>
            </div>
            <div class="impl_social_wrapper" style="padding-top: 10px;">
                <ul>
                    <li><a target="_blank" href="https://youtube.com/"><i class="fa fa-youtube-play" aria-hidden="true"></i> {{$setting->footer_youtube}}</a></li>
                    <li><a target="_blank" href="https://www.instagram.com/{{$setting->footer_instagram}}"><i class="fa fa-instagram" aria-hidden="true"></i> @ {{$setting->footer_instagram}}</a></li>
                    <li><a target="_blank" href="https://web.whatsapp.com/"><i class="fa fa-whatsapp" aria-hidden="true"></i> {{$setting->footer_phone}}</a></li>
                </ul>
            </div>
        </div>
        <div class="impl_foo_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="impl_foo_box" style="padding-top:20px;">
                            <p>¿Deseas recibir más información?</p>
                            <div class="impl_footer_subs">
                                <input type="text" class="form-control" placeholder="Ingrese su correo">
                                <button class="foo_subs_btn"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">

                    </div>
                    <div class="col-4">
                        <div class="impl_foo_box footer_abt_text" style="margin-top: -100px;">
                            <a href="{{ url('/') }}"><img src="{{ asset('src/pedro/logo footer_Mesa de trabajo 13 footer.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----Bottom Footer Start---->
    <div class="impl_btm_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <p class="impl_copyright">Copyright &copy; 2019 Cognitiia.</p>
                    <p class="impl_copyright"><a href="{{asset('/src/pedro/terminos-y-condiciones-generales.pdf')}}" target='_blank'>Términos y Condiciones.</a> Diseñado y desarrollado por Cognitiia C.A.</p>

                </div>
            </div>
        </div>
    </div>
  <!---- Go To Top---->
  <span class="gotop"><img src="images/goto.png" alt=""></span>
  <!--Main js file Style-->
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/popper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/ion.rangeSlider.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/plugin/magnific/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/plugin/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/plugin/nice_select/jquery.nice-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/maracucho/js/custom.js') }}"></script>
    <script src="{{ asset('js/share.js') }}"></script>
    <!--Main js file End-->
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- AJAX Scripts--}}
    <script src="{{ asset('js/add_to_cart_ajax.js') }}"></script>
    <script src="{{ asset('js/delete_from_cart_view_products_ajax.js') }}"></script>
    <script type="text/javascript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
      }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>

</html>
