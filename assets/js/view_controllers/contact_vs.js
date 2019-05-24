Pace.on('done', function(){
	init();
});

function init(){
	$('.parallax').parallax();
	$('.collapsible').collapsible();
	$('.modal').modal();

	$('.radio-btn').on('change', function() {
		$('#form_contacto').valid();
	});

	$('#form_contacto').validate({
		rules: {
			email: {
				required: function(element)
				{
					if($('#form_contacto input[name="forma_contacto"][value="1"]').is(":checked") || $('#form_contacto input[name="forma_contacto"][value="3"]').is(":checked"))
						return true;
					else
						return false;
				},
				email: true,
			},
			telephone: {
				required: function(element)
				{
					if($('#form_contacto input[name="forma_contacto"][value="2"]').is(":checked") || $('#form_contacto input[name="forma_contacto"][value="3"]').is(":checked"))
						return true;
					else
						return false;
				},
				number: true,
				minlength: 7,
				maxlength: 10
			},
		},
		errorPlacement: function(error, element) {
			var placement = $(element).data('error');
			if (placement) {
				$(placement).append(error);
			} else {
				error.insertAfter(element);
			}
		},
		submitHandler: function(form) {
			var respuesta = false;

			$.ajax({
				url: base_url + 'cidam/ContactController/contactForm',
				type:  'post',
				data: $('#form_contacto').serialize(),
				success: function(respuesta){
					if(respuesta){
						form.reset();
						M.updateTextFields();
						$("#notificacion-submit").modal('open');
					}
					else{
						$("#error-submit").modal('open');
					}
				},
				error:  function(xhr,err){ 
					console.log("readyState: "+xhr.readyState+"\nstatus: "+xhr.status+"\n \n responseText: "+xhr.responseText);
				}
			});
		}
	});
}