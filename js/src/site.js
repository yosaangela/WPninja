(function ($) {
	$(document).ready(function(){
	  $('.slide-show').slick();
	});


    $(document).ready(function() {
      $("#my-menu").mmenu({
         // options
      }, {
         // configuration
         .my-menu: {
            selected: "active";
            vertical: "expand";
         }
      });
   });
    
    $(document).ready(function() {
      $("#my-menu").mmenu({
         // Options
      });
      var API = $("#my-menu").data( "mmenu" );
      
      $("#my-button").click(function() {
         API.open();
      });
   });
})(jQuery);

