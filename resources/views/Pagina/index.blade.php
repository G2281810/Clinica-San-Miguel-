<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

     <!-- Site Metas -->
    <title>CLINICA SAN MIGUEL</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ URL::asset ('Pagina/images/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ URL::asset ('Pagina/images/apple-touch-icon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset ('Pagina/css/bootstrap.min.css') }}">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="{{ URL::asset ('Pagina/css/pogo-slider.min.css') }}">
	<!-- Site CSS -->
    <link rel="stylesheet" href="{{ URL::asset ('Pagina/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href=" {{ URL::asset ('Pagina/css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset ('Pagina/css/custom.css') }}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	<!-- LOADER -->
     <!-- <div id="preloader">
		<div class="loader">
			<img src="images/preloader.gif" alt="" />
		</div>
    </div>end loader -->
    <!-- END LOADER -->

	<!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="index.html"><img src="{{ asset ('Pagina/images/logotipo.jpg') }}" alt="image"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="#home">Inicio</a></li>
                        <li><a class="nav-link" href="#about">Sobre nosotros</a></li>
                        <li><a class="nav-link" href="#services">Servicios</a></li>
                        <li><a class="nav-link" href="#gallery">Instalaciones</a></li>
												<li><a class="nav-link" href="#team">Doctores</a></li>
												<li><a class="nav-link" href="#contact">Contacto</a></li>
												<li><a class="nav-link" href="{{ route ('vistalogin')}}">Agendar Cita</a></li>
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->

	<!-- Start Banner -->
	<div class="ulockd-home-slider">
		<div class="container-fluid">
			<div class="row">
				<div class="pogoSlider" id="js-main-slider">
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(Pagina/images/primera.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Bienvenido a Clinica San Miguel.</h1>
								<p>La mejor Clinica Medica que encontraras </p>
								<a href="#" class="btn">Contactanos.</a>
							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(Pagina/images/clinica-medica.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Bienvenido a Clinica San Miguel.</h1>
								<p>Cuida tus salud con los mejores tratamientos </p>
								<a href="#" class="btn">Contactanos.</a>
							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(Pagina/images/laboratorio.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Bienvenido a Clinica San Miguel.</h1>
								<p>Encontraras todo lo necesario para el bienestar de tu familia</p>
								<a href="#" class="btn">Contactanos.</a>
							</div>
						</div>

					</div>
				</div><!-- .pogoSlider -->
			</div>
		</div>
	</div>
	<!-- End Banner -->

	<!-- Start About us -->
	<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<h2>Sobre Nosotros.</h2>
							<p>Conoce toda nuestra misión y visión. </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row align-items-center about-main-info">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<h2> Bienvenido a Clinica San Miguel. </h2>
								<p>Somos una empresa del sector privado, dedicada a brindar servicios médicos a la población, diagnóstico y atención del paciente, apegados a las normas vigentes. </p>
								<p>Misión: Ser una empresa lider en el diagnóstico y manejo médico en el Valle de Toluca, que integre la mayor calidad en el análisis, diagnóstico y atención del paciente, apegados a las normas vigentes. </p>
								<p>Visión: Mantener altos niveles de calidad en servicios hospitalarios y de diagnóstico, conservando la excelencia en la atención integral de la población del Valle de Toluca.</p>

							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="about-m">
									<ul id="banner">
										<li>
											<img src="{{ asset ('Pagina/images/post.jpg') }}" alt="">
										</li>
										<li>
											<img src="{{ asset ('Pagina/images/tercera.jpg') }}" alt="">
										</li>
										<li>
											<img src="{{ asset ('Pagina/images/doctor.jpg') }}" alt="">
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About us -->

	<!-- Start Services -->
	<div id="services" class="services-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Servicios</h2>
						<p>Conoce nuestros servicios que ofrecemos para ti. </p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="owl-carousel owl-theme">
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-h-square" aria-hidden="true"></i></div>
								<h3 class="title">Atención medica continua o corta distancia.</h3>
								<p class="description">
									Ofrecemos toda clase de atención medica a corta y larga distancia para poder cuidar tu salud porque que es nuestra principal objetivo.
								</p>
								<a href="#" class="new-btn-d br-2">Leer más.</a>
							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-heart" aria-hidden="true"></i></div>
								<h3 class="title">Consulta externa de especialidad</h3>
								<p class="description">
									Contamos con los mas calificados medicos para poder atender a cualquier hora para garantizar el bienestar de el clientes en cualquier momento de día.
								</p>
								<a href="#" class="new-btn-d br-2">Leer más.</a>
							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></div>
								<h3 class="title">Cirugía Plástica y Reconstructiva.</h3>
								<p class="description">
									Contamos con los aparatos de la más alta calidad para poder realizar todo el tipo de cirugias seguras y confiables. Contamos con los mejores preciós accesible.
								</p>
								<a href="#" class="new-btn-d br-2">Leer más</a>
							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-stethoscope" aria-hidden="true"></i></div>
								<h3 class="title">Cirugía General.</h3>
								<p class="description">
									Nuestra clinica cuenta con el equipo y los medicos adecuados para realizar cualquier tipo de seguridad garantizando cambios a un bajo precío y accesible para nuestros pacientes.
								</p>
								<a href="#" class="new-btn-d br-2">Leer más</a>
							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-wheelchair" aria-hidden="true"></i></div>
								<h3 class="title">Ginecología y Obsteticia.</h3>
								<p class="description">
									En nuestra clinica contamos con los tratamientos adecuados para cuidar a la mujer realizando las mejores pruebas de la mas alta calidad a un precio adecuado para cuidar a tu salud la mejor opción.
								</p>
								<a href="#" class="new-btn-d br-2">Leer más</a>
							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-plus-square" aria-hidden="true"></i></div>
								<h3 class="title">Consulta externa de especialidad.</h3>
								<p class="description">
									Somos una clinica que se preocupa por el bienestar de sus pacientes es por eso que contamos con consultas externas especializadas para nuestros pacientes.
								</p>
								<a href="#" class="new-btn-d br-2">Leer más</a>
							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-medkit" aria-hidden="true"></i></div>
								<h3 class="title">Unidad de Reproducción Asistida</h3>
								<p class="description">
									para el tratamiento de la esterilidad se caracterizan por la aplicación de una serie procedimientos adecuados para poder cumplir tus mayores sueños.
								</p>
								<a href="#" class="new-btn-d br-2">Leer más</a>
							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-user-md" aria-hidden="true"></i></div>
								<h3 class="title">Imagenología (Rx y USG)</h3>
								<p class="description">
									Los mejores aparatos para realizar cualquier tipo de radiografia  tomografia en nuestra clinica. de manera rapida y con la opinión de un experto para brindar tu seguridad.
								</p>
								<a href="#" class="new-btn-d br-2">Leer más</a>
							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></div>
								<h3 class="title">Medicina general y de urgencias.</h3>
								<p class="description">
									Contamos con medicamentos en caso de emergencia de igual manera contamos con todo tipo de medicamento de buena calidad en clinica San Miguel
								</p>
								<a href="#" class="new-btn-d br-2">Leer más</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Services -->


	<!-- Start Gallery -->
	<div id="gallery" class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Galeria.</h2>
						<p>Conoce nuestras instalaciones contamos con la mayor seguridad higiene y calidad para nuestros pacientes. </p>
					</div>
				</div>
			</div>

			<div class="popup-gallery row clearfix">
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="{{ asset ('Pagina/images/clinica-fuera.jpg') }}" alt="">
						<div class="box-content">
							<h3 class="title">Nuestras instalaciones</h3>
							<ul class="icon">
								<li><a href="{{ asset ('Pagina/images/clinica-fuera.jpg') }}"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="{{ asset ('Pagina/images/salaespera.jpg') }}" alt="">
						<div class="box-content">
							<h3 class="title">Nuestras instalaciones</h3>
							<ul class="icon">
								<li><a href="{{ asset ('Pagina/images/salaespera.jpg') }}"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="{{ asset ('Pagina/images/consultorio-medico.jpg') }}" alt="">
						<div class="box-content">
							<ul class="icon">
								<li><a href="{{ asset ('Pagina/images/consultorio-medico.jpg') }}"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="{{ asset ('Pagina/images/ginecologia.jpg') }}" alt="">
						<div class="box-content">
							<h3 class="title">Nuestras instalaciones</h3>
							<ul class="icon">
								<li><a href="{{ asset ('Pagina/images/ginecologia.jpg') }}"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="{{ asset ('Pagina/images/pediatria.jpg') }}" alt="">
						<div class="box-content">
							<h3 class="title">Nuestras instalaciones</h3>
							<ul class="icon">
								<li><a href="{{ asset ('Pagina/images/pediatria.jpg') }}"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="{{ asset ('Pagina/images/hospitalizacion.jpg') }}" alt="">
						<div class="box-content">
							<h3 class="title">Nuestras instalaciones</h3>
							<ul class="icon">
								<li><a href="{{ asset ('Pagina/images/hospitalizacion.jpg') }}"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="{{ asset ('Pagina/images/atencion.jpg') }}" alt="">
						<div class="box-content">
							<h3 class="title">Nuestras instalaciones</h3>
							<ul class="icon">
								<li><a href="{{ asset ('Pagina/images/atencion.jpg') }}"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="{{ asset ('Pagina/images/unidad.jpg') }}" alt="">
						<div class="box-content">
							<h3 class="title">Nuestras instalaciones</h3>
							<ul class="icon">
								<li><a href="{{ asset ('Pagina/images/unidad.jpg') }}"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->

	<!-- Start Team -->
	<div id="team" class="team-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Nuestros Medicos</h2>
						<p>Conoce nuestros medicos que trabajan con nosotros en clinica San Miguel</p>
					</div>
				</div>
			</div>

			<div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset ('Pagina/images/img-1.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Williamson</h3>
                            <span class="post">web developer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset ('Pagina/images/img-2.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">kristina</h3>
                            <span class="post">Web Designer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset ('Pagina/images/img-3.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Steve Thomas</h3>
                            <span class="post">web developer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

		</div>
	</div>

	<!-- End Team -->

	<!-- Start Contact -->
	<div id="contact" class="contact-box">
		<div class="container">

				<div class="col-lg-12 col-xs-12">
					<div class="left-contact">
						<h2>Nuestra información de contacto</h2>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-location-arrow" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Dirección</h4>
								<p>Calle Vicente Guerrero No. 200 Bis Barrio de San Miguel San Mateo Atenco, Estado de México.</p>
							</div>
						</div>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Correo electronico de contacto </h4>
								<a href="#">sanmiguel.clinicamedica@gmail</a><br>

							</div>
						</div>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Numero de Telefono de contacto.</h4>
								<a href="#">(7289) 287 6434</a><br>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br><br><br>
	<!-- End Contact -->

	<!-- Start Footer -->
	<footer class="footer-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="footer-company-name">Clinica San Miguel &copy; 2021 <a href="#">Oficial</a>  : <a href="https://html.design/"></a></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->

	<a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

	<!-- ALL JS FILES -->
	<script src="{{ URL::asset ('Pagina/js/jquery.min.js') }}"></script>
	<script src="{{ URL::asset ('Pagina/js/popper.min.js') }}"></script>
	<script src="{{ URL::asset ('Pagina/js/bootstrap.min.js') }}"></script>
    <!-- ALL PLUGINS -->
	<script src="{{ URL::asset ('Pagina/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset ('Pagina/js/jquery.pogo-slider.min.js') }}"></script>
	<script src="{{ URL::asset ('Pagina/js/slider-index.js') }}"></script>
	<script src="{{ URL::asset ('Pagina/js/smoothscroll.js') }}"></script>
	<script src="{{ URL::asset ('Pagina/js/TweenMax.min.js') }}"></script>
	<script src="{{ URL::asset ('Pagina/js/main.js') }}"></script>
	<script src="{{ URL::asset ('Pagina/js/owl.carousel.min.js') }}"></script>
	<script src="{{ URL::asset ('Pagina/js/form-validator.min.js') }}"></script>
    <script src="{{ URL::asset ('Pagina/js/contact-form-script.js') }}"></script>
	<script src="{{ URL::asset ('Pagina/js/isotope.min.js') }}"></script>
	<script src="{{ URL::asset ('Pagina/js/images-loded.min.js') }}"></script>
    <script src="{{ URL::asset ('Pagina/js/custom.js') }}"></script>
</body>
</html>
