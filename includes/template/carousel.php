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

$dot= "false";
$nav="false";
if($template==""){
	if($this->options1['template']=="carousel_dot") {$dot= "true";} else{$dot= "false";}
	if($this->options1['template']=="carousel_button") {$nav= "true";} else{$nav= "false";}
}
if($template=="carousel_dot") {$dot= "true";} else{$dot= "false";}
if($template=="carousel_button") {$nav= "true";} else{$nav= "false";}
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
		var owl = $('.custom1');
		owl.owlCarousel({
			animateOut: <?php if(!empty($animateOut)){echo "'".$animateOut."'";}else{echo "'".fadeOut."'";}?>,
            animateIn: <?php if(!empty($animateIn)){echo "'".$animateIn."'";}else{echo "'".fadeIn."'";}?>,
            items: 1,
            autoplay: true,
            autoplaySpeed: 1200,
            smartSpeed:450,
            center: true,
            loop:true,
    		margin:10,
            dots: <?php echo $dot;?>,
            dotsSpeed: 1200,
            nav: <?php echo $nav;?>,
            navSpeed: 1200,
            navText: [ '&lt;', '&gt;' ],   
		});

		<?php echo $this->options1['custom_js'] ;?>
		
	});


})( jQuery );	
</script>


<div class="iv_total_team_bs">
<div class ="container-fluid"> 
	<div class="row">
		<div class="owl-carousel custom1 animated">
		 
		<?php
   		if ( $members->have_posts() ) :
        while ( $members->have_posts() ) :
            $members->the_post();	
		?>		
		    <div class="item">
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
		<?php
		endwhile;
    	wp_reset_postdata();	
    	endif;
    	?>
		</div>
	</div>          	
</div>
</div>


