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

$args = array(
            'post_type' => 'ivteamportfolio',
        );
$members = new WP_Query( $args );
$positions = array();
$groups= get_terms('iv_team_portfolio_group_position');
$layoutmode = ($view_as=="list") ? "vertical" : "masonry";

?>


<script>
(function($) {
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip(); 
		var $grid = $('.image-filter1').isotope({
			itemSelector: '.element-item',
		    layoutMode: '<?php echo $layoutmode;?>'
		});
		$('.filters-button-group1').on( 'change', 'select', function() {
		    var filterValue = $( "option:selected" ).attr('data-filter');;
    		$grid.isotope({ filter: filterValue });		
		});
	});

})( jQuery );	
</script>


<div class="iv_total_team_bs">
<div class ="container-fluid"> 
	<div class="row"> <!-- FILTERING -->
		<div class="filters-button-group1">
			<select class="form-control"  aria-label="filtering">
				<option value="All">All</option>
				<?php
				foreach($groups as $group) :
				?>
				<option value="<?php echo $group->name;?>" data-filter=".<?php echo $group->name;?>"><?php echo $group->name;?></option>
				<?php	
				endforeach;
				?>
			</select>
			<!-- <input type="button" class="btn btn-primary" id="iv_team_portfolio_submit_group" name="iv_team_portfolio_submit_group" value="Show"></input> -->
		</div>
	</div>
	<br>	
	<div class="row">
	<div class="image-filter1">
		<?php
   		if ( $members->have_posts() ) :
        while ( $members->have_posts() ) :
            $members->the_post();
        ?>             
        	<div class="element-item <?php echo implode( " ", wp_get_post_terms(get_the_ID(), 'iv_team_portfolio_group_position', array("fields" => "names")));?>">
			<?php
		    if($view_as == 'list') :
		    ?>					
				<li>
					<a href="<?php the_permalink();?>"><?php echo get_post_meta( get_the_ID(), 'meta-name', true );?></a>
				</li>			
			<?php
	    	endif;
	    	if( $view_as == 'image') :
	    	?>
		    	<a href="<?php the_permalink();?>" data-toggle="tooltip" data-placement="top" title="<?php echo get_post_meta( get_the_ID(), 'meta-name', true );?>">	
					<img src="<?php echo get_post_meta( get_the_ID(), 'meta-image-url', true );?>" width="50px" height="50px" class="img-thumbnail">
				</a>
			<?php
			endif;
			?>	
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