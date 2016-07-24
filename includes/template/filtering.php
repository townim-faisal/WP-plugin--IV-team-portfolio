<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https:\\ivivelabs.com
 * @since      1.0.0
 *
 * @package    Iv_team_portfolio
 * @subpackage Iv_team_portfolio/admin/partials
 */

//var_dump($display_arr);
//var_dump($this->options1);
//print_r($args);

$members = new WP_Query( $args );
//var_dump($members);
$meta_positions = array();
$positions = array();
?>

<style>
figure img{
	height: <?php if (!empty($this->options1['image_height'])){echo $this->options1['image_height'].'px' ;} else{echo '200px';}?>; 
	width: <?php if (!empty($this->options1['image_width'])){echo $this->options1['image_width'].'px' ;} else{echo '200px';}?>;
}
figure h2{
	font-size: <?php if (!empty($this->options1['name_font_size'])){echo $this->options1['name_font_size'].'px' ;} else{echo '14px';}?>;
}
.new-me-member-des-1{
	margin-top: 6px;
	width: 200px;
	font-size: <?php if (!empty($this->options1['content_font_size'])){echo $this->options1['content_font_size'].'px' ;} else{echo '15px';}?>;
}
.new-me-skill-bar-1{
	height: 4px;
	width: 200px;
	border: 0.5px solid #C0C0C0;
}
.new-me-skill-level-1{
	height:3px;  
	background: <?php echo '#'.$this->options1['main_color'] ;?>;
}	

<?php echo $this->options1['custom_css'] ;?>

</style>

<script>
(function($) {
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip(); 

		var $grid = $('.image-filter').isotope({
			itemSelector: '.element-item',
		    layoutMode: 'masonry'
		});

		$('.filters-button-group').on( 'click', 'button', function() {
		    var filterValue = $( this ).attr('data-filter');
    		$grid.isotope({ 
    			filter: filterValue,
    			transitionDuration: '1s' });
		});


		$('.filters-button-group3').on( 'click', 'button', function() {
		    var filterValue = $( this ).attr('data-filter');;
    		$grid.isotope({ 
    			filter: filterValue,
    			transitionDuration: '1s' });		
		});

		<?php echo $this->options1['custom_js'] ;?>
	});

})( jQuery );	
</script>


<div class="iv_total_team_bs">
<div class ="container-fluid"> 
	<?php
		include( plugin_dir_path( dirname( __FILE__ ) ) . 'template/filtering_button.php');
	?>

	<div class="row">
	<div class="image-filter">
		<?php
   		if ( $members->have_posts() ) :
        while ( $members->have_posts() ) :
            $members->the_post();
        	$meta_position = get_post_meta( get_the_ID(), 'meta-position', true );
        ?>  
        <div class="">           
        	<div class="element-item <?php echo strtolower(str_replace(' ', '', $meta_position));?>">
	        	<div class="grid">
					<?php
						include( plugin_dir_path( dirname( __FILE__ ) ) . 'template/template-image.php');
					?>
				</div>	

				<div class="">
					<?php	
						include( plugin_dir_path( dirname( __FILE__ ) ) . 'template/template-des.php');
					?>		
				</div>			
			</div>
		</div>	
        <?php
    	endwhile;
    	wp_reset_postdata();	
    	endif;
    	?>
    </div>
	</div>
</div>
</div>


