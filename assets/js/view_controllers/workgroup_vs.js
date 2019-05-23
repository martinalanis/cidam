Pace.on('done', function(){
	init();
});

function init(){
	var $grid = $('.grid');

	$grid.imagesLoaded( function(){
		$grid.isotope({
			layoutMode: 'fitRows',
			itemSelector : '.grid-item',
			getSortData: {
				nombre: '.nombre'
			}
		});
	});

	$('.sort-button-group').on( 'click', 'button', function() {
		var sortValue = $(this).attr('data-sort');
		$grid.isotope({ sortBy: sortValue });
	});
}