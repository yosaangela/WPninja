jQuery(document).ready(function($){
	$('.slide-show').slick({
	  	arrows: false,
		dots: true,
		infinite: true,
		// autoplay:true,
		// autoplaySpeed: 1000
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

	$('#home_item_image').onclick(function {
		var $this = $(this);
		$this.remove();
	});

	/*  Animation On scroll */

	AOS.init({
		duration: 1200
	});

});

