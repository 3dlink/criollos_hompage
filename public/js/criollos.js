$(document).ready(function(){
	// PERKS //

	var spanH = $('#portfolio-section .section-header span').height();
	$('#portfolio-section .section-header .lines').css('margin-top', spanH/2);


	// ARROWS & X POSITION //
	var position = $('.slider').position();
	$('.flechaIzq-category, .flechaDer-category, .flechaIzq-client, .flechaDer-client').css('top', position.top+442);
	$('.flechaIzq').css('left', position.left-137);
	$('.flechaDer').css('left', position.left+$('.slider').width()+85);

	$('.flechaIzq-work, .flechaDer-work').css('top', position.top+272);

	var position = $('#portfolio-section').position();
	$('.close').css('top', position.top + 1400);
	$('.close').css('left', position.left + $('.portfolio-section').width()+ 430*2 - $('.close').width() -50);

	// SLIDERS //

	$(".category-slider").slick({
		draggable: false,
		prevArrow: $(".flechaIzq"),
		nextArrow: $(".flechaDer")
	});
	$(".client-slider").slick({
		prevArrow: $(".flechaIzq-client"),
		nextArrow: $(".flechaDer-client")
	});
	$(".work-slider").slick({
		prevArrow: $(".flechaIzq-work"),
		nextArrow: $(".flechaDer-work")
	});

	// UNBLOCKS CATEGORY INFO //

	$("#category1").hover(function(){
		$(".category-info-1").css("background-color","white");
	}, function(){
		$(".category-info-1").css("background-color","black");
	});
	$("#category2").hover(function(){
		$(".category-info-2").css("background-color","white");
	}, function(){
		$(".category-info-2").css("background-color","black");
	});
	$("#category3").hover(function(){
		$(".category-info-3").css("background-color","white");
	}, function(){
		$(".category-info-3").css("background-color","black");
	});

	$("#category4").hover(function(){
		$(".category-info-4").css("background-color","white");
	}, function(){
		$(".category-info-4").css("background-color","black");
	});
	$("#category5").hover(function(){
		$(".category-info-5").css("background-color","white");
	}, function(){
		$(".category-info-5").css("background-color","black");
	});
	$("#category6").hover(function(){
		$(".category-info-6").css("background-color","white");
	}, function(){
		$(".category-info-6").css("background-color","black");
	});

	// GO TO CLIENTS //
	$(".category").click(function(){

		var title= $(this).data('title');
		var id = $(this).data('id');
		var description = $(this).data('description');

		var uri = '/clients/'+id;

		$(".client-slider").slick('unslick');

		$.ajax({
			url: uri, //the page containing php script
			type: "GET", //request type
			success:function(result){
				result = JSON.parse(result);

				loadClients(result);

				$("#portfolio-section .section-title").text(title);
				$("#portfolio-section .section-header span").text(description);
				

				$('.client').on('click', clickClient);

				$('.flechaIzq-category, .flechaDer-category').addClass('hidden');
				$('.flechaIzq-client, .flechaDer-client').removeClass('hidden');

				$('.close-clients').removeClass('hidden');
				$('.close-clients').on('click',function(){
					$(".client-slider").css({'opacity':0, 'z-index':-1});
					$(".category-slider").css({'opacity':1, 'z-index':1});

					$('.flechaIzq-client, .flechaDer-client').addClass('hidden');
					$('.flechaIzq-category, .flechaDer-category').removeClass('hidden');

					$('.close-clients').addClass('hidden');-category
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

		content+= '<div class="client grid-50 fleft" data-id="'+clients[i*6].id +'">';
		content+= '<div class="client-holder">';
		content+= clients[i*6].name+'</div></div>';
		content+= '<div class="client grid-50 fright" data-id="'+clients[(i*6)+1].id +'">';
		content+= clients[(i*6)+1].name+'</div>';
		content+= '<div class="client grid-50 fleft" data-id="'+clients[(i*6)+2].id +'">';
		content+= clients[(i*6)+2].name+'</div>';
		content+= '<div class="client grid-50 fright" data-id="'+clients[(i*6)+3].id +'">';
		content+= clients[(i*6)+3].name+'</div>';
		content+= '<div class="client grid-50 fleft" data-id="'+clients[(i*6)+4].id +'">';
		content+= clients[(i*6)+4].name+'</div>';
		content+= '<div class="client grid-50 fright" data-id="'+clients[(i*6)+5].id +'">';
		content+= clients[(i*6)+5].name+'</div>';
		content+= '</div>';

		slider.append(content);
	}

	var content = '<div class="section-content grid-100 clearfix">';

	for (var i = 0; i < remain; i++) {
		


		if (i%2 == 0) {
			content+= '<div class="client grid-50 fleft" data-id="'+clients[i+(6*slides)].id +'">';
			content+= '<div class="client-holder">';
			content+= clients[i+(6*slides)].name+'</div></div>';
		} else{
			content+= '<div class="client grid-50 fright" data-id="'+clients[i+(6*slides)].id +'">';
			content+= '<div class="client-holder">';
			content+= clients[i+(6*slides)].name+'</div></div>';
		}
	}

	slider.append(content);
};

function clickClient(){
	var id = $(this).data('id');
	var uri = '/works/'+id;

	$(".work-slider").slick('unslick');

	$.ajax({
		url: uri,
		type: "GET",
		success:function(result){

			result = JSON.parse(result);

			loadWorks(result);

			$('.flechaIzq-client, .flechaDer-client').addClass('hidden');
			$('.flechaIzq-work, .flechaDer-work').removeClass('hidden');

			$('.close-clients').addClass('hidden');
			$('.close-works').removeClass('hidden');

			$('.close-works').on('click', function(){

				$(".work-slider").css({'opacity':0, 'z-index':-1});
				$(".client-slider").css({'opacity':1, 'z-index':1});

				$('.flechaIzq-work, .flechaDer-work').addClass('hidden');
				$('.flechaIzq-client, .flechaDer-client').removeClass('hidden');

				$('.close-works').addClass('hidden');
				$('.close-clients').removeClass('hidden');
			});

			$(".work-slider").slick({
				prevArrow: $(".flechaIzq-work"),
				nextArrow: $(".flechaDer-work")
			});



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
		content+= '<div class="work-img">';
		content+= works[i].image;
		content+= '</div>';
		content+= '<div class="work-description">';
		content+= '<div class="work-title">';
		content+= '<div class="lines"></div>';
		content+= '<span>'+ works[i].title+'</span>';
		content+= '<div class="lines"></div> </div>';
		content+= '<div class="work-slogan">';
		content+= '<p>'+works[i].description+'</p> </div>';
		content+= '</div></div>';
	
		slider.append(content);
	}

	var spanH = $('.work-description span').height();
	$('.work-description .lines').css('margin-top', spanH/2);

};