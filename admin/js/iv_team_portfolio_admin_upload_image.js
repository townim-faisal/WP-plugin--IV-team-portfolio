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
		//for testing - console.log('esaa');

		$('.image').hide();

		//build gallery window for select single image
		$('#insert_image').click (function(){
			var gallery_window = wp.media({
				title: 'Choose or Upload Image',
				library: {type: 'image'},
				multiple: false,
				button: {text: 'Use This Image'}
			});

			//get user selection
			gallery_window.on('select', function(){
				var user_selection = gallery_window.state().get('selection').first().toJSON();
				
				$('#image-url').val(user_selection.url);
				if($('#img_url').length == 0){
					$('div.single_image > div.col-xs-6').append("<img src='"+user_selection.url+"' class='img-thumbnail' id='img_url' height='100' width='150'>" );
				}
				$('#img_url').attr('src', user_selection.url);
			});

			//open media gallery
			gallery_window.open();
		});

		
		//build gallery window for select multiple image		
		$('#insert_images').click (function(){
			var gallery_window = wp.media({
				title: 'Choose or Upload Images',
				library: {type: 'image'},
				multiple: true,
				button: {text: 'Use These Images'}
			});

			//get user selection
			gallery_window.on('select', function(){

				var user = gallery_window.state().get('selection');
				user.map(function(a){
					a=a.toJSON();
					//console.log(a.url);
					$('.image_container').append("<div class='col-xs-6 col-md-3'><input type='text' class='form-control image' name='image-urls[]'' value='"+a.url+"' aria-describedby='basic-addon1'><button type='button' class='btn btn-xs remove' style='position: absolute; top: -5px; right: 60px'><i class='fa fa-minus-square' aria-hidden='true'></i></button><img src='"+a.url+"' class='img-thumbnail img_urls' height='100' width='150'>");
					$(".image").hide();
				});
					
			});

			//open media gallery
			gallery_window.open();
		});
		
		//remove multiple image
		$(".image_container").on('click', '.remove', function(){
			//console.log($(this).parent());
			$(this).parent().remove();
		});		

	});

})( jQuery );
