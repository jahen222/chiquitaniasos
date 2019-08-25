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
    <!--Srart Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/css/ion.rangeSlider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/css/ion.rangeSlider.skinFlat.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/js/plugin/magnific/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/js/plugin/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/js/plugin/slick/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/js/plugin/nice_select/nice-select.css') }}">
    <!----Revolution slider---->
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/js/plugin/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/impelcarhtml-101/css/menu_slider.css') }}">

    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('src/maracucho/img/logo_favicon.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>

<body>
    <!------ Header Start mobile------>
    <div class="impl_header_wrapper d-xl-none d-lg-none d-md-none">
        <div class="impl_logo">
            <a href="{{ url('/') }}"><img src="{{ asset('src/maracucho/img/logo_v2.png') }}" alt="Logo" class="img-fluid"></a>
        </div>
        <!--menu start-->
        <div class="impl_menu_wrapper" style="background-color: #171615;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <button class="impl_menu_btn">
                          <i class="fa fa-car" aria-hidden="true"></i>
                          <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <div class="impl_menu_inner">
                            <div class="impl_logo_responsive">
                                <a href="{{ url('/') }}"><img src="{{ asset('src/maracucho/img/logo_mobile.png') }}" alt="Logo" class="img-fluid"></a>
                            </div>
                            <a href="sell_step.html" class="impl_btn">Sell your car</a>
                            <div class="impl_menu">
                                <nav>
                                    <div class="menu_cross">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                    <ul>
                                        <li><a href="{{ route('home') }}" >Inicio</a></li>
                                        <li><a href="{{ route('store') }}">Tienda</a></li>
                                        <li><a href="{{ route('service') }}">Servicios</a></li>
                                        <li><a href="{{ route('aboutUs') }}">Empresa</a></li>
                                        <li><a href="{{ route('blog') }}">Blog</a></li>
                                        <li><a href="{{ route('contact') }}">Contacto</a></li>
                                        <li><a href="{{ route('faq') }}">FAQ</a></li>
                                        <li><a href="{{ url('cart') }}">Cart</a></li>
                                        @if (Auth::guest())
                                            <!-- Without Authentication Links -->
                                            <li><a href="#signin" data-toggle="modal">Entrar</a></li>
                                            <li><a href="#signup" data-toggle="modal">Registrarse</a></li>
                                        @else
                                            <li><a href="{{ url('users/'.Auth::user()->id.'/settings') }}">Configuración</a></li>
                                            <li><a href="{{ url('users/'.Auth::user()->id.'/orders') }}">Órdenes</a></li>
                                            <li><a href="{{ url('users/'.Auth::user()->id.'/personalData') }}">Perfil</a></li>
                                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</a></li>
                                        @endif
                                        <!-- Admin panel link -->
                                        @if(Auth::check() && Auth::user()->admin)
                                            <li><a href="{{ url('/admin') }}">Admin panel</a></li>
                                        @endif
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

    <!------ Header Start Desktop------>
    <section class="curve_svg d-none d-md-block">
        <!------ Left menu header ------>
        <div class="col-md-3 justify-content-center float-left menu-left">
            <nav class="nav flex-column" id="menu-lateral">
                <a class="nav-link" href="{{ route('home') }}">
                    <div class="loading hide">
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                    </div>
                    Inicio
                </a>
                <a class="nav-link" href="{{ route('store') }}">
                    <div class="loading hide">
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                    </div>
                    Tienda
                </a>
                <a class="nav-link" href="{{ route('service') }}">
                    <div class="loading hide">
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                    </div>
                    Servicios
                </a>
                <a class="nav-link" href="{{ route('aboutUs') }}">
                    <div class="loading hide">
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                    </div>
                    Empresa
                </a>
                <a class="nav-link" href="{{ route('blog') }}">
                    <div class="loading hide">
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                    </div>
                    Blog
                </a>
                <a class="nav-link" href="{{ route('contact') }}">
                    <div class="loading hide">
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                    </div>
                    Contacto
                </a>
                <a class="nav-link" href="{{ route('faq') }}">
                    <div class="loading hide">
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                    </div>
                    FAQ
                </a>
            </nav>
        </div>
        <!------ Logo header ------>
        <div class="impl_logo">
            <a href="{{ url('/') }}"><img src="{{ asset('src/maracucho/img/logo.png') }}" alt="Logo" class="img-fluid"></a>
        </div>
        <!------ Right menu header ------>
        <div class="impl_top_info">
            <ul class="impl_header_icons">
                  <style>
                      div#google_translate_element div.goog-te-gadget-simple{background-color:black; border-left: 0px; border-right: 0px; border-top: 0px; border-bottom: 0px;}
                      div#google_translate_element img.goog-te-gadget-icon{display: none;}
                      div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span{color:#fff; border-left: 0px !important;}
                      div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span:hover{color:#ff5500;}
                  </style>​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​
                  <li><div id="google_translate_element"></div></li>
                <li class="cart-popup d-none d-lg-block d-xl-block"><a href="{{ url('cart') }}"><img src="{{ asset('src/pedro/Home V2_Mesa de trabajo 19 carrito compras.png') }}" alt="Logo" class="img-fluid"></a></li>
                @if (Auth::guest())
                    <!-- Without Authentication Links -->
                    <li><a href="#signin" data-toggle="modal">Entrar</a></li>
                    <li><a href="#signup" data-toggle="modal">Registrarse</a></li>

                @else
                    <!-- Admin panel link -->
                    @if(Auth::check() && Auth::user()->admin)
                            <li>
                                <a href="{{ url('/admin') }}">
                                    <span class="glyphicon glyphicon-wrench"></span>Admin panel
                                </a>
                            </li>
                    @endif
                    <!-- Authentication Links -->
                    <li class="cart-popup"><a href="#">{{ Auth::user()->username }}</a>
                        <!--shopping cart box-->
                        <div class="cart-box">
                            <div class="popup-container">
                                <div class="cart-entry">
                                    <div class="content">
                                        <a href="{{ url('users/'.Auth::user()->id.'/settings') }}" class="title">Configuración</a>
                                    </div>
                                </div>
                                <div class="cart-entry">
                                    <div class="content">
                                        <a href="{{ url('users/'.Auth::user()->id.'/orders') }}" class="title">Órdenes</a>
                                    </div>
                                </div>
                                <div class="cart-entry">
                                    <div class="content">
                                        <a href="{{ url('users/'.Auth::user()->id.'/personalData') }}" class="title">Perfil</a>
                                    </div>
                                </div>
                                <div class="cart-entry">
                                    <div class="content">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="title">Salir</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endif
            </ul>
        </div><br><br><br>
        <!------ Search bar header ------>
        <div class="col-md-4 text-center search-panel" style="margin-top: 30px">
            <form action="{{ route('search') }}" method="POST">
                {{ csrf_field() }}
                <fieldset class="form-group">
                    <h3 for="search-box">¿Qué estás buscando?</h3>
                    <i class="fa fa-search fa-2x" aria-hidden="true"></i><input type="text" class="main-input" id="search-box" name="search">
                </fieldset>
            </form>
        </div>
        <br>
        <!------ Category slider bar header ------>
        <br>
        <div class="container">
          	<div class="row">
            		<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000" style="margin-top: 50px;">
                    <div class="MultiCarousel-inner" style="text-align: center;">
                      @foreach($categories as $category)
                          <div class="item">
                              <div class="pad15">
                                  <p class="lead">
                                      <div class="btn-group dropright" style="z-index: 1;">
                                          <a class="btn" href="{{ url('/categories/'.$category->id.'/products') }}" role="button">{{$category->name}}</a>
                                          <a class="btn dropdown-toggle dropdown-toggle-split" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left: -15px;"></a>
                                          <div class="dropdown-menu">
                                              @foreach($category->subcategories as $subcategory)
                                                  <a class="dropdown-item" href="{{ url('/subcategories/'.$subcategory->id.'/products') }}">{{$subcategory->name}}</a>
                                              @endforeach
                                          </div>
                                      </div>
                                  </p>
                              </div>
                          </div>
                      @endforeach
                    </div>
                    <a class="leftLst" href="#menu-slider" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="rightLst" href="#menu-slider" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
          	</div>
        </div>
        <!------ Curve Start -----
        <svg id="curve" data-name="Layer-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1416.99 148.01">
            <path class="cls-1" d="M0,280.8S283.66,59,608.94,163.56s437.93,150.57,808,10.34V309.54H0V280.8Z" transform="translate(0-135.53)"/>
        </svg>-->
    </section>

    <!------ Slider Start ------>
    <div class="impl_slider_wrapper" style="margin-top: -120px;">
        <div id="rev_slider_28_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="parallax-zoom-slices" data-source="gallery" style="background:#000000;padding:0px;">
            <div id="rev_slider_28_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                <ul>
                    <li data-index="rs-66" data-transition="slotzoom-horizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1000" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <div class="tp-caption tp-shape tp-shapewrapper " id="slide-2800-layer-7" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"from":"opacity:0;","speed":500,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"speed":5000,"to":"opacity:0;","ease":"Power4.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;background-color:rgba(0, 0, 0, 0.40);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('images/settings/home/home_slider1_image.png') }}" alt="" title="homedefault-bg1" width="1920" height="1033" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <div id="rrzt_6" class="rev_row_zone rev_row_zone_top" style="z-index: 8;">

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption  " id="slide-66-layer-4" data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="row" data-columnbreak="3" data-responsive_offset="on" data-frames='[{"delay":30,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);">
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption  " id="slide-6-layer-5" data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="column" data-responsive_offset="on" data-frames='[{"delay":"+-20","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-columnwidth="50%" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; width: 100%;"> </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption  " id="slide-6-layer-6" data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="column" data-responsive_offset="on" data-frames='[{"delay":"+-20","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-columnwidth="50%" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10; width: 100%;"> </div>
                            </div>
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption   tp-resizeme  text-slider" id="slide-6-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-70','-80']" data-fontsize="['70','70','40','30']" data-lineheight="['100','100','40','30']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":30,"split":"chars","splitdelay":0.1,"speed":3000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1500,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 70px; line-height: 100px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family: 'Raleway', sans-serif;text-transform:uppercase;">{!! $setting->home_slider1_text1 !!}</div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption   tp-resizeme  text-slider" id="slide-6-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','-15','-25']" data-fontsize="['24','24','24','20']" data-lineheight="['24','24','24','26']" data-width="['none','none','none','310']" data-height="['none','none','none','54']" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":30,"speed":3500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"nothing"}]' data-textAlign="['inherit','inherit','inherit','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 26px; line-height: 26px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Roboto;">{!! $setting->home_slider1_text2 !!}</div>

                        <!-- LAYER NR. 6 -->
                        <a class="tp-caption rev-btn  tp-resizeme" href="#" target="_blank" id="slide-67-layer-7" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['80','80','50','40']" data-width="250" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="on" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[50,50,50,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[50,50,50,0]" style="cursor:pointer;text-decoration:none;z-index:19;;line-height:40px;"><span class="impl_btn">GET STARTED </span></a>
                    </li>
                    <!--slid2-->
                    <li data-index="rs-67" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="600" data-thumb="../../assets/images/woman2-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 0px 0px transparent">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('images/settings/home/home_slider2_image.png') }}" alt="" data-bgposition="center center" data-kenburns="on" data-duration="5000" data-ease="Power2.easeInOut" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-blurstart="20" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-67-layer-10" data-x="['center','center','center','center']" data-hoffset="['151','228','224','117']" data-y="['middle','middle','middle','middle']" data-voffset="['-212','-159','71','-222']" data-width="['150','150','100','100']" data-height="['200','150','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":350,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3650","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-67-layer-29" data-x="['center','center','center','center']" data-hoffset="['339','-442','104','-159']" data-y="['middle','middle','middle','middle']" data-voffset="['2','165','-172','219']" data-width="['250','250','150','150']" data-height="['150','150','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-67-layer-12" data-x="['center','center','center','center']" data-hoffset="['162','216','-239','193']" data-y="['middle','middle','middle','middle']" data-voffset="['195','245','6','146']" data-width="['250','250','100','100']" data-height="150" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":450,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3550","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-67-layer-34" data-x="['center','center','center','center']" data-hoffset="['-186','-119','273','-223']" data-y="['middle','middle','middle','middle']" data-voffset="['269','217','-121','69']" data-width="['300','300','150','150']" data-height="['200','200','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3500","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-67-layer-11" data-x="['center','center','center','center']" data-hoffset="['-325','292','162','-34']" data-y="['middle','middle','middle','middle']" data-voffset="['3','55','-275','-174']" data-width="150" data-height="['250','150','50','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":550,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3450","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-67-layer-27" data-x="['center','center','center','center']" data-hoffset="['-429','523','-190','-306']" data-y="['middle','middle','middle','middle']" data-voffset="['-327','173','181','480']" data-width="['250','250','150','150']" data-height="['300','300','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":320,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3680","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 8 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-67-layer-28" data-x="['center','center','center','center']" data-hoffset="['422','-409','208','225']" data-y="['middle','middle','middle','middle']" data-voffset="['-245','-72','294','-14']" data-width="['300','300','150','150']" data-height="['250','250','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":360,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3640","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 9 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-67-layer-30" data-x="['center','center','center','center']" data-hoffset="['549','-445','28','58']" data-y="['middle','middle','middle','middle']" data-voffset="['236','400','316','287']" data-width="['300','300','150','200']" data-height="['250','250','150','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 10 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-67-layer-31" data-x="['center','center','center','center']" data-hoffset="['-522','492','-151','262']" data-y="['middle','middle','middle','middle']" data-voffset="['339','-180','330','-141']" data-width="['300','300','150','150']" data-height="['250','250','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":440,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3560","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 14;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 11 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-67-layer-32" data-x="['center','center','center','center']" data-hoffset="['-588','-375','-253','-207']" data-y="['middle','middle','middle','middle']" data-voffset="['72','-328','-172','-111']" data-width="['300','300','150','150']" data-height="['200','200','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":480,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3520","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 15;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 12 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-67-layer-33" data-x="['center','center','center','center']" data-hoffset="['-37','73','-76','-100']" data-y="['middle','middle','middle','middle']" data-voffset="['-401','-340','-293','-246']" data-width="['450','400','250','250']" data-height="['100','100','50','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":310,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3690","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 16;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 13 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-67-layer-35" data-x="['center','center','center','center']" data-hoffset="['186','38','116','17']" data-y="['middle','middle','middle','middle']" data-voffset="['363','402','190','395']" data-width="['350','400','250','250']" data-height="['100','100','50','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":340,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3660","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 17;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 14 -->
                        <div class="tp-caption tp-shape tp-shapewrapper " id="slide-67-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":10,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 18;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 15 -->
                        <div class="tp-caption   tp-resizeme" id="slide-67-layer-2" data-x="['center','center','center','center']" data-hoffset="['1','1','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-70']" data-fontsize="['70','70','30','26']" data-lineheight="['80','70','40','30']" data-width="['none','none','481','360']" data-height="none" data-whitespace="['nowrap','nowrap','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 19; white-space: nowrap; font-size: 70px; line-height: 80px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family: 'Raleway', sans-serif;text-transform:uppercase;">{!! $setting->home_slider2_text !!}</div>
                        <!-- LAYER NR. 17 -->
                        <a class="tp-caption rev-btn  tp-resizeme" href="#" target="_blank" id="slide-67-layer-8" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['80','50','20','5']" data-width="250" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="on" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[50,50,50,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[50,50,50,0]" style="cursor:pointer;text-decoration: none;z-index:19;line-height:45px;"><span class="impl_btn">GET STARTED </span></a>
                    </li>

                    <!--slid3-->
                    <li data-index="rs-68" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="600" data-thumb="../../assets/images/woman2-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 0px 0px transparent">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('images/settings/home/home_slider3_image.png') }}" alt="" data-bgposition="center center" data-kenburns="on" data-duration="5000" data-ease="Power2.easeInOut" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-blurstart="20" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-10" data-x="['center','center','center','center']" data-hoffset="['151','228','224','117']" data-y="['middle','middle','middle','middle']" data-voffset="['-212','-159','71','-222']" data-width="['150','150','100','100']" data-height="['200','150','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":350,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3650","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-29" data-x="['center','center','center','center']" data-hoffset="['339','-442','104','-159']" data-y="['middle','middle','middle','middle']" data-voffset="['2','165','-172','219']" data-width="['250','250','150','150']" data-height="['150','150','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-12" data-x="['center','center','center','center']" data-hoffset="['162','216','-239','193']" data-y="['middle','middle','middle','middle']" data-voffset="['195','245','6','146']" data-width="['250','250','100','100']" data-height="150" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":450,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3550","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-34" data-x="['center','center','center','center']" data-hoffset="['-186','-119','273','-223']" data-y="['middle','middle','middle','middle']" data-voffset="['269','217','-121','69']" data-width="['300','300','150','150']" data-height="['200','200','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3500","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-11" data-x="['center','center','center','center']" data-hoffset="['-325','292','162','-34']" data-y="['middle','middle','middle','middle']" data-voffset="['3','55','-275','-174']" data-width="150" data-height="['250','150','50','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":550,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3450","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-27" data-x="['center','center','center','center']" data-hoffset="['-429','523','-190','-306']" data-y="['middle','middle','middle','middle']" data-voffset="['-327','173','181','480']" data-width="['250','250','150','150']" data-height="['300','300','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":320,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3680","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 8 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-28" data-x="['center','center','center','center']" data-hoffset="['422','-409','208','225']" data-y="['middle','middle','middle','middle']" data-voffset="['-245','-72','294','-14']" data-width="['300','300','150','150']" data-height="['250','250','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":360,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3640","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 9 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-30" data-x="['center','center','center','center']" data-hoffset="['549','-445','28','58']" data-y="['middle','middle','middle','middle']" data-voffset="['236','400','316','287']" data-width="['300','300','150','200']" data-height="['250','250','150','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 10 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-31" data-x="['center','center','center','center']" data-hoffset="['-522','492','-151','262']" data-y="['middle','middle','middle','middle']" data-voffset="['339','-180','330','-141']" data-width="['300','300','150','150']" data-height="['250','250','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":440,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3560","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 14;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 11 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-32" data-x="['center','center','center','center']" data-hoffset="['-588','-375','-253','-207']" data-y="['middle','middle','middle','middle']" data-voffset="['72','-328','-172','-111']" data-width="['300','300','150','150']" data-height="['200','200','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":480,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3520","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 15;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 12 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-33" data-x="['center','center','center','center']" data-hoffset="['-37','73','-76','-100']" data-y="['middle','middle','middle','middle']" data-voffset="['-401','-340','-293','-246']" data-width="['450','400','250','250']" data-height="['100','100','50','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":310,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3690","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 16;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 13 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-35" data-x="['center','center','center','center']" data-hoffset="['186','38','116','17']" data-y="['middle','middle','middle','middle']" data-voffset="['363','402','190','395']" data-width="['350','400','250','250']" data-height="['100','100','50','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":340,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3660","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 17;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 14 -->
                        <div class="tp-caption tp-shape tp-shapewrapper " id="slide-68-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":10,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 18;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 15 -->
                        <div class="tp-caption   tp-resizeme" id="slide-68-layer-2" data-x="['center','center','center','center']" data-hoffset="['1','1','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-70']" data-fontsize="['70','70','30','26']" data-lineheight="['80','70','40','30']" data-width="['none','none','481','360']" data-height="none" data-whitespace="['nowrap','nowrap','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 19; white-space: nowrap; font-size: 70px; line-height: 80px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family: 'Raleway', sans-serif;text-transform:uppercase;">{!! $setting->home_slider3_text !!}</div>
                        <!-- LAYER NR. 17 -->
                        <a class="tp-caption rev-btn  tp-resizeme" href="#" target="_blank" id="slide-68-layer-8" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['80','50','20','5']" data-width="250" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="on" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[50,50,50,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[50,50,50,0]" style="cursor:pointer;text-decoration: none;z-index:19;line-height:45px;"><span class="impl_btn">GET STARTED </span></a>
                    </li>

                    <!--slid4-->
                    <li data-index="rs-69" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="600" data-thumb="../../assets/images/woman2-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 0px 0px transparent">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('images/settings/home/home_slider4_image.png') }}" alt="" data-bgposition="center center" data-kenburns="on" data-duration="5000" data-ease="Power2.easeInOut" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-blurstart="20" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-69-layer-10" data-x="['center','center','center','center']" data-hoffset="['151','228','224','117']" data-y="['middle','middle','middle','middle']" data-voffset="['-212','-159','71','-222']" data-width="['150','150','100','100']" data-height="['200','150','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":350,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3650","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-69-layer-29" data-x="['center','center','center','center']" data-hoffset="['339','-442','104','-159']" data-y="['middle','middle','middle','middle']" data-voffset="['2','165','-172','219']" data-width="['250','250','150','150']" data-height="['150','150','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-69-layer-12" data-x="['center','center','center','center']" data-hoffset="['162','216','-239','193']" data-y="['middle','middle','middle','middle']" data-voffset="['195','245','6','146']" data-width="['250','250','100','100']" data-height="150" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":450,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3550","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-69-layer-34" data-x="['center','center','center','center']" data-hoffset="['-186','-119','273','-223']" data-y="['middle','middle','middle','middle']" data-voffset="['269','217','-121','69']" data-width="['300','300','150','150']" data-height="['200','200','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3500","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-69-layer-11" data-x="['center','center','center','center']" data-hoffset="['-325','292','162','-34']" data-y="['middle','middle','middle','middle']" data-voffset="['3','55','-275','-174']" data-width="150" data-height="['250','150','50','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":550,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3450","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-69-layer-27" data-x="['center','center','center','center']" data-hoffset="['-429','523','-190','-306']" data-y="['middle','middle','middle','middle']" data-voffset="['-327','173','181','480']" data-width="['250','250','150','150']" data-height="['300','300','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":320,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3680","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 8 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-69-layer-28" data-x="['center','center','center','center']" data-hoffset="['422','-409','208','225']" data-y="['middle','middle','middle','middle']" data-voffset="['-245','-72','294','-14']" data-width="['300','300','150','150']" data-height="['250','250','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":360,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3640","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 9 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-69-layer-30" data-x="['center','center','center','center']" data-hoffset="['549','-445','28','58']" data-y="['middle','middle','middle','middle']" data-voffset="['236','400','316','287']" data-width="['300','300','150','200']" data-height="['250','250','150','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 10 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-69-layer-31" data-x="['center','center','center','center']" data-hoffset="['-522','492','-151','262']" data-y="['middle','middle','middle','middle']" data-voffset="['339','-180','330','-141']" data-width="['300','300','150','150']" data-height="['250','250','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":440,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3560","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 14;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 11 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-69-layer-32" data-x="['center','center','center','center']" data-hoffset="['-588','-375','-253','-207']" data-y="['middle','middle','middle','middle']" data-voffset="['72','-328','-172','-111']" data-width="['300','300','150','150']" data-height="['200','200','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":480,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3520","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 15;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 12 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-69-layer-33" data-x="['center','center','center','center']" data-hoffset="['-37','73','-76','-100']" data-y="['middle','middle','middle','middle']" data-voffset="['-401','-340','-293','-246']" data-width="['450','400','250','250']" data-height="['100','100','50','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":310,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3690","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 16;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 13 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-69-layer-35" data-x="['center','center','center','center']" data-hoffset="['186','38','116','17']" data-y="['middle','middle','middle','middle']" data-voffset="['363','402','190','395']" data-width="['350','400','250','250']" data-height="['100','100','50','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":340,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3660","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 17;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 14 -->
                        <div class="tp-caption tp-shape tp-shapewrapper " id="slide-69-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":10,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 18;background-color:rgba(0, 0, 0, 0.5);"> </div>

                        <!-- LAYER NR. 15 -->
                        <div class="tp-caption   tp-resizeme" id="slide-69-layer-2" data-x="['center','center','center','center']" data-hoffset="['1','1','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-70']" data-fontsize="['70','70','30','26']" data-lineheight="['80','70','40','30']" data-width="['none','none','481','360']" data-height="none" data-whitespace="['nowrap','nowrap','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 19; white-space: nowrap; font-size: 70px; line-height: 80px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family: 'Raleway', sans-serif;text-transform:uppercase;">{!! $setting->home_slider4_text !!}</div>
                        <!-- LAYER NR. 17 -->
                        <a class="tp-caption rev-btn  tp-resizeme" href="#" target="_blank" id="slide-69-layer-8" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['80','50','20','5']" data-width="250" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="on" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[50,50,50,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[50,50,50,0]" style="cursor:pointer;text-decoration: none;z-index:19;line-height:45px;"><span class="impl_btn">GET STARTED </span></a>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <!------ Welcome Wrapper Start ------>
    <div class="impl_welcome_wrapper impl_bottompadder80">
        <div class="container" style="padding-top: 50px; padding-bottom: 0px !important;">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <div class="impl_welcome_img">
                        <img src="{{ asset('images/settings/home/home_categories_image.png') }}" alt="Welcome" class="img-responsive">
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                    <div class="impl_welcome_text" style="padding-top: -50px;">
                        <div class="panel-group" id="accordion">
                          <h2 style="margin-top: 180px !important; color: #ff5500;">{!! $setting->home_categories_text !!}</h2>
                          <!--
                          @foreach($events as $event)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne{{$event->id}}">{{$event->title}}  {{$event->start}} - {{$event->end}}</a></h4>
                                </div>
                                <div id="collapseOne{{$event->id}}" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        {{$event->description}}
                                    </div>
                                </div>
                            </div>
                          @endforeach
                          -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
              <!--  @foreach($recommendedProducts as $recommendedProduct)
                    <div class="col-lg-4 col-md-6">
                        <div class="impl_fea_car_box">
                            <div class="impl_fea_car_img">
                                <a href="{{ url('/products/'.$recommendedProduct->id) }}"><img src="{{$recommendedProduct->path_to_thumbnail}}" alt="" class="img-fluid impl_frst_car_img" style="display:block;margin:auto;"/></a>
                                <a href="{{ url('/products/'.$recommendedProduct->id) }}"><img src="{{$recommendedProduct->path_to_thumbnail}}" alt="" class="img-fluid impl_hover_car_img" style="display:block;margin:auto;"/></a>
                                <span class="impl_img_tag" title="compare"><a href="{{ url('/products/compare/'.$recommendedProduct->id) }}"><i class="fa fa-exchange" aria-hidden="true"></i></a></span>
                            </div>
                            <div class="impl_fea_car_data">
                                <h2><a href="{{ url('/products/'.$recommendedProduct->id) }}">{{$recommendedProduct->name}}</a></h2>
                                <ul>
                                    <li><span class="impl_fea_title">Marca</span>
                                        <span class="impl_fea_name">{!!$recommendedProduct->brand!!}</span></li>
                                    <li><span class="impl_fea_title">Modelo</span>
                                        <span class="impl_fea_name">{!!$recommendedProduct->model!!}</span></li>
                                    <li><span class="impl_fea_title">Hecho en</span>
                                        <span class="impl_fea_name">{!!$recommendedProduct->made_in!!}</span></li>
                                    <li><span class="impl_fea_title">Año</span>
                                        <span class="impl_fea_name">{!!$recommendedProduct->year!!}</span></li>
                                    <li><span class="impl_fea_title">Categoría</span>
                                        <span class="impl_fea_name">{!!$recommendedProduct->Subcategory->name!!}</span></li>
                                  </ul>
                                <div class="impl_fea_btn">
                                    <button class="impl_btn"><a href="{{ url('/products/'.$recommendedProduct->id) }}"><span class="impl_doller">${{$recommendedProduct->price}}</span><span class="impl_bnw">buy now</span></a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


              <?php //$count = 0; ?>
              @foreach($categories as $category)
                  @foreach($category->subcategories as $subcategory)
                      <div class="col-lg-3 col-md-6">
                          <div class="impl_fea_car_box">
                              <div class="impl_fea_car_img">
                                  <a href="{{ url('/subcategories/'.$subcategory->id.'/products') }}"><img src="{{$category->path_to_image}}" alt="" class="img-fluid impl_frst_car_img" style="display:block;margin:auto;"/></a>
                                  <a href="{{ url('/subcategories/'.$subcategory->id.'/products') }}"><img src="{{$category->path_to_image}}" alt="" class="img-fluid impl_hover_car_img" style="display:block;margin:auto;"/></a>
                              </div>
                              <div class="impl_fea_car_data">
                                  <h2><a href="{{ url('/subcategories/'.$subcategory->id.'/products') }}">{{$subcategory->name}}</a></h2>
                                  <div class="impl_fea_btn">
                                      <button class="impl_btn"><a href="{{ url('/subcategories/'.$subcategory->id.'/products') }}"><span class="impl_doller">Ver más...</span><span class="impl_bnw">Ver más...</span></a></button>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <?php
                        //$count++;if ($count == 4) {break;}
                      ?>
                  @endforeach
              @endforeach

            -->
              <?php if (isset($subcategory_id_1->id)): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="impl_fea_car_box">
                        <div class="impl_fea_car_img">
                            <a href="{{ url('/subcategories/'.$subcategory_id_1->id.'/products') }}"><img src="{{$subcategory_id_1->category->path_to_image}}" alt="" class="img-fluid impl_frst_car_img" style="display:block;margin:auto;"/></a>
                            <a href="{{ url('/subcategories/'.$subcategory_id_1->id.'/products') }}"><img src="{{$subcategory_id_1->category->path_to_image}}" alt="" class="img-fluid impl_hover_car_img" style="display:block;margin:auto;"/></a>
                        </div>
                        <div class="impl_fea_car_data">
                            <h2><a href="{{ url('/categories/'.$subcategory_id_1->category->id.'/products') }}">{{$subcategory_id_1->category->name}}</a></h2>
                            <h2><a href="{{ url('/subcategories/'.$subcategory_id_1->id.'/products') }}">{{$subcategory_id_1->name}}</a></h2>
                            <div class="impl_fea_btn">
                                <button class="impl_btn"><a href="{{ url('/subcategories/'.$subcategory_id_1->id.'/products') }}"><span class="impl_doller">Ver más...</span><span class="impl_bnw">Ver más...</span></a></button>
                            </div>
                        </div>
                    </div>
                </div>
              <?php endif; ?>

              <?php if (isset($subcategory_id_2->id)): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="impl_fea_car_box">
                        <div class="impl_fea_car_img">
                            <a href="{{ url('/subcategories/'.$subcategory_id_2->id.'/products') }}"><img src="{{$subcategory_id_2->category->path_to_image}}" alt="" class="img-fluid impl_frst_car_img" style="display:block;margin:auto;"/></a>
                            <a href="{{ url('/subcategories/'.$subcategory_id_2->id.'/products') }}"><img src="{{$subcategory_id_2->category->path_to_image}}" alt="" class="img-fluid impl_hover_car_img" style="display:block;margin:auto;"/></a>
                        </div>
                        <div class="impl_fea_car_data">
                            <h2><a href="{{ url('/categories/'.$subcategory_id_2->category->id.'/products') }}">{{$subcategory_id_2->category->name}}</a></h2>
                            <h2><a href="{{ url('/subcategories/'.$subcategory_id_2->id.'/products') }}">{{$subcategory_id_2->name}}</a></h2>
                            <div class="impl_fea_btn">
                                <button class="impl_btn"><a href="{{ url('/subcategories/'.$subcategory_id_2->id.'/products') }}"><span class="impl_doller">Ver más...</span><span class="impl_bnw">Ver más...</span></a></button>
                            </div>
                        </div>
                    </div>
                </div>
              <?php endif; ?>

              <?php if (isset($subcategory_id_3->id)): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="impl_fea_car_box">
                        <div class="impl_fea_car_img">
                            <a href="{{ url('/subcategories/'.$subcategory_id_3->id.'/products') }}"><img src="{{$subcategory_id_3->category->path_to_image}}" alt="" class="img-fluid impl_frst_car_img" style="display:block;margin:auto;"/></a>
                            <a href="{{ url('/subcategories/'.$subcategory_id_3->id.'/products') }}"><img src="{{$subcategory_id_3->category->path_to_image}}" alt="" class="img-fluid impl_hover_car_img" style="display:block;margin:auto;"/></a>
                        </div>
                        <div class="impl_fea_car_data">
                            <h2><a href="{{ url('/categories/'.$subcategory_id_3->category->id.'/products') }}">{{$subcategory_id_3->category->name}}</a></h2>
                            <h2><a href="{{ url('/subcategories/'.$subcategory_id_3->id.'/products') }}">{{$subcategory_id_3->name}}</a></h2>
                            <div class="impl_fea_btn">
                                <button class="impl_btn"><a href="{{ url('/subcategories/'.$subcategory_id_3->id.'/products') }}"><span class="impl_doller">Ver más...</span><span class="impl_bnw">Ver más...</span></a></button>
                            </div>
                        </div>
                    </div>
                </div>
              <?php endif; ?>

              <?php if (isset($subcategory_id_4->id)): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="impl_fea_car_box">
                        <div class="impl_fea_car_img">
                            <a href="{{ url('/subcategories/'.$subcategory_id_4->id.'/products') }}"><img src="{{$subcategory_id_4->category->path_to_image}}" alt="" class="img-fluid impl_frst_car_img" style="display:block;margin:auto;"/></a>
                            <a href="{{ url('/subcategories/'.$subcategory_id_4->id.'/products') }}"><img src="{{$subcategory_id_4->category->path_to_image}}" alt="" class="img-fluid impl_hover_car_img" style="display:block;margin:auto;"/></a>
                        </div>
                        <div class="impl_fea_car_data">
                            <h2><a href="{{ url('/categories/'.$subcategory_id_4->category->id.'/products') }}">{{$subcategory_id_4->category->name}}</a></h2>
                            <h2><a href="{{ url('/subcategories/'.$subcategory_id_4->id.'/products') }}">{{$subcategory_id_4->name}}</a></h2>
                            <div class="impl_fea_btn">
                                <button class="impl_btn"><a href="{{ url('/subcategories/'.$subcategory_id_4->id.'/products') }}"><span class="impl_doller">Ver más...</span><span class="impl_bnw">Ver más...</span></a></button>
                            </div>
                        </div>
                    </div>
                </div>
              <?php endif; ?>
            </div>
        </div>
    </div>

    <!------ Need Help Section Start ------>
    <img src="{{ asset('images/settings/home/home_publicity1_image.png') }}" alt="">
    <!------ Info 1 Wrapper Start ------>
    <style media="screen">
        body{
            background-color: #ffffff !important;
        }
    </style>
        <div class="box_about1_home">
          <div class="container">
            <div class="row">
                <?php $count = 0; ?>
                @foreach($events as $event)
                    <div class="div_rounder_info1_home">
                      {!! $event->title !!}
                      <p>{!! $event->start !!} / {!! $event->end !!}</p>
                      {!! $event->description !!}
                    </div>
                    <?php
                      $count++;if ($count == 4) {break;}
                    ?>
                @endforeach
            </div>
          </div>
        </div>

    <!------ Service and Video Wrapper Start ------>
    <div class="impl_service_wrapper" style="margin-top: -40px; background-color: white;">
        <div class="impl_service_video">
            <div class="impl_video_inner">
                <div class="impl_servdo_video">
                    <span class="impl_play_icon"><a class="impl-popup-youtube" href="{!! $setting->home_video !!}" target="_blank"><i class="fa fa-play" aria-hidden="true"></i></a></span>
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-md-12">
            <div class="impl_service_left">
                <div class="impl_service_details">
                    <div class="impl_heading">
                        <h1  style="color: #ff5500;">ÚLTIMOS POSTS</h1>
                    </div>
                    <div class="impl_timeline_wrapper">
                        <ul class="impl_timeline" style="color: black;">
                          <?php $count = 0; ?>
                          @foreach($posts as $post)
                            <li>
                                <div class="impl_tl_item" style="color: black;">
                                    <a href="{{ url('/blog/'.$post->id) }}"><h2 style="color: black; padding-right: 30px">{{$post->title}}</h2></a>
                                    <p  style="color: black; padding-right: 30px">{{$post->created_at}}</p>
                                    <span class="impl_tl_icon"><img src="{{$post->path_to_image}}" alt="" class="img-fluid" /></span>
                                </div>
                            </li>
                            <?php
                              $count++;if ($count == 3) {break;}
                            ?>
                          @endforeach
                        </ul>
                    </div>
                </div>
            </div><br><br><br>
        </div>
    </div>

    <!------ Info 2 Wrapper Start  ------>
    <div class="box_about2_home">
      <div class="container box_about2_texto">
        <div class="row">
          <div class="col-sm" style="text-align: center">
            <div class="impl_welcome_img" style="margin-top: -8px;">
                <img src="{{ asset('src/maracucho/img/logo.png') }}" alt="Welcome" class="img-responsive">
            </div>
          </div>
          <div class="col-sm" style="margin-top: 120px; text-align: center">
            {!! $setting->home_publicity2_text !!}
          </div>
        </div>
      </div>
    </div>

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
                        <div class="impl_foo_box footer_abt_text" style="padding-top:50px">
                            <a href="{{ url('https://www.paypal.com/co/home') }}"><img src="{{ asset('src/pedro/paypal-03.png') }}" alt=""></a>
                        </div>
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
                    <p class="impl_copyright">Copyright &copy; 2019 Carprojects.</p>
                    <p class="impl_copyright"><a href="{{asset('/src/pedro/terminos-y-condiciones-generales.pdf')}}" target='_blank'>Términos y Condiciones.</a> Diseñado y desarrollado por CodMark C.A.</p>

                </div>
            </div>
        </div>
    </div>
  	<!---- Go To Top---->
  	<span class="gotop"><img src="{{ asset('src/impelcarhtml-101/images/goto.png') }}" alt=""></span>
    <!--Main js file Style-->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/popper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/ion.rangeSlider.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/plugin/magnific/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/plugin/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/plugin/nice_select/jquery.nice-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/appear.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/tweenmax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/plugin/counter/jquery.countTo.js') }}"></script>
    <!----------Revolution slider start---------->
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/plugin/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/plugin/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/plugin/revolution/js/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/plugin/revolution/js/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/plugin/revolution/js/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/plugin/revolution/js/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/plugin/revolution/js/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/plugin/revolution/js/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/plugin/revolution/js/revolution.addon.slicey.min.js') }}"></script>
    <!----------Revolution slider start---------->
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/custom.js') }}"></script>
    <!----------Charge menu start---------->
    <script type="text/javascript" src="{{ asset('src/maracucho/js/custom.js') }}"></script>
    <!--Main js file End-->
    <!----------Text slider start---------->
    <script type="text/javascript">
    $(document).ready(function () {
        var itemsMainDiv = ('.MultiCarousel');
        var itemsDiv = ('.MultiCarousel-inner');
        var itemWidth = "";

        $('.leftLst, .rightLst').click(function () {
            var condition = $(this).hasClass("leftLst");
            if (condition)
                click(0, this);
            else
                click(1, this);
        });

        ResCarouselSize();

        $(window).resize(function () {
            ResCarouselSize();
        });

        //this function define the size of the items
        function ResCarouselSize() {
            var incno = 0;
            var dataItems = ("data-items");
            var itemClass = ('.item');
            var id = 0;
            var btnParentSb = '';
            var itemsSplit = '';
            var sampwidth = $(itemsMainDiv).width();
            var bodyWidth = $('body').width();
            $(itemsDiv).each(function () {
                id = id + 1;
                var itemNumbers = $(this).find(itemClass).length;
                btnParentSb = $(this).parent().attr(dataItems);
                itemsSplit = btnParentSb.split(',');
                $(this).parent().attr("id", "MultiCarousel" + id);


                if (bodyWidth >= 1200) {
                    incno = itemsSplit[3];
                    itemWidth = sampwidth / incno;
                }
                else if (bodyWidth >= 992) {
                    incno = itemsSplit[2];
                    itemWidth = sampwidth / incno;
                }
                else if (bodyWidth >= 768) {
                    incno = itemsSplit[1];
                    itemWidth = sampwidth / incno;
                }
                else {
                    incno = itemsSplit[0];
                    itemWidth = sampwidth / incno;
                }
                $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
                $(this).find(itemClass).each(function () {
                    $(this).outerWidth(itemWidth);
                });

                $(".leftLst").addClass("over");
                $(".rightLst").removeClass("over");

            });
        }


        //this function used to move the items
        function ResCarousel(e, el, s) {
            var leftBtn = ('.leftLst');
            var rightBtn = ('.rightLst');
            var translateXval = '';
            var divStyle = $(el + ' ' + itemsDiv).css('transform');
            var values = divStyle.match(/-?[\d\.]+/g);
            var xds = Math.abs(values[4]);
            if (e == 0) {
                translateXval = parseInt(xds) - parseInt(itemWidth * s);
                $(el + ' ' + rightBtn).removeClass("over");

                if (translateXval <= itemWidth / 2) {
                    translateXval = 0;
                    $(el + ' ' + leftBtn).addClass("over");
                }
            }
            else if (e == 1) {
                var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
                translateXval = parseInt(xds) + parseInt(itemWidth * s);
                $(el + ' ' + leftBtn).removeClass("over");

                if (translateXval >= itemsCondition - itemWidth / 2) {
                    translateXval = itemsCondition;
                    $(el + ' ' + rightBtn).addClass("over");
                }
            }
            $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
        }

        //It is used to get some elements from btn
        function click(ell, ee) {
            var Parent = "#" + $(ee).parent().attr("id");
            var slide = $(Parent).attr("data-slide");
            ResCarousel(ell, Parent, slide);
        }

    });
    </script>

    <script type="text/javascript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
      }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>

</html>
