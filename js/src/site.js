jQuery(document).ready(function($){
	$('.slide-show').slick({
	  	arrows: false,
	  	dots: true,
	});

	// Let's shave some lines of code here. :)))yaa!! show me
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




