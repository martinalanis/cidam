Pace.on('done', function(){
	init();
});

function abrir_video(){
	$('#modal1').modal('open');
}

function pause_video(){
	var video = $("#youtube-player").attr("src");
	$("#youtube-player").attr("src","");
	$("#youtube-player").attr("src",video);
}

function init(){
	$('#modal1').modal({
		onCloseEnd: pause_video
	});

	var swiper = new Swiper('#swiper-servicios', {
		slidesPerView: 1,
		spaceBetween: 0,
		loop: true,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		autoplay: {
			delay: 3000,
			disableOnInteraction: false,
		},
	});

	var swipe2 = new Swiper('#swiper-acreditaciones', {
		slidesPerView: 1,
		spaceBetween: 0,
		loop: true,
		autoplay: {
			delay: 3000,
			disableOnInteraction: false,
		},
	});

	$('#form_contacto').validate({
		submitHandler: function(form) {
			console.log('Formulario validado');
			form.reset();
		}
	});

	var result = $("#soluciones-integrales").height();
	$('#home-swiper').css("height", result+"px");

	$(window).resize(function(){
		var result = $("#soluciones-integrales").height();
		$('#home-swiper').css("height", result+"px");
	});

	$('a[href*="#"]')
	.not('[href="#"]')
	.not('[href="#0"]')
	.not('[href="#contact-modal"]')
	.click(function(event) {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				event.preventDefault();
				$('html, body').animate({
					scrollTop: target.offset().top - 70
				}, 1000);
			}
		}
	});
}