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
		$("div.coloumns").show();
		$("div.animateOut1").hide();
		$("div.animateIn").hide();

		$(".shortcode").change(function(){
			var display_arr = new Array();	
			  if($('#name').is(":checked")) display_arr.push('name');
		      if($('#image').is(":checked")) display_arr.push('image');
		      if($('#position').is(":checked")) display_arr.push('position');
		      if($('#email').is(":checked")) display_arr.push('email');
		      if($('#phone_no').is(":checked")) display_arr.push('phone_no');
		      if($('#per_web').is(":checked")) display_arr.push('website');
		      if($('#facebook').is(":checked")) display_arr.push('facebook');
		      if($('#twitter').is(":checked")) display_arr.push('twitter');
		      if($('#linkedin').is(":checked")) display_arr.push('linkedin');
		      if($('#gplus').is(":checked")) display_arr.push('gplus');
		      if($('#pinterest').is(":checked")) display_arr.push('pinterest');
		      if($('#instagram').is(":checked")) display_arr.push('instagram');
		      if($('#vimeo').is(":checked")) display_arr.push('vimeo');
		      if($('#youtube').is(":checked")) display_arr.push('youtube');
		      
		    var display_str = display_arr.join(', ');
		    var y = -1;
		    if($('#no_entries_display').val() !== '0') y = $('#no_entries_display').val();
		    var z = 'false';
		    if($('#pagination').is(":checked")) z='true';

		    
		    var template = $('#template option:selected').val();
		    if( template == '' || template == 'template-1' || template == 'template-2' || template == 'template-3') {
		    	$("div.coloumns").show();
		    	$("div.animateOut1").hide();
		    	$("div.animateIn").hide();
		    } else if( template == 'carousel_dot' || template == 'carousel_button' ) {
		    	$("div.animateOut1").show();
		    	$("div.animateIn").show();
		    	$("div.coloumns").hide();
		    } else {
		    	$("div.coloumns").hide();
		    	$("div.animateOut1").hide();
		    	$("div.animateIn").hide();
		    }	


		    // generating

			var x = "[new-me group='" + $('#groups').val() + "' " ;	
			x+= "order_by='" + $('#order_by').val() + "' ";
			x+= "order='" + $('#order').val() + "' ";
			x+= "display='" + display_str + "' ";
			x+= "no_entries_display='" + y + "' ";
			x+= "pagination='" + $('#pagination').val() + "' "; 
			x+= "post_id='" + $('#post_id').val() + "' ";
			x+= "post_id_exclude='" + $('#post_id_exclude').val() + "' ";
			x+= "sin_page_link='" + $('#sin_page_link').val() + "' ";
			x+= "template='" + $('#template').val() + "' ";
			x+= "image_style='" + $('#image_style').val() + "' ";

			if( template == '' || template == 'template-1' || template == 'template-2' || template == 'template-3') {
			x+= "coloumn='" + $('#coloumns').val() + "' ";
			} else if( template == 'carousel_dot' || template == 'carousel_button' ) {
			x+= "animateOut='" + $('#animateOut').val() + "' ";
			x+= "animateIn='" + $('#animateIn').val() + "' ";
			} else {}

			
			/*x+= "layout='" + $('#layout').val() + "' ";			
			x+= "theme='" + $('#theme').val() + "' ";
			x+= "composition='" + $('#composition').val() + "' ";
			x+= "img_shape='" + $('#img_shape').val() + "' ";
			x+= "img_effect='" + $('#img_effect').val() + "' ";
			x+= "text_allign='" + $('#text_allign').val() + "' ";
			x+= "img_size='" + $('#img_size').val() + "' ";*/

			// Showing
			$("#shortcode").text(x+']');
			$("#php_shortcode").text('<?php echo do_shortcode("'+x+']"); ?>');
			$("#shrt").val(x+']');
		});

			

		//add show-preview 
	  	$('#show_prev').click(function(){
	  		var my_Shrtcd = $("#shrt").val();
	  		//console.log(my_Shrtcd);

	  		$.ajax({
				url : ajaxurl,
				type : "post",
				dataType : "json",
				data : {
					action: "add_preview",	
					shortCode: my_Shrtcd
				}	
			}).done(function(response){
				if(response.code === "success"){
					$.fn.prettyPhoto({social_tools:false});	
					$.prettyPhoto.open(response.url);
					$.prettyPhoto.close();
					//console.log(response.url);
				}else{
					alert("problem occurred");
				}
			});
	  	});

	});

})( jQuery );
