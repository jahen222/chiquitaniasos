<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>CarProjects</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('src/maracucho/css/header.css') }}">
	<link rel="stylesheet" href="{{ asset('src/maracucho/css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('src/maracucho/css/footer.css') }}">
</head>
<body>
	<header class="container-fluid">
		<div class="header row">
			<div class="col-md-3 justify-content-center float-left">
				<nav class="nav flex-column" id="menu-lateral">
					<a class="nav-link" href="#">
						<div class="loading hide">
							<div class="loading-bar"></div>
							<div class="loading-bar"></div>
							<div class="loading-bar"></div>
						</div>
						Inicio
					</a>
					<a class="nav-link" href="#">
						<div class="loading hide">
							<div class="loading-bar"></div>
							<div class="loading-bar"></div>
							<div class="loading-bar"></div>
						</div>
						Tienda
					</a>
					<a class="nav-link" href="#">
						<div class="loading hide">
							<div class="loading-bar"></div>
							<div class="loading-bar"></div>
							<div class="loading-bar"></div>
						</div>
						Servicios
					</a>
					<a class="nav-link" href="#">
						<div class="loading hide">
							<div class="loading-bar"></div>
							<div class="loading-bar"></div>
							<div class="loading-bar"></div>
						</div>
						Empresa
					</a>
					<a class="nav-link" href="#">
						<div class="loading hide">
							<div class="loading-bar"></div>
							<div class="loading-bar"></div>
							<div class="loading-bar"></div>
						</div>
						Blog
					</a>
					<a class="nav-link" href="#">
						<div class="loading hide">
							<div class="loading-bar"></div>
							<div class="loading-bar"></div>
							<div class="loading-bar"></div>
						</div>
						Contacto
					</a>
					<a class="nav-link" href="#">
						<div class="loading hide">
							<div class="loading-bar"></div>
							<div class="loading-bar"></div>
							<div class="loading-bar"></div>
						</div>
						FAQ
					</a>
				</nav>
			</div>
			<div class="col-md-6 text-center">
				<img class="logo" src="{{ asset('src/maracucho/img/logo.png') }}">
				<form>
					<fieldset class="form-group">
						<label for="search-box">¿Qué estás buscando?</label>
						<input type="text" class="main-input" id="search-box" name="busqueda">
					</fieldset>
				</form>

				<div id="menu-slider" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<ul class="nav nav-justified">
								<li class="nav-item">
									<a href="#">Chasis</a>
								</li>
								<li class="nav-item">
									<a href="#">Motor</a>
								</li>
								<li class="nav-item">
									<a href="#">Partes y Carrocería</a>
								</li>
							</ul>
						</div>
						<div class="carousel-item">
							<ul class="nav nav-justified">
								<li class="nav-item">
									<a href="#">Sistema Eléctrico</a>
								</li>
								<li class="nav-item">
									<a href="#">Herramientas</a>
								</li>
								<li class="nav-item">
									<a href="#">Limpieza y Mantenimiento</a>
								</li>
								<li class="nav-item">
									<a href="#">Accesorios Electrónicos</a>
								</li>
							</ul>
						</div>
						<a class="carousel-control-prev" href="#menu-slider" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#menu-slider" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<nav class="nav navbar">
					<a class="nav-link" href="#">Ingreso</a>
					<a class="nav-link" href="#">Idioma</a>
					<a class="nav-link" href="#"><img src="{{ asset('src/maracucho/img/carrito.png') }}"></a>
				</nav>
			</div>
		</div>
		<!--
		<svg id="curve" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 1416.99 174.01">
		<path class="cls-1" d="M0,280.8S283.66,59,608.94,163.56s437.93,150.57,808,10.34V309.54H0V280.8Z" transform="translate(0 -135.53)" stroke="white" fill="transparent" />
		</svg> -->
	</header>
	<svg height="0" width="0" class="svg-clip" style="position:absolute">
		<defs>
			<clipPath id="clip" clipPathUnits="objectBoundingBox">
				<path d="M0,0 L0,.5 Q.3,.2 .5,.5  T1,.5L1,0 0,0" />
			</clipPath>
		</defs>
	</svg>
	<section id="main-slider" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="{{ asset('src/maracucho/img/main-slider/home.jpg') }}" class="d-block w-100" alt="Sistema de escape takataka">
				<span>Sistema de<br>escape takataka</span>
			</div>
			<div class="carousel-item">
				<img src="{{ asset('src/maracucho/img/main-slider/JeepWrangler.jpg') }}" class="d-block w-100">
				<span>Sistema de<br>escape takataka</span>
			</div>
			<div class="carousel-item">
				<img src="{{ asset('src/maracucho/img/main-slider/home25.jpg') }}" class="d-block w-100">
				<span>Sistema de<br>escape takataka</span>
			</div>
			<div class="carousel-item">
				<img src="{{ asset('src/maracucho/img/main-slider/home26.jpg') }}" class="d-block w-100">
				<span>Sistema de<br>escape takataka</span>
			</div>
		</div>
		<a class="carousel-control-prev" href="#main-slider" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#main-slider" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</section>
	<section class="container-fluid home-tienda">
		<div class="row">
			<div class="col-md-6">
				<img src="{{ asset('src/maracucho/img/toyota.png') }}">
			</div>
			<div class="col-md-6 text-flow">
				<p class="text-flow-1">Lorem ipsum dolor sit amet,<br>consectetuer adipiscing elit,<br>sed diam</p>
			</div>
		</div>
		<div class="row home-category">
			<div class="col-md-3">
				<h2>Rines</h2>
				<a href="#">Ver más...</a>
			</div>
			<div class="col-md-3">
				<h2>Faros</h2>
				<a href="#">Ver más...</a>
			</div>
			<div class="col-md-3">
				<h2>Bumper</h2>
				<a href="#">Ver más...</a>
			</div>
			<div class="col-md-3">
				<h2>Motor</h2>
				<a href="#">Ver más...</a>
			</div>
		</div>
	</section>
	<section class="home-publicidad">
		<img src="{{ asset('src/maracucho/img/publicidad.jpg') }}" width="100%">
	</section>
	<section id="event-slider" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="{{ asset('src/maracucho/img/event-slider/event1.jpg') }}" class="d-block w-100">
				<div class="card">
					<div class="card-body">
						<h3 class="card-title">Eventos dolor sit amet</h3>
						<p class="card-text">Duis eleifend viverra facilisis. Aenean laoreet quis risus blandit ornare. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper elit sed urna eleifend, at elementum nunc malesuada. Maecenas feugiat nulla sem, in facilisis ante placerat ut. Donec sodales nisi sit amet nisl pretium, at cursus magna porttitor. Aliquam luctus id quam at gravida. Sed in rutrum metus. Mauris odio nisl, gravida at elit a, cursus sollicitudin ipsum. Proin imperdiet odio eget ligula aliquam, et porta ante rhoncus.</p>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img src="{{ asset('src/maracucho/img/event-slider/event2.jpg') }}" class="d-block w-100">
			</div>
		</div>
		<a class="carousel-control-prev" href="#event-slider" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#event-slider" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</section>
	<section class="container-fluid home-about">
		<div class="row">
			<div class="col-md-4">
				<div class="col-md-12 mt-3 mb-4"><span class="about-title">Nuestra empresa</span></div>
				<div class="col-md-12">
					<video autobuffer autoloop loop controls width="100%">
						<source src="/media/video.oga">
						<source src="/media/video.m4v">
						<object type="video/ogg" data="/media/video.oga" width="320" height="240">
						<param name="src" value="/media/video.oga">
						<param name="autoplay" value="false">
						<param name="autoStart" value="0">
						<p><a href="/media/video.oga">Download this video file.</a></p>
						</object>
					</video>
				</div>
				<div class="col-md-12 mb-2"><span class="about-subtitle">Lorem Ipsum</span></div>
				<div class="col-md-12">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
			<div class="col-md-6 offset-2">
				<div class="row mt-5 mb-4"><div class="col-md-8 title-blog">Blog</div></div>
				<div class="row mb-4">
					<div class="col-md-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
					<div class="col-md-4"><div class="blog-images"></div></div>
				</div>
				<div class="row mb-4">
					<div class="col-md-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
					<div class="col-md-4"><div class="blog-images"></div></div>
				</div>
				<div class="row mb-4">
					<div class="col-md-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
					<div class="col-md-4"><div class="blog-images"></div></div>
				</div>
			</div>
		</div>
		<!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
			<polygon points="0 100, 0 0, 100 100, 0 100"/>
		</svg> -->
	</section>
	<section class="classic-section">
		<!-- <img src="img/classic.jpg"> -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 img-logo">
					<img src="{{ asset('src/maracucho/img/logo-white.png') }}">
				</div>
				<div class="w-100"></div>
				<div class="col-md-4">
					<h3>Autos Clásicos</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
		</div>
	</section>
	<footer class="container-fluid">
		<div class="row">
			<div class="col-md-7">
				<div class="row redes">
					<div class="col-md-4"><a href="#"><span class="fab fa-youtube circled-icon"></span>@carprojects</a></div>
					<div class="col-md-4"><a href="#"><span class="fab fa-instagram circled-icon"></span>@car.projects</a></div>
					<div class="col-md-4"><a href="https://wa.me/584149710220"></span>+58 414 97 10 220</a></div>
				</div>
				<div class="row redes">
					<div class="col-md-4"><a href="#"><span class="fab fa-twitter circled-icon"></span>@thecarprojects</a></div>
					<div class="col-md-4"><a href="#"><span class="fab fa-facebook-f circled-icon"></span>@carprojectsofficial</a></div>
					<div class="col-md-4"><a href="mailto:carprojects@gmail.com"><span class="fa fa-envelope"></span>carprojects@gmail.com</a></div>
				</div>
				<div class="row align-items-center">
					<div class="col-md-6">
						<form method="post">
							<fieldset clas="form-group">
								<legend>¿Desea recibir más información?</legend>
								<div class="form-row">
									<input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
								</div>
								<div class="form-row">
									<input type="email" class="form-control" name="email" placeholder="Email" required>
								</div>
								<div class="form-row justify-content-end">
									<button type="submit" class="btn btn-form-footer">Enviar</button>
								</div>
							</fieldset>
						</form>
					</div>
					<div class="col-md-6"><img src="{{ asset('src/maracucho/img/paypal.png') }}"></div>
				</div>
				<div class="row">
					<div class="col-auto">
						Copyright &copy 2018 <b>Car Projects</b>
					</div>
					<div class="col-md">
					</div>
				</div>
				<div class="row">
					<div class="col-auto">
						<a href="#">Términos y Condiciones</a>
					</div>
					<div class="col-auto">
						Diseñado y desarrollado por <a href="#">Codmark</a>
					</div>
				</div>
			</div>
			<div class="col-md align-content-center text-center">
				<a href="#"><img src="{{ asset('src/maracucho/img/logo-white.png') }}"></a>
			</div>
		</div>
	</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{ asset('src/maracucho/js/custom.js') }}"></script>
</body>
</html>
