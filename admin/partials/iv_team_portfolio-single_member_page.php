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
?>

<style>
.new-me-skill-bar-1{
	height: 4px;
	width: 200px;
	border: 0.5px solid #C0C0C0;
}
.new-me-skill-level-1{
	height:3px;  
	background: <?php echo '#'.$this->options1['main_color'] ;?>;
}			
</style>

<script>
(function($) {
	$(document).ready(function(){
		var owl = $('.multiple_images_carousel');
		owl.owlCarousel({
            items: 1,
            autoplay: true,
            autoplaySpeed: 1200,
            smartSpeed:450,
            center: true,
            loop:true,
    		margin:10,
    		dots: false,
            nav: false,
            navSpeed: 1200,
            navText: [ '&lt;', '&gt;' ],   
		});
	});


})( jQuery );	
</script>

<div class="iv_total_team_bs">
<div class ="container-fluid"> 
	<div class="row">
		<?php
		$image_urls = get_post_meta( get_the_ID(), 'meta-image-urls', true );
		if($this->options1['multiple_images']=='yes') :
		?>
		<div class="owl-carousel multiple_images_carousel">
		<?php	
		if(count($image_urls)>=1):
		foreach($image_urls as $key=>$value): 
		?>					
				<div class="item">
					<img src="<?php echo $value;?>">
				</div>
		<?php
		endforeach;
		endif;
		?>
		</div>
		<br>
		<?php
		endif;
		?>	
		
	</div>

	<div class="row">
		<div class="col-sm-6">
			<img src="<?php echo get_post_meta( get_the_ID(), 'meta-image-url', true );?>" style="border: 0px solid white; border-radius: 50%; height: 200px; width: 200px">
		</div>
		<div class="col-sm-6">
			<h3><?php echo strtoupper(get_post_meta( get_the_ID(), 'meta-name', true ));?></h3>
			<p><?php echo get_post_meta( get_the_ID(), 'meta-position', true );?></p>
			<hr>

			<p><i class="fa fa-w fa-phone"></i> <a href="tel:<?php echo get_post_meta( get_the_ID(), 'meta-phone-no', true);?>"> Call <?php echo get_post_meta( get_the_ID(), 'meta-name', true );?></a></p>
			<p><i class="fa fa-w fa-envelope"></i> <a href="mailto:<?php echo get_post_meta( get_the_ID(), 'meta-email', true );?>"> Send Email</a></p>
			<p><i class="fa fa-w fa-globe"></i> <a href="<?php if(!empty(get_post_meta( get_the_ID(), 'meta-web-url', true ))){echo get_post_meta( get_the_ID(), 'meta-web-url', true );}?>"> Visit Website</a></p>
		</div>
	</div>
	<hr>

	<div class="row">
		<div class="col-sm-6">
		<?php
		if($this->options1['address']=='yes') :
		?>	
			<b><i class="fa fa-w fa-map-marker"></i> Address:</b>
			<p><?php echo get_post_meta( get_the_ID(), 'meta-location', true );?></p>
		<?php
		endif;
		if($this->options1['joined_date']=='yes') :
		?>	
			<b><i class="fa fa-w fa-calendar"></i> Joied Date:</b>
			<p><?php echo get_post_meta( get_the_ID(), 'meta-joined', true );?></p>
		<?php
		endif;
		?>
			<b><i class="fa fa-w fa-phone"></i> Phone No:</b>
			<p><?php echo get_post_meta( get_the_ID(), 'meta-phone-no', true );?></p>	
		</div>	
		<div class="col-sm-6">
			<b>Description:</b>
			<p><?php echo get_post_field('post_content', $post->ID);?></p>
		<?php
		if($this->options1['social_icon2']=='yes') :
		?>	
			<b>Social Sites:</b>
			<p>
		<?php	
			if(!empty(get_post_meta( get_the_ID(), 'meta-fb-url', true )[0])):
		?>
			<a href="<?php echo get_post_meta( get_the_ID(), 'meta-fb-url', true );?>">
				<i class="fa fa-facebook-square"></i>
			</a>
		<?php
			endif;
			if(!empty(get_post_meta( get_the_ID(), 'meta-twitter-url', true )[0])):
		?>
			<a href="<?php echo get_post_meta( get_the_ID(), 'meta-twitter-url', true );?>">
				<i class="fa fa-twitter-square"></i>
			</a>
		<?php
			endif;	
			if(!empty(get_post_meta( get_the_ID(), 'meta-linkedin-url', true )[0])):
		?>
			<a href="<?php echo get_post_meta( get_the_ID(), 'meta-linkedin-url', true );?>">
				<i class="fa fa-linkedin-square"></i>
			</a>
		<?php
			endif;
			if(!empty(get_post_meta( get_the_ID(), 'meta-gplus-url', true )[0])):
		?>
			<a href="<?php echo get_post_meta( get_the_ID(), 'meta-gplus-url', true );?>">
				<i class="fa fa-google-plus-square"></i>
			</a>
		<?php
			endif;
			if(!empty(get_post_meta( get_the_ID(), 'meta-pin-url', true )[0])):
		?>
			<a href="<?php echo get_post_meta( get_the_ID(), 'meta-pin-url', true );?>">
				<i class="fa fa-pinterest-square"></i>
			</a>
		<?php
			endif;
			if(!empty(get_post_meta( get_the_ID(), 'meta-inst-url', true )[0])):
		?>
			<a href="<?php echo get_post_meta( get_the_ID(), 'meta-inst-url', true );?>">
				<i class="fa fa-instagram"></i>
			</a>
		<?php
			endif;
			if(!empty(get_post_meta( get_the_ID(), 'meta-vimeo-url', true )[0])):
		?>
			<a href="<?php echo get_post_meta( get_the_ID(), 'meta-vimeo-url', true );?>">
				<i class="fa fa-vimeo-square"></i>
			</a>
		<?php
			endif;
			if(!empty(get_post_meta( get_the_ID(), 'meta-youtube-url', true )[0])):
		?>
			<a href="<?php echo get_post_meta( get_the_ID(), 'meta-youtube-url', true );?>">
				<i class="fa fa-youtube-square"></i>
			</a>
		<?php
			endif;
		?>
			</p>
		<?php		
		endif;
		?>
		</div>
	</div>	
	<hr>

	<div class="row">
		<div class="col-sm-12">
			<b><?php echo get_post_meta( get_the_ID(), 'meta-skill-title', true );?></b>
		<?php 
		$skills= get_post_meta( get_the_ID(), 'meta-skills', true );
		$skill_rates= get_post_meta( get_the_ID(), 'meta-skill-rates', true );
		if($this->options1['display_skills2']=='yes') :
		if(count($skills)>=1 && count($skill_rates)>=1):
		foreach($skills as $key=>$value): ?>		
		    <div class="new-me-skill-label-1"><?php echo $value;?></div>
		    <div class="new-me-skill-bar-1">
		    	<div class="new-me-skill-level-1" style="width: <?php echo $skill_rates[$key]*20;?>px"></div>
		    </div>
		<?php 
		endforeach;
		endif;
		endif;				
		?>
		</div>	
	</div>
</div>
</div>