var category;
var work;
$(document).ready(function(){
	// PERKS //

	var spanH = $('#portfolio-section .section-header span').height();
	// $('#portfolio-section .section-header .lines').css('margin-top', spanH/2);

	spanH = $('#service-section .section-header span').height();
	// $('#service-section .section-header .lines').css('margin-top', spanH/2);

	spanH = $('#contact-section .section-header span').height();
	// $('#contact-section .section-header .lines').css('margin-top', spanH/2);


	// ARROWS & X POSITION //
	var position = $('.service-slider').position();
	$('.flechaIzq-service').css('left', position.left-115);
	$('.flechaDer-service').css('left', position.left+$('.service-slider').width()+72);

	$('.flechaIzq-service, .flechaDer-service').css('top', position.top + 200);

	position = $('.slider').position();
	$('.flechaIzq-category, .flechaDer-category, .flechaIzq-client, .flechaDer-client').css('top', position.top+442);
	$('.flechaIzq-category, .flechaIzq-client, .flechaIzq-work').css('left', position.left-137);
	$('.flechaDer-category, .flechaDer-client, .flechaDer-work').css('left', position.left+$('.slider').width()+85);

	$('.flechaIzq-work, .flechaDer-work').css('top', position.top+272);

	$('.close').css('top', position.top + 900);
	$('.close').css('left', position.left + $('.slider').width()+ 430 - $('.close').width() -50);

	// FLIP //
	$('.flipper').flip({
		axis: 'x',
		trigger: 'hover'
	});

	// SLIDERS //

	$(".service-slider").slick({
		draggable: false,
		prevArrow: $(".flechaIzq-service"),
		nextArrow: $(".flechaDer-service")
	});
	$(".category-slider").slick({
		draggable: false,
		prevArrow: $(".flechaIzq-category"),
		nextArrow: $(".flechaDer-category")
	});
	$(".client-slider").slick({
		draggable: false,
		prevArrow: $(".flechaIzq-client"),
		nextArrow: $(".flechaDer-client")
	});
	$(".work-slider").slick({
		prevArrow: $(".flechaIzq-work"),
		nextArrow: $(".flechaDer-work")
	});

	// UNBLOCKS CATEGORY INFO //

	$("#category1").hover(function(){
		$(".category-info-1 .mask").css('display', 'none');
	}, function(){
		$(".category-info-1 .mask").css('display', 'block');
	});
	$("#category2").hover(function(){
		$(".category-info-2 .mask").css('display', 'none');
	}, function(){
		$(".category-info-2 .mask").css('display', 'block');
	});
	$("#category3").hover(function(){
		$(".category-info-3 .mask").css('display', 'none');
	}, function(){
		$(".category-info-3 .mask").css('display', 'block');
	});

	$("#category4").hover(function(){
		$(".category-info-4 .mask").css('display', 'none');
	}, function(){
		$(".category-info-4 .mask").css('display', 'block');
	});
	$("#category5").hover(function(){
		$(".category-info-5 .mask").css('display', 'none');
	}, function(){
		$(".category-info-5 .mask").css('display', 'block');
	});
	$("#category6").hover(function(){
		$(".category-info-6 .mask").css('display', 'none');
	}, function(){
		$(".category-info-6 .mask").css('display', 'block');
	});

	// GO TO CLIENTS //
	$(".category").click(function(){

		var title= $(this).data('title');
		category = title;
		var id = $(this).data('id');
		var description = $(this).data('description');

		var uri = 'clients/'+id;

		$(".client-slider").slick('unslick');

		$.ajax({
			url: uri, //the page containing php script
			type: "GET", //request type
			success:function(result){
				result = JSON.parse(result);

				loadClients(result);

				$("#portfolio-section .section-header span").text(title);


				$('.client').on('click', clickClient);
				$('.client').hover(function(){
					var div = $(this);
					var img = div.data('img');


					div.children().children().css('display','none');

					div.css('background-image', 'url("../img/'+img+'")');
				}, function(){
					var div = $(this);

					div.children().children().css('display','block');
					div.css('background-image', 'none');

				});

				$('.flechaIzq-category, .flechaDer-category').addClass('hidden');
				$('.flechaIzq-client, .flechaDer-client').removeClass('hidden');

				$('.close-clients').css('display','block');
				$('.close-clients').on('click',function(){
					$("#portfolio-section .section-header span").text('lorem ipsum dolor sit amet, consectetur');

					$(".client-slider").css({'opacity':0, 'z-index':-1});
					$(".category-slider").css({'opacity':1, 'z-index':1});

					$('.flechaIzq-client, .flechaDer-client').addClass('hidden');
					$('.flechaIzq-category, .flechaDer-category').removeClass('hidden');

					$('.close-clients').css('display','none');
				});

				$(".client-slider").slick({
					prevArrow: $(".flechaIzq-client"),
					nextArrow: $(".flechaDer-client")
				});

				$(".category-slider").css({'opacity':0, 'z-index':-1});
				$(".client-slider").css({'opacity':1, 'z-index':1});
			}
		});
	});

});

function loadClients(clients){
	var slider = $('.client-slider');
	slider.empty();

	var slides = Math.floor(clients.length/6);
	var remain = clients.length%6

	for (var i = 0; i < slides; i++) {
		var content = '<div class="section-content grid-100 clearfix">';

		content+= '<div class="client grid-50 fleft" data-id="'+clients[i*6].id +'" data-img="';
		content+= clients[i*6]+'">';
		content+= '<div class="client-holder"><div class="client-span"><span>';
		content+= clients[i*6].name+'</span></div></div></div>';
		content+= '<div class="client grid-50 fright" data-id="'+clients[(i*6)+1].id +'" data-img="';
		content+= clients[(i*6)+1].image +'">';
		content+= '<div class="client-holder"><div class="client-span"><span>';
		content+= clients[(i*6)+1].name+'</span></div></div>';
		content+= '<div class="client grid-50 fleft" data-id="'+clients[(i*6)+2].id +'" data-img="';
		content+= clients[(i*6)+2].image +'">';
		content+= '<div class="client-holder"><div class="client-span"><span>';
		content+= clients[(i*6)+2].name+'</span></div></div>';
		content+= '<div class="client grid-50 fright" data-id="'+clients[(i*6)+3].id +'" data-img="';
		content+= clients[(i*6)+3].image +'">';
		content+= '<div class="client-holder"><div class="client-span"><span>';
		content+= clients[(i*6)+3].name+'</span></div></div>';
		content+= '<div class="client grid-50 fleft" data-id="'+clients[(i*6)+4].id +'" data-img="';
		content+= clients[(i*6)+4].image +'">';
		content+= '<div class="client-holder"><div class="client-span"><span>';
		content+= clients[(i*6)+4].name+'</span></div></div>';
		content+= '<div class="client grid-50 fright" data-id="'+clients[(i*6)+5].id +'" data-img="';
		content+= clients[(i*6)+5].image +'">';
		content+= '<div class="client-holder"><div class="client-span"><span>';
		content+= clients[(i*6)+5].name+'</span></div></div></div>';

		slider.append(content);
	}

	var content = '<div class="section-content grid-100 clearfix">';

	for (var i = 0; i < remain; i++) {



		if (i%2 == 0) {
			content+= '<div class="client grid-50 fleft" data-id="'+clients[i+(6*slides)].id +'" data-img="';
			content+= clients[i+(6*slides)].image +'">';
			content+= '<div class="client-holder"><div class="client-span"><span>';
			content+= clients[i+(6*slides)].name+'</span></div></div></div>';
		} else{
			content+= '<div class="client grid-50 fright" data-id="'+clients[i+(6*slides)].id +'" data-img="';
			content+= clients[i+(6*slides)].image +'">';
			content+= '<div class="client-holder"><div class="client-span"><span>';
			content+= clients[i+(6*slides)].name+'</span></div></div></div>';
		}
	}

	slider.append(content);
};

function clickClient(){
	var id = $(this).data('id');
	var name = $(this).children().children().text();
	var uri = 'works/'+id;

	$(".work-slider").slick('unslick');

	$.ajax({
		url: uri,
		type: "GET",
		success:function(result){

			result = JSON.parse(result);

			loadWorks(result);

			$('.flechaIzq-client, .flechaDer-client').addClass('hidden');
			$('.flechaIzq-work, .flechaDer-work').removeClass('hidden');

			$('.close-clients').css('display', 'none');
			$('.close-works').css('display', 'block');

			$('.close-works').on('click', function(){

				$("#portfolio-section .section-header span").text(category);

				$(".work-slider").css({'opacity':0, 'z-index':-1});
				$(".client-slider").css({'opacity':1, 'z-index':1});

				$('.flechaIzq-work, .flechaDer-work').addClass('hidden');
				$('.flechaIzq-client, .flechaDer-client').removeClass('hidden');

				$('.close-works').css('display', 'none');
				$('.close-clients').css('display', 'block');
			});

			$(".work-slider").slick({
				prevArrow: $(".flechaIzq-work"),
				nextArrow: $(".flechaDer-work")
			});

			$("#portfolio-section .section-header span").text(name);

			$(".client-slider").css({'opacity':0, 'z-index':-1});
			$(".work-slider").css({'opacity':1, 'z-index':1});
		}
	});
}

function loadWorks(works){
	var slider = $('.work-slider');
	slider.empty();

	for (var i = 0; i < works.length; i++) {
		var content = '<div class="section-content grid-100 clearfix">';
		content+= '<div class="work-img"><img src="img/';
		content+= works[i].image;
		content+= '"></div>';
		content+= '<div class="work-description">';
		content+= '<div class="work-title">';
		content+= '<div class="lines"></div>';
		content+= '<span>'+ works[i].title+'</span>';
		content+= '<div class="lines"></div> </div>';
		content+= '<div class="work-slogan">';
		content+= '<p>'+works[i].description+'</p></div>';
		content+= '</div></div>';

		slider.append(content);
	}

	var spanH = $('.work-description span').height();
	// $('.work-description .lines').css('margin-top', spanH/2);

};
