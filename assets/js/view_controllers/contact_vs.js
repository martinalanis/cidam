Pace.on('done', function(){
	init();
});

function init(){
	$('.parallax').parallax();
	$('.collapsible').collapsible();
	$('.notification-modal').modal();
	$('.directory-modal').modal({
		endingTop: "5%",
		onOpenStart: function() {
			$("#directory-content").html("<tr><td colspan='3' class='center-align'><img src='"+base_url+"assets/images/loading.gif'><td></tr>");
			$.ajax({
				url: base_url + 'cidam/ContactController/getDirectory',
				type: 'get',
				dataType: 'json',
				success: function(response){
					if($.isEmptyObject(response)){
						$("#directory-content").html("<div>Sin registros</div>");
						return;
					}
					var table_content = '';
					$.each(response, function(i,row){
						table_content += '<tr>'
							+'<td>'+row.nombre+'</td>'
							+'<td>'+row.puesto+'</td>'
							+'<td>'+row.telefono+'</td></tr>';
					});
					$("#directory-content").html(table_content);
				},	
				error: function(err){
					alert(err);
				}
			});
		}
	});

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