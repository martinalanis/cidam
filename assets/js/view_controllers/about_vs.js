Pace.on('done', function(){
	init();
});

function init(){
	$('.parallax').parallax();
	$('.tabs').tabs();
	$('#estructura_org').modal({endingTop: '1%'});
}