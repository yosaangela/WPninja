jQuery(document).ready(function($){
	$('.slide-show').slick({
	  	arrows: false,
		dots: true,
		infinite: true,
		// autoplay:true,
		// autoplaySpeed:900
	});

	$('#menu-trigger').click(function(event) {
		event.preventDefault();
		// Prevents default behavior and DOM bubbling.
		$('#menu-overlay').addClass('menu-visible').css('overflow', 'hidden');
	});

	$('a.close-menu').click(function(event){
		event.preventDefault();
	 	$('#menu-overlay').removeClass('menu-visible');
	});

});

