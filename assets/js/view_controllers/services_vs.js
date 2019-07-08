Pace.on('done', function(){
	init();
});

function init(){
	$('.parallax').parallax();
	$('.collapsible').collapsible();
	$('.modal').modal();

	$("#cotizacion").submit(function(e){

		if( $(this).serialize() == ''){
			e.preventDefault();
			$("#error-submit").modal('open');
		}
		
	});
}