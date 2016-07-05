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

			<div class="close close-clients hidden">
				<img src="{{URL::asset('img/X.png')}}">
			</div>
			<div class="close close-works hidden">
				<img src="{{URL::asset('img/X.png')}}">
			</div>

			<div class="slider">
				<div class="category-slider">
					<div class="section-content grid-100 clearfix">
						<div id="category1" class="category grid-50 fleft" data-id="1" data-title="Branding &amp; creativity" data-description="">
							<h3>Branding &amp; Creativity</h3>
						</div>
						<div class="category-info category-info-1 grid-50 fright">
							INFORMACION BRANDING
						</div>

						<div class="category-info category-info-3 grid-50 fleft">
							INFORMACION DIGITAL MARKETING
						</div>
						<div id="category2" class="category grid-50 fright" data-id="2" data-title="Strategy &amp; media planning" data-description="">
							<h3>Strategy &amp; media planning</h3>
						</div>

						<div id="category3" class="category grid-50 fleft" data-id="3" data-title="digital marketing &amp; analytics" data-description="">
							<h3>digital marketing &amp; analytics</h3>
						</div>
						<div class="category-info category-info-2 grid-50 fright">
							INFORMACION STRATEGY
						</div>
					</div>

					<div class="section-content grid-100 clearfix">
						

						<div class="category-info category-info-4 grid-50 fleft">
							INFORMACION DIGITAL TECHNOLOGY
						</div>
						<div id="category4" class="category grid-50 fright" data-id="4" data-title="digital technology" data-description="">
							<h3>digital technology</h3>
						</div>

						<div id="category5" class="category grid-50 fleft" data-id="5" data-title="intelligence insight" data-description="">
							<h3>intelligence insight</h3>
						</div>
						<div class="category-info category-info-6 grid-50 fright">
							INFORMACION LIVE EXPERIENCE
						</div>

						<div class="category-info category-info-5 grid-50 fleft">
							INFORMACION INTELLIGENCE INSIGHT
						</div>

						<div id="category6" class="category grid-50 fright" data-id="6" data-title="live experience" data-description="">
							<h3>live experience</h3>
						</div>
					</div>
					</div>

				<div class="client-slider grid-100 superponer" style="position:absolute;">
					<!-- <div class="section-content grid-100 clearfix">
						
						<div class="client grid-50 fleft">
							<div class="client-name">
								cliente 1
							</div>
							
						</div>
						<div class="client grid-50 fright">
							cliente 2
						</div>

						<div class="client grid-50 fleft">
							cliente 3
						</div>
						<div class="client grid-50 fright">
							cliente 4
						</div>

						<div class="client grid-50 fleft">
							cliente 5
						</div>

						<div class="client grid-50 fright">
							cliente 6
						</div>
					</div> -->

				</div>

				<div class="work-slider grid-100 superponer" style="position:absolute;">
					<!-- <div class="section-content grid-100 clearfix">
						<div class="work-img">

						</div>
						<div class="work-description">
							<div class="work-title">
								<div class="lines"></div>
								<span>work</span>
								<div class="lines"></div>
							</div>

							<div class="work-slogan">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu varius augue. Etiam sodales elementum laoreet. Vestibulum eu convallis est. Morbi ornare leo quis tortor mattis, ac ultrices enim fringilla. Praesent at dui pellentesque, ultrices arcu quis, volutpat arcu. Aenean magna diam, rhoncus scelerisque</p>
							</div>

							<button type="button" class="close"><span>&times;</span></button>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</section>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script type="text/javascript" src="{{URL::asset('js/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/criollos.js')}}"></script>

</body>
</html>