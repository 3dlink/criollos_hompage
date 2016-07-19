	$(document).scroll(function(){
		if($('.nosotros_content').is_on_screen()){
        	$('.dots_criollos').addClass('animacion');
    	}
    });

$(document).ready(function(){

	$('.upsideDown').css('left', $('.shape-2').width()/2 - 50);

	if($('.nosotros_content').is_on_screen()){
      $('.dots_criollos').addClass('animacion');
  	}

	// FLIP //
	$('.flipper').flip({
		axis: 'x',
		trigger: 'hover'
	});

	// SLIDERS //
	$(".category-slider33").slick({
		autoplay:true,
		autoplaySpeed: 5000,
		draggable: true,
		prevArrow: $(".flechaIzq-category2"),
		nextArrow: $(".flechaDer-category2")
	});
	$(".quote-slider").slick({
		draggable: false,
		arrows: false,
		autoplay: true,
		speed: 500,
		autoplaySpeed: 5000
	});
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
	$(".work-slider .w-slider").slick({
		draggable: false,
		prevArrow: $(".flechaIzq-work"),
		nextArrow: $(".flechaDer-work")
	});
	$(".tienda-slider").slick({
		draggable: false,
		prevArrow: $(".flechaIzq-tienda"),
		nextArrow: $(".flechaDer-tienda")
	});


	// ARROWS & X POSITION //
	locateArrows();

	$(window).resize(function(){
		locateArrows();
		$('.upsideDown').css('left', $('.shape-2').width()/2 - 50);
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

				$("#portfolio-section .section-header .section-title").text(title);

				$('.client').each(function(){
					var div = $(this);
					var img = div.data('img');
					div.css('background-image', 'url("img/'+img+'")');
				});

				$('.client').on('click', clickClient);
				$('.client').hover(function(){
					var div = $(this);

					div.children().children().css('display','none');

				}, function(){
					var div = $(this);

					div.children().children().css('display','table-cell');

				});

				$('.flechaIzq-category, .flechaDer-category').addClass('hidden');
				$('.flechaIzq-client, .flechaDer-client').removeClass('hidden');

				$('.close-clients').css('display','block');
				$('.close-clients').on('click',function(){
					$("#portfolio-section .section-header .section-title").text('Portafolio');

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

	$("#cv").change(function(){
		$("#cvUpload").val($(this).val());

		$('#cvSubmit').click();
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
		content+= clients[i*6].image+'">';
		content+= '<div class="client-holder"><div class="client-span"><span>';
		content+= clients[i*6].name+'</span></div></div></div>';
		content+= '<div class="client grid-50 fright" data-id="'+clients[(i*6)+1].id +'" data-img="';
		content+= clients[(i*6)+1].image +'">';
		content+= '<div class="client-holder"><div class="client-span"><span>';
		content+= clients[(i*6)+1].name+'</span></div></div></div>';
		content+= '<div class="client grid-50 fleft" data-id="'+clients[(i*6)+2].id +'" data-img="';
		content+= clients[(i*6)+2].image +'">';
		content+= '<div class="client-holder"><div class="client-span"><span>';
		content+= clients[(i*6)+2].name+'</span></div></div></div>';
		content+= '<div class="client grid-50 fright" data-id="'+clients[(i*6)+3].id +'" data-img="';
		content+= clients[(i*6)+3].image +'">';
		content+= '<div class="client-holder"><div class="client-span"><span>';
		content+= clients[(i*6)+3].name+'</span></div></div></div>';
		content+= '<div class="client grid-50 fleft" data-id="'+clients[(i*6)+4].id +'" data-img="';
		content+= clients[(i*6)+4].image +'">';
		content+= '<div class="client-holder"><div class="client-span"><span>';
		content+= clients[(i*6)+4].name+'</span></div></div></div>';
		content+= '<div class="client grid-50 fright" data-id="'+clients[(i*6)+5].id +'" data-img="';
		content+= clients[(i*6)+5].image +'">';
		content+= '<div class="client-holder"><div class="client-span"><span>';
		content+= clients[(i*6)+5].name+'</span></div></div></div>';

		slider.append(content);
	}

	if (remain != 0) {
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

		for (var i = remain; i < 6; i++) {
			if (i%2 == 0) {
				content+= '<div class="client grid-50 fleft">';
				content+= '<div class="client-holder"><div class="client-span"><span></span></div></div></div>';
			} else{
				content+= '<div class="client grid-50 fright">';
				content+= '<div class="client-holder"><div class="client-span"><span></span></div></div></div>';
			}
		};

		slider.append(content);
	}


};

function clickClient(){
	var id = $(this).data('id');
	var name = $(this).children().children().text();
	var uri = 'works/'+id;

	$(".work-slider .w-slider").slick('unslick');

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

				$(".work-slider").css({'opacity':0, 'z-index':-1});
				$(".client-slider").css({'opacity':1, 'z-index':1});

				$('.flechaIzq-work, .flechaDer-work').addClass('hidden');
				$('.flechaIzq-client, .flechaDer-client').removeClass('hidden');

				$('.close-works').css('display', 'none');
				$('.close-clients').css('display', 'block');
			});

			$(".work-slider .w-slider").slick({
				prevArrow: $(".flechaIzq-work"),
				nextArrow: $(".flechaDer-work")
			});

			$(".client-slider").css({'opacity':0, 'z-index':-1});
			$(".work-slider").css({'opacity':1, 'z-index':1});
		}
	});
}

function loadWorks(work){
	var slider = $('.work-slider .w-slider');
	slider.empty();

	$('.work-title span').text(work.title);
	$('.work-slogan p').text(work.description);

	$('.work-title .lh1').css('right', $('.work-title span').position().left + $('.work-title span').width() + 15);
	$('.work-title .lh2').css('left', $('.work-title span').position().left +  $('.work-title span').width() + 15);

	for (var i = 0; i < work.images.length; i++) {
		var content = '<div class="section-content grid-100 clearfix">';
		content+= '<div class="work-img"><img src="public/img/';
		content+= work.images[i].image;
		content+= '"></div>';
		content+= '</div>';

		slider.append(content);
	}

};

function locateArrows(){
	var position = $('.service-slider').position();
	$('.flechaIzq-service').css('left', position.left-115);
	$('.flechaDer-service').css('left', position.left+$('.service-slider').width()+72);

	$('.flechaIzq-service, .flechaDer-service').css('top', position.top+170);

	var position2 = $('.category-slider').position();
	$('.flechaIzq-category').css('left', position2.left-115);
	$('.flechaDer-category').css('left', position2.left+$('.category-slider').width()+55);

	$('.flechaIzq-category, .flechaDer-category').css('top', position.top+ ($('.category-slider').height()/2) - 230);

	var position3 = $('.client-slider').position();
	$('.flechaIzq-client').css('left', position3.left-115);
	$('.flechaDer-client').css('left', position3.left+$('.client-slider').width()+55);

	$('.flechaIzq-client, .flechaDer-client').css('top', position.top+($('.category-slider').height()/2) - 230);

	var position4 = $('.work-slider').position();
	$('.flechaIzq-work').css('left', position4.left-115);
	$('.flechaDer-work').css('left', position4.left+$('.work-slider').width()+55);

	$('.flechaIzq-work, .flechaDer-work').css('top', position.top+($('.category-slider').height()/2) - 420);

	var position5 = $('.tienda-slider').position();
	$('.flechaIzq-tienda').css('left', position5.left-115);
	$('.flechaDer-tienda').css('left', position5.left+$('.tienda-slider').width()+72);

	$('.flechaIzq-tienda, .flechaDer-tienda').css('top', position5.top+90);

	$('.close').css('top', position2.top + 1000);
	$('.close').css('left', position2.left + $('.category-slider').width() + $('.close').width()/2);


	// $('.quote-holder').each(function(){
	// 	position = $(this).children('span').position();
	// 	var c = $(this).children().children('.comillaIzq');

	// 	// c.css('top', position.top + c.height()/2);
	// 	// c.css('left', position.left - c.width());
	// });

	$('.upload').css('left', $('#cvUpload').position().left);

	$('.lh1, .lh2').css('top', $('.work-title span').position().top);
}
