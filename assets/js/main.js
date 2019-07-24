Pace.on('done', function(){
	$('#app_container').show();
	init_main();
});

function init_main(){

	$.extend(jQuery.validator.messages, {
		required: "Requerido.",
		remote: "Por favor arregle este campo.",
		email: "Por favor ingrese una dirección de correo válida.",
		number: "Ingrese un número válido.",
		digits: "Ingrese únicamente dígitos.",
		equalTo: "Ingresa el mismo valor.",
		maxlength: $.validator.format("Por favor no ingrese más de {0} caracteres."),
		minlength: $.validator.format("Ingrese al menos {0} caracteres."),
		rangelength: $.validator.format("Ingrese un valor entre {0} y {1} caracteres de longitud."),
		range: $.validator.format("Ingrese un valor entre {0} y {1}."),
		max: $.validator.format("Por favor ingrese un valor menor o igual a {0}."),
		min: $.validator.format("Por favor ingrese un valor mayor o igual a {0}."),
		url: "Ingrese una URL valida, es necesario añadir http o https"
	});

	$.validator.setDefaults({
		ignore: []
	});

	$('.sidenav').sidenav({edge: 'left'});
	$('.materialboxed').materialbox();
	$('.aviso_privacidad').modal();

	$(window).scroll(function() {
		if($(window).scrollTop() > 85){
			$('#scroll-top-btn').removeClass('hide');
			$('#scroll-top-btn').removeClass('animated fadeOut');
			$('#scroll-top-btn').addClass('animated fadeIn');
		}
		else{
			$('#scroll-top-btn').removeClass('animated fadeIn');
			$('#scroll-top-btn').addClass('animated fadeOut');
		}
	});


	$('#scroll-top').on('click', function(event) {
		if (this.hash !== "") {
			event.preventDefault();
			var hash = this.hash;

			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 800);
		}
	});

	if(window.location.hash){
		if (window.location.hash != "") {
			var hash = window.location.hash;

			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 800);
		}
	}


}