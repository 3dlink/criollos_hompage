<!DOCTYPE html>
<html>
<head>

	{!! SEOMeta::generate() !!}

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">


	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/styles.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('js/slick/slick.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/responsive_1.css')}}">


</head>
<body>

	<header>
		<nav class="main-navbar navbar navbar-default navbar-static-top" style="margin-bottom:0;">
			<div class="container-fluid">
				<div class="navbar-header" style="padding-top: 10px;">

					<!-- Collapsed Hamburger -->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<!-- Branding Image -->

					<a target="_blank" onclick="$('body').scrollTo('#home-section',1000);">
						<img src="img/CRIOLLOS FULL AGENCY.png">
					</a>
				</div>

				<div>

					<!-- Right Side Of Navbar -->
					<ul class="nav navbar-nav navbar-right">
						<li><a onclick="$('body').scrollTo('#nosotros-section',1000);">Nosotros</a></li>
						<li><a onclick="$('body').scrollTo('#service-section',1000);">Servicios</a></li>
						<li><a onclick="$('body').scrollTo('#portfolio-section',1000);">Portafolio</a></li>
						<li><a onclick="$('body').scrollTo('#blog-section',1000);">Blog</a></li>
						<li><a onclick="$('body').scrollTo('#tienda-section',1000);">Tienda</a></li>
						<li><a onclick="$('body').scrollTo('#trabajo-section',1000);">Trabajo</a></li>
						<li><a onclick="$('body').scrollTo('#contact-section',1000);">Contacto</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<div id="home-section" class="home-section clearfix">
		<img src="img/home.png">
	</div>

	<div class="clearfix">
		<section id="nosotros-section" class="nosotros-section">
			<!-- <div class="diagonal_r white"></div> -->
			<div class="section_content">
				<div class="grid-70 nosotros_content fleft">
					<header class="section-header">
						<h1 class="section-title" style="color:#494949;">Nosotros</h1>
						<div class="section-slogan" style="display:table; position: relative; width:100%">
							<div class="line-holder lh"><div class="lines"></div></div>
							<span style="color:#494949;">AGENCIA DE PUBLICIDAD CON 4 AÑOS DE EXPERIENCIA</span>
							<div class="line-holder lh0"><div class="lines"></div></div>
						</div>

					</header>
					<p>Sómos la representación de la pasión profesional por lo que hacemos. Pues de ella se desprende nuestra inquietante curiosidad por re-inventar nuestras ideas en este proceso que llamámos <span>colando el café perfecto.</span>
						<br><br>
						<span>We are a Full Service Agency,</span> y hemos enfocado nuestros esfuerzos en convertinos en una agencia qué mas allá de un nombre, hoy comparte una filosofía y con ello un portafolio de opciones comunicacionales integrales para nuestros clientes.
					</p>

					<ul class="nosotros-items fleft" style="list-style-type: none;padding: 0;">
						<li><img id="dot1" src='{{URL::asset("img/1.png")}}' class="dots_criollos"></li>
						<li><img id="dot2" src='{{URL::asset("img/2.png")}}' class="dots_criollos"></li>
						<li><img id="dot3" src='{{URL::asset("img/3.png")}}' class="dots_criollos"></li>
						<li><img id="dot4" src='{{URL::asset("img/4.png")}}' class="dots_criollos"></li>
						<li><img id="dot5" src='{{URL::asset("img/5.png")}}' class="dots_criollos item-peque"></li>
					</ul>

				</div>
				<div class="grid-30 fleft img-nosotros">
					<img src="img/LOGO.png" class="fleft">
				</div>
			</div>
			<!-- <div class="diagonal_l white"></div> -->
		</section>
	</div>

	<div class="clearfix shape-1">
		<section id="quote-section" class="quote-section">
			<div class="mask">
				<!-- <div class="diagonal_r_top white"></div> -->
				<div class="quote-slider">
					@foreach($quotes as $quote)
					<div class="quote-holder">						
						<span class="quote">
							<img style="display: inline;" class="comillaIzq" src="img/comilla1.png">
							<span>&nbsp;{{$quote->quote}}&nbsp;</span>
							<img style="display: inline;" class="comillaDer" src="img/comilla2.png">
						</span>
					</div>
					@endforeach
				</div>
			</div>
			
		</section>
	</div>

	<div class="clearfix" style="margin-top: -62px;">
		<section id="service-section" class="service-section">
			<!-- <div class="diagonal_r_top orange"></div> -->
			<div class="section-container">
				<header class="section-header">
					<h1 class="section-title" style="color:#494949;">Servicios</h1>
					<div class="section-slogan">
						<div class="lines fleft"></div>
						<span style="color:#494949;">Nuestras esquinas</span>
						<div class="lines fright"></div>
					</div>
				</header>

				<div class="service-span">
					<span>Una fiolosofía de trabajo que se adapta a cualquier requerimiento</span>
				</div>

				<div class="service-slider services grid-99 clearfix">
					<div>
						<div class="service-container grid-32 fleft flipper">
							<div class="service-info back service-style1">
								<h3 class="service-title" style="color:white;">Branding &amp; Creativity</h3>
								<div class="lines prefix-15"></div>
								<p class="service-desc">Conceptualización de ideas o imagen de marca (Aquí participan Redactores, Diseñadores, Productores y hasta Directores, ellos son los creativos de la agencia).</p>
							</div>
							<div class="service-img front">
								<img src="img/BOTON CREATIVIDAD.png">
							</div>
						</div>

						<div class="service-container grid-32 fleft prefix-1 sufix-1 flipper">
							<div class="service-info back service-style2">
								<h3 class="service-title">Strategy &amp; media planning</h3>
								<div class="lines prefix-15"></div>
								<p class="service-desc">Creemos en la eficiencia del presupuesto de nuestros anunciantes y desde acá planteamos conexión con el concepto creativo y los transformamos en una estrategia efectiva para la entrega del mensaje (están los númericos del equipo, planificadores y analistas, ellos son nuestros estrategas).</p>
							</div>
							<div class="service-img front">
								<img src="img/BOTON ESTRATEGIA1.png">
							</div>
						</div>

						<div class="service-container grid-32 fleft flipper">
							<div class="service-info back service-style1">
								<h3 class="service-title" style="color:white;">Digital Marketing &amp; analitycs</h3>
								<div class="lines prefix-15"></div>
								<p class="service-desc">Acá vemos el lienzo completo del internet y damos solucion a la estrategia pero visto desde el ecosistema digital completo (Se junta lo mejor de dos mundos creatividad y estrategia + todas las plataformas digitales, este equipo vive conectado).</p>
							</div>
							<div class="service-img front">
								<img src="img/BOTON DIGITAL MEDIA.png">
							</div>
						</div>
					</div>

					<div>
						<div class="service-container grid-32 fleft flipper">
							<div class="service-info back service-style2">
								<h3 class="service-title">Digital Technology</h3>
								<div class="lines prefix-15"></div>
								<p class="service-desc">En esta era donde digital cobra mucho más fuerza con el tiempo, creemos que lo más importante es ir creciendo con el mismo, por eso la importancia de poder desarrollar herramientas tecnológicas que ofrezcan soluciones a nuestros inventos.</p>
							</div>
							<div class="service-img front">
								<img src="img/BOTON DIGITAL TECH1.png">
							</div>
						</div>

						<div class="service-container grid-32 fleft prefix-1 sufix-1 flipper">
							<div class="service-info back service-style1">
								<h3 class="service-title" style="color:white;">intelligence insight</h3>
								<div class="lines prefix-15"></div>
								<p class="service-desc">Ninguna idea puede cobrar vida sin antes haber sido investigada o estudiada (No son ratones de biblioteca o los hermanos perdidos de Google, pero este equipo sabe todo acerca del consumidor).</p>
							</div>
							<div class="service-img front">
								<img src="img/BOTON INTELLIGENCE IN.png">
							</div>
						</div>

						<div class="service-container grid-32 fleft flipper">
							<div class="service-info back service-style2">
								<h3 class="service-title" >live experience</h3>
								<div class="lines prefix-15"></div>
								<p class="service-desc">Lograr que nuestrar idean sean memorables para el consumidor es lo más importante. (Está es nuestra gente guerrera, este equipo esta prepaador para producir eventos en tiempo record, desde productores, carpinteros hasta promotoras).</p>
							</div>
							<div class="service-img front">
								<img src="img/BOTON LIVE EX.png">
							</div>
						</div>
					</div>
				</div>

				<div class="flechaIzq flechaIzq-service">
					<img src="{{URL::asset('img/FLECHA 1.png')}}">
				</div>
				<div class="flechaDer flechaDer-service">
					<img src="{{URL::asset('img/FLECHA 2.png')}}">
				</div>
			</div>
		</section>
	</div>

	<div class="clearfix">
		<section style="position:relative;" id="clients-section" class="clients-section fleft">
			<div class="section-container grid-100">
				<header class="section-header">
					<h1 class="section-title" style="color:#fdbe10;letter-spacing: 2px;"><span class="section-title">Clientes</span></h1>
				</header>

<!-- 
				<div class="flechaIzq flechaIzq-category2">
					<img src="{{URL::asset('img/flecha1.png')}}">
				</div>
				<div class="flechaDer flechaDer-category2">
					<img src="{{URL::asset('img/flecha2.png')}}">
				</div>
			-->

			<div class="slider">
				<div class="category-slider33">
<!-- 					<div class="section-content grid-100 clearfix">
						<div class="cliente fleft" style="background-image:url('img/c1.png');"></div>
						<div class="cliente fleft" style="background-image:url('img/c2.png');"></div>
						<div class="cliente fleft" style="background-image:url('img/c3.png');"></div>
						<div class="cliente fleft" style="background-image:url('img/c4.png');"></div>
						<div class="cliente fleft" style="background-image:url('img/c5.png');"></div>
						<div class="cliente fleft" style="background-image:url('img/c6.png');"></div>
						<div class="cliente fleft" style="background-image:url('img/c7.png');"></div>
						<div class="cliente fleft" style="background-image:url('img/c8.png');"></div>
						<div class="cliente fleft" style="background-image:url('img/c9.png');"></div>
						<div class="cliente fleft" style="background-image:url('img/c10.png');"></div>
						<div class="cliente fleft" style="background-image:url('img/c11.png');"></div>
						<div class="cliente fleft" style="background-image:url('img/c12.png');"></div>
						<div class="cliente fleft" style="background-image:url('img/c13.png');"></div>
						<div class="cliente fleft" style="background-image:url('img/c14.png');"></div>
						<div class="cliente fleft" style="background-image:url('img/c15.png');"></div>
					</div>
					<div class="section-content grid-100 clearfix">
						<div class="cliente fleft" style="background-image:url('img/BONAMES.png');"></div>
						<div class="cliente fleft" style="background-image:url('img/DOTRON.png');"></div>
						<div class="cliente fleft" style="background-image:url('img/LOGO BARBER MUSIC.png');"></div>
						<div class="cliente fleft" style="background-image:url('img/LOGO BARBER.png');"></div>
						<div class="cliente fleft" style="background-image:url('img/LOGO BRICKS.png');"></div>
						<div class="cliente fleft" style="background-image:url('img/LOGO CODIMATIX.png');"></div>
						<div class="cliente fleft" style="background-image:url('img/LOGO CORPO.png');"></div>
						<div class="cliente fleft" style="background-image:url('img/LOGO DIABLITOS.png');"></div>
						<div class="cliente fleft" style="background-image:url('img/LOGO GALERIA .png');"></div>
						<div class="cliente fleft" style="background-image:url('img/LOGO JM.png');"></div>
						<div class="cliente fleft" style="background-image:url('img/LOGO MERCK.png');"></div>
						<div class="cliente fleft" style="background-image:url('img/LOGO PAIS BONITO.png');"></div>
						<div class="cliente fleft" style="background-image:url('img/NOTOLAC.png');"></div>
						<div class="cliente fleft" style="background-image:url('img/STAMYL.png');"></div>
						<div class="cliente fleft" style="background-image:url('img/SUMITAN.png');"></div>
					</div> -->
				</div>
			</div>
		</div>

		<svg width="0" height="0">
			<defs>
				<clipPath id="quote-shape" clipPathUnits="objectBoundingBox">
					<polygon points="1 1, 1 0.1, 0 0, 0 0.86"/>
				</clipPath>
			</defs>
		</svg>

		<svg width="0" height="0">
			<defs>
				<clipPath id="tienda-shape" clipPathUnits="objectBoundingBox">
					<polygon points="1 0.925, 1 0, 0 0, 0 1"/>
				</clipPath>
			</defs>
		</svg>

		<svg width="0" height="0">
			<defs>
				<clipPath id="home-shape" clipPathUnits="objectBoundingBox">
					<polygon points="1 0.9, 1 0, 0 0, 0 1"/>
				</clipPath>
			</defs>
		</svg>

		<svg width="0" height="0">
			<defs>
				<clipPath id="textarea-shape" clipPathUnits="objectBoundingBox">
					<polygon points="1 0.9, 1 0, 0 0, 0 1"/>
				</clipPath>
			</defs>
		</svg>

		<svg width="0" height="0">
			<defs>
				<clipPath id="portfolio-shape" clipPathUnits="objectBoundingBox">
					<polygon points="1 1, 1 0, 0 0.05, 0 0.95"/>
				</clipPath>
			</defs>
		</svg>

		<svg width="0" height="0">
			<defs>
				<clipPath id="trabajo-shape" clipPathUnits="objectBoundingBox">
					<polygon points="1 0.84, 1 0, 0 0, 0 1"/>
				</clipPath>
			</defs>
		</svg>
	</section>
</div>

<div class="clearfix">
	<section id="portfolio-section" class="portfolio-section">
		<div class="section-container grid-100">
			<header class="section-header">
				<h1 class="section-title">portafolio</h1>
				<div class="section-slogan">
					<div class="lines fleft"></div>
					<span>UNA MUESTRA DE LO QUE HEMOS HECHO</span>
					<div class="lines fright"></div>
				</div>
			</header>

			<div class="slider">
				<div class="category-slider">
					<div class="section-content grid-100 clearfix">
						<div id="category1" class="category grid-50 fleft" data-id="1" data-title="Branding &amp; creativity">
							<h3 style="padding-top: 7px;">Branding &amp; Creativity</h3>
						</div>
						<div class="category-info category-info-1 grid-50 fright" style="background-image:url('img/salsa.png');">
							<!--  -->
							<div class="mask"></div>
						</div>

						<div class="category-info category-info-3 grid-50 fleft" style="background-image:url('img/mac.png');">
							<!--  -->
							<div class="mask"></div>
						</div>
						<div id="category2" class="category grid-50 fright" data-id="2" data-title="Strategy &amp; media planning">
							<h3 style="padding-top: 2px;">Strategy &amp; media planning</h3>
						</div>

						<div id="category3" class="category grid-50 fleft" data-id="3" data-title="digital marketing &amp; analytics">
							<h3 style="margin-top:16px;">digital marketing &amp; analytics</h3>
						</div>
						<div class="category-info category-info-2 grid-50 fright" style="background-image:url('img/IMAGEN ESTRATEGIA.png');">
							<!--  -->
							<div class="mask"></div>
						</div>
					</div>

					<div class="section-content grid-100 clearfix">


						<div class="category-info category-info-4 grid-50 fleft" style="background-image:url('img/bricks.png');">
							<!--  -->
							<div class="mask"></div>
						</div>
						<div id="category4" class="category grid-50 fright" data-id="4" data-title="digital technology">
							<h3 style="padding-top: 17px;">digital technology</h3>
						</div>

						<div id="category5" class="category grid-50 fleft" data-id="5" data-title="intelligence insight">
							<h3>intelligence insight</h3>
						</div>
						<div class="category-info category-info-6 grid-50 fright" style="background-image:url('img/pana.png');">
							<!--  -->
							<div class="mask"></div>
						</div>

						<div class="category-info category-info-5 grid-50 fleft" style="background-image:url('img/imagen intelligence.png');">
							<!--  -->
							<div class="mask"></div>
						</div>

						<div id="category6" class="category grid-50 fright" data-id="6" data-title="live experience">
							<h3>live experience</h3>
						</div>
					</div>
				</div>
				<div class="flechaIzq flechaIzq-category">
					<img src="{{URL::asset('img/flecha1.png')}}">
				</div>
				<div class="flechaDer flechaDer-category">
					<img src="{{URL::asset('img/flecha2.png')}}">
				</div>

				<div class="client-slider grid-100 superponer" style="position:absolute;">
				</div>

				<div class="flechaIzq flechaIzq-client hidden">
					<img src="{{URL::asset('img/flecha1.png')}}">
				</div>
				<div class="flechaDer flechaDer-client hidden">
					<img src="{{URL::asset('img/flecha2.png')}}">
				</div>

				<div class="work-slider grid-100 superponer" style="position:absolute;">
					<div class="w-slider grid-100"></div>
					<div class="work-description">
						<div class="work-title" style="display: table;">
							<div class="line-holder lh1"><div class="lines"></div></div>
							<span></span>
							<div class="line-holder lh2"><div class="lines"></div></div>
						</div>
						<div class="work-slogan">
							<p></p>
						</div>
					</div>
				</div>

				<div class="flechaIzq flechaIzq-work hidden">
					<img src="{{URL::asset('img/flecha1.png')}}">
				</div>
				<div class="flechaDer flechaDer-work hidden">
					<img src="{{URL::asset('img/flecha2.png')}}">
				</div>

				<div class="close close-clients">
					<img src="{{URL::asset('img/X.png')}}">
				</div>
				<div class="close close-works">
					<img src="{{URL::asset('img/X.png')}}">
				</div>

			</div>
		</div>
	</section>
</div>

<div class="clearfix">
	<section id="blog-section" class="blog-section">
		<div class="section-container grid-100">
			<header class="section-header">
				<h1 class="section-title">Blog</h1>
				<div class="section-slogan" style="display:table; position: relative;">
					<div class="line-holder lh3"><div class="lines"></div></div>
					<span>Lorem Ipsum</span>
					<div class="line-holder lh4"><div class="lines"></div></div>
				</div>
			</header>

			<div class="blog-span">
				<span><i>Desde marketing y creatividad, hasta los chinazos de la oficina.<br>En este blog se escribe de todo</i></span>
			</div>

			<div class="blog-container clearfix">
				
<!-- 				<div class="blog-row grid-100 clearfix">
					<div class="blog-item grid-50 fleft clearfix">
						<div class="bi-photo grid-40 fleft">
							<img class="bi-pic" src=""></img>
						</div>
						<div class="bi-info grid-60 fright">
							<span class="bi-date">Noviembre 10, 2015</span>
							<h2 class="bi-title"><i>Lorem Ipsum dolor sit amet.</i></h2>
							<div class="mini-line"></div>

							<p class="bi-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris viverra suscipit sem, quis dignissim felis. </p>
						</div>
					</div>

					<div class="blog-item grid-50 fright clearfix">
						<div class="bi-photo grid-40 fleft">
							<img class="bi-pic" src=""></img>
						</div>
						<div class="bi-info grid-60 fright">
							<span class="bi-date">Noviembre 10, 2015</span>
							<h2 class="bi-title"><i>Lorem Ipsum dolor sit amet.</i></h2>
							<div class="mini-line"></div>

							<p class="bi-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris viverra suscipit sem, quis dignissim felis. </p>
						</div>
					</div>
				</div>

				<div class="blog-row grid-100 clearfix">
					<div class="blog-item grid-50 fleft clearfix">
						<div class="bi-photo grid-40 fleft">
							<img class="bi-pic" src=""></img>
						</div>
						<div class="bi-info grid-60 fright">
							<span class="bi-date">Noviembre 10, 2015</span>
							<h2 class="bi-title"><i>Lorem Ipsum dolor sit amet.</i></h2>
							<div class="mini-line"></div>

							<p class="bi-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris viverra suscipit sem, quis dignissim felis. </p>
						</div>
					</div>

					<div class="blog-item grid-50 fright clearfix">
						<div class="bi-photo grid-40 fleft">
							<img class="bi-pic" src=""></img>
						</div>
						<div class="bi-info grid-60 fright">
							<span class="bi-date">Noviembre 10, 2015</span>
							<h2 class="bi-title"><i>Lorem Ipsum dolor sit amet.</i></h2>
							<div class="mini-line"></div>

							<p class="bi-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris viverra suscipit sem, quis dignissim felis. </p>
						</div>
					</div>
				</div>

				<span class="blog-mas"><i>Ver más</i></span> -->
			</div>
		</div>
	</section>
</div>

<div class="clearfix shape-2">
	<div class="upsideDown"></div>
	<section id="tienda-section" class="tienda-section">
		<div class="section-container">
			<header class="section-header">
				<h1 class="section-title">Tienda</h1>
				<div class="section-slogan" style="display:table; position: relative;">
					<div class="line-holder lh5"><div class="lines"></div></div>
					<span>Lorem Ipsum</span>
					<div class="line-holder lh6"><div class="lines"></div></div>
				</div>
			</header>

			<div class="tienda-slider grid-100 clearfix">
				<div>
					<div class="item-container grid-25 fleft sufix-2">
						<div class="ti-photo"><img class="ti-img" src=""></img></div>
						<div class="ti-info">
							<h2 class="ti-title"><i>Lorem ipsum</i></h2>
							<span class="ti-desc">Lorem Ipsum dolor sit amet, consectetur adipiscing elit.</span>
						</div>
						<span class="ti-comprar"><i>Comprar</i></span>
					</div>

					<div class="item-container grid-25 fleft sufix-2">
						<div class="ti-photo"><img class="ti-img" src=""></img></div>
						<div class="ti-info">
							<h2 class="ti-title"><i>Lorem ipsum</i></h2>
							<span class="ti-desc">Lorem Ipsum dolor sit amet, consectetur adipiscing elit.</span>
						</div>
						<span class="ti-comprar"><i>Comprar</i></span>
					</div>

					<div class="item-container grid-25 fleft sufix-2">
						<div class="ti-photo"><img class="ti-img" src=""></img></div>
						<div class="ti-info">
							<h2 class="ti-title"><i>Lorem ipsum</i></h2>
							<span class="ti-desc">Lorem Ipsum dolor sit amet, consectetur adipiscing elit.</span>
						</div>
						<span class="ti-comprar"><i>Comprar</i></span>
					</div>

					<div class="item-container grid-25 fleft">
						<div class="ti-photo"><img class="ti-img" src=""></img></div>
						<div class="ti-info">
							<h2 class="ti-title"><i>Lorem ipsum</i></h2>
							<span class="ti-desc">Lorem Ipsum dolor sit amet, onsectetur adipiscing elit.</span>				
						</div>
						<span class="ti-comprar"><i>Comprar</i></span>
					</div>
				</div>

				<div>
					<div class="item-container grid-25 fleft sufix-2">
						<div class="ti-photo"><img class="ti-img" src=""></img></div>
						<div class="ti-info">
							<h2 class="ti-title"><i>Lorem ipsum</i></h2>
							<span class="ti-desc">Lorem Ipsum dolor sit amet, consectetur adipiscing elit.</span>
						</div>
						<span class="ti-comprar"><i>Comprar</i></span>
					</div>

					<div class="item-container grid-25 fleft sufix-2">
						<div class="ti-photo"><img class="ti-img" src=""></img></div>
						<div class="ti-info">
							<h2 class="ti-title"><i>Lorem ipsum</i></h2>
							<span class="ti-desc">Lorem Ipsum dolor sit amet, consectetur adipiscing elit.</span>
						</div>
						<span class="ti-comprar"><i>Comprar</i></span>
					</div>

					<div class="item-container grid-25 fleft sufix-2">
						<div class="ti-photo"><img class="ti-img" src=""></img></div>
						<div class="ti-info">
							<h2 class="ti-title"><i>Lorem ipsum</i></h2>
							<span class="ti-desc">Lorem Ipsum dolor sit amet, consectetur adipiscing elit.</span>
						</div>
						<span class="ti-comprar"><i>Comprar</i></span>
					</div>

					<div class="item-container grid-25 fleft">
						<div class="ti-photo"><img class="ti-img" src=""></img></div>
						<div class="ti-info">
							<h2 class="ti-title"><i>Lorem ipsum</i></h2>
							<span class="ti-desc">Lorem Ipsum dolor sit amet, onsectetur adipiscing elit.</span>				
						</div>
						<span class="ti-comprar"><i>Comprar</i></span>
					</div>
				</div>
			</div>
			<div class="flechaIzq flechaIzq-tienda">
				<img src="{{URL::asset('img/FLECHA 1 tienda.png')}}">
			</div>
			<div class="flechaDer flechaDer-tienda">
				<img src="{{URL::asset('img/FLECHA 2 tienda.png')}}">
			</div>
		</div>
	</section>
</div>


<div class="clearfix" style="margin-top: -58px;">
	<section id="trabajo-section" class="trabajo-section fleft">
		<header class="section-header">
			<h1 class="section-title" style="color:#fdbe10;letter-spacing: 2px;"><span class="section-title">Trabajo</span></h1>
		</header>

		<div class="section-content">
			<div class="section-span">
				<h1 class="trabajo-span trabajo-1">¿Quieres unirte</h1>
				<h1 class="trabajo-span trabajo-2">a nuestro equipo?</h1>
			</div>
			<span class="adjunta">Adjunta aqui tu CV o Portafolio</span>

			<div class="cv-form">
				{!! Form::open(['route' => ['cv'], 'method' => 'POST', 'files' => 'true']) !!}
				{{ csrf_field() }}

				<div class="fileUpload">
					{!! Form::text('holder', 'CV/Portafolio', array('disabled'=>'disabled', 'class' => 'uploadSpan', 'id' => 'cvUpload')) !!}

					{!! Form::file('cv', array('class' => 'upload', 'id' => 'cv', 'required')) !!}
					{!! Form::submit('submit', array('id'=>'cvSubmit', 'style' => 'display:none;')) !!}
				</div>
				<span class="msjError"> @if ($errors->first('cv')) *{{ $errors->first('cv') }} @endif</span>

				<div class="success-message">
					@if(Session::has('cv'))
					{{ Session::get('cv')}}
					@endif
				</div>

				{!! Form::close() !!}
			</div>
		</div>
	</section>
</div>

<footer class="clearfix" style="margin-top: -85px;">
	<section id="contact-section" class="contact-section">
		<!-- 	<div class="diagonal_l_top grey"></div> -->
		<div class="section-container grid-100">
			<header class="section-header">
				<h1 class="section-title">contacto</h1>
				<div class="section-slogan">
					<div class="lines fleft"></div>
					<span> ¿Tienes una idea o proyecto? Escríbenos</span>
					<div class="lines fright"></div>
				</div>
			</header>

			<div class="contact grid-100 clearfix">
				<div class="grid-60 fleft">
					<form id="contact-form" class="contact-form" action="{{ url('/contact') }}" method="POST">
						{{ csrf_field() }}
						<div class="grid-50 fleft" style="padding-right: 6px;">
							<input placeholder="Nombre y Apellido" class="form-control" name="name" type="text" required>
							<span class="msjError"> @if ($errors->first('name')) *{{ $errors->first('name') }} @endif</span>
						</div>
						<div class="grid-50 fright" style="padding-left: 6px;">
							<input placeholder="Correo" class="form-control" name="email" type="email" required>
							<span class="msjError"> @if ($errors->first('email')) *{{ $errors->first('email') }} @endif</span>
						</div>
						<div class="grid-100">
							<input placeholder="Motivo" class="form-control" name="motivation" type="text" required>
							<span class="msjError"> @if ($errors->first('motivation')) *{{ $errors->first('motivation') }} @endif</span>
							<textarea id="message" class="message form-control" name="message" placeholder="Mensaje" required></textarea>
							<span class="msjError"> @if ($errors->first('message')) *{{ $errors->first('message') }} @endif</span>
						</div>

						<div class="formSend fright">
							<span style="letter-spacing: 0px;">enviar</span>
							<input id="send-btn" class="send-btn" name="send-btn" value="Send" type="submit">
						</div>

						<div class="success-message">
							@if(Session::has('mail'))
							{{ Session::get('mail')}}
							@endif
						</div>

					</form>
				</div>
				<div class="info grid-40 fright">
					<h2 style="letter-spacing: 3px;">¿dónde estamos?</h2>
					<div class="lines"></div>
					<div>
						<ul>
							<li>Caracas - Venezuela</li>
							<li>Ciudad de Panamá - Panamá</li>
							<li>Lima - Perú</li>
						</ul>
					</div>
					<div class="lines"></div>

					<div class="social-links">
						<ul class="grid-100">
							<li><a href="https://www.facebook.com/CriollosFA/" target="_blank"><img src="img/FB.png"></a></li>
							<li><a href="https://www.linkedin.com/company/2640001" target="_blank"><img src="img/IN.png"></a></li>
							<li><a href="https://twitter.com/CriollosFA?lang=es" target="_blank"><img src="img/TW.png"></a></li>
							<li><a href="https://www.instagram.com/criollosfa/" target="_blank"><img src="img/IG.png"></a></li>
							<li><a href="https://www.youtube.com" target="_blank"><img src="img/YOUTUBE.png"></a></li>
							<!--  -->
						</ul>
						<div class="correo">
							<img src="img/CORREO.png">info@criollosgroup.com
							<!--  -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="grid-100 copyright">
		Criollos Full Agency ® Todos los Derechos Reservados 2016
	</div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{URL::asset('js/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/viewportchecker.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/conteo.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/scrollTo.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/criollos.js')}}"></script>

</body>
</html>
