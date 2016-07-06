<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">


	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/styles.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('js/slick/slick.css')}}">


</head>
<body>

<div class="clearfix">
	<section id="portfolio-section" class="portfolio-section">
		<div class="section-container grid-100">
			<header class="section-header">
				<h1 class="section-title">portafolio</h1>
				<div class="section-slogan">
					<div class="lines fleft"></div>
					<span>lorem ipsum dolor sit amet, consectetur</span>
					<div class="lines fright"></div>
				</div>
			</header>

			<div class="flechaIzq flechaIzq-category">
				<img src="{{URL::asset('img/flecha1.png')}}">
			</div>
			<div class="flechaDer flechaIzq-category">
				<img src="{{URL::asset('img/flecha2.png')}}">
			</div>

			<div class="flechaIzq flechaIzq-client hidden">
				<img src="{{URL::asset('img/flecha1.png')}}">
			</div>
			<div class="flechaDer flechaIzq-client hidden">
				<img src="{{URL::asset('img/flecha2.png')}}">
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

			<div class="slider">
				<div class="category-slider">
					<div class="section-content grid-100 clearfix">
						<div id="category1" class="category grid-50 fleft" data-id="1" data-title="Branding &amp; creativity">
							<h3>Branding &amp; Creativity</h3>
						</div>
						<div class="category-info category-info-1 grid-50 fright">
							<div class="category-img">
								INFORMACION BRANDING
							</div>
						</div>

						<div class="category-info category-info-3 grid-50 fleft">
							<div class="category-img">
								INFORMACION DIGITAL MARKETING
							</div>
						</div>
						<div id="category2" class="category grid-50 fright" data-id="2" data-title="Strategy &amp; media planning">
							<h3>Strategy &amp; media planning</h3>
						</div>

						<div id="category3" class="category grid-50 fleft" data-id="3" data-title="digital marketing &amp; analytics">
							<h3>digital marketing &amp; analytics</h3>
						</div>
						<div class="category-info category-info-2 grid-50 fright">
							<div class="category-img">
								INFORMACION STRATEGY
							</div>
						</div>
					</div>

					<div class="section-content grid-100 clearfix">
						

						<div class="category-info category-info-4 grid-50 fleft">
							<div class="category-img">
								INFORMACION DIGITAL TECHNOLOGY
							</div>
						</div>
						<div id="category4" class="category grid-50 fright" data-id="4" data-title="digital technology">
							<h3>digital technology</h3>
						</div>

						<div id="category5" class="category grid-50 fleft" data-id="5" data-title="intelligence insight">
							<h3>intelligence insight</h3>
						</div>
						<div class="category-info category-info-6 grid-50 fright">
							<div class="category-img">
								INFORMACION LIVE EXPERIENCE
							</div>
						</div>

						<div class="category-info category-info-5 grid-50 fleft">
							<div class="category-img">
								INFORMACION INTELLIGENCE INSIGHT
							</div>
						</div>

						<div id="category6" class="category grid-50 fright" data-id="6" data-title="live experience">
							<h3>live experience</h3>
						</div>
					</div>
					</div>

				<div class="client-slider grid-100 superponer" style="position:absolute;">
				</div>

				<div class="work-slider grid-100 superponer" style="position:absolute;">
				</div>
			</div>
		</div>
	</section>
</div>

<footer class="clearfix">
	<section id="contact-section" class="contact-section">
		<div class="section-container grid-100">
			<header class="section-header">
				<h1 class="section-title">contacto</h1>
				<div class="section-slogan">
					<div class="lines fleft"></div>
					<span>lorem ipsum dolor sit amet, consectetur</span>
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
							<span>enviar</span>
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
					<h2>¿dónde estamos?</h2>
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
							<li><img src="img/FB.png"></li>
							<li><img src="img/IN.png"></li>
							<li><img src="img/TW.png"></li>
							<li><img src="img/IG.png"></li>
							<li><img src="img/YOUTUBE.png"></li>
						</ul>
						<div class="correo">
							<img src="img/CORREO.png">info@criollogroup.com
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
<script src="https://use.fontawesome.com/011b552131.js"></script>
<script type="text/javascript" src="{{URL::asset('js/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/criollos.js')}}"></script>

</body>
</html>