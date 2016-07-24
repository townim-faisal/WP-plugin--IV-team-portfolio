(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	$(document).ready(function(){
		//add slider
		$('.skill-rates').slider();

		/*add & delete row*/
		$(".dynamic-rows").on('click', '.btn-insert', function(){    
			var x= $("div.dynamic:first").clone().appendTo(".dynamic-rows:last");
			x.find(".skill-rates").slider();
			x.find("div.slider:first").remove();
			//x.find(".skill-rates").first().remove();
			x.find("#skills").val("");
			x.find(".btn-delete").removeClass("hide");

	  	});  
		
		$(".dynamic-rows:first").siblings().find(".btn-delete").removeClass("hide");  	
	  
	  	$(".dynamic-rows").on('click', '.btn-delete', function(){        
	    	$(this).closest(".dynamic").remove();
	  	});  

	  	
	});

})( jQuery );
