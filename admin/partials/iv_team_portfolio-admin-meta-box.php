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
	

//var_dump ($iv_team_portfolio_stored_meta);	
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<style type="text/css">
	.slider-selection{background: #dbdbdb;}
</style>

<div class=" iv_total_team_bs">
<div class="container-fluid">

<!-- Start Additional Information -->

<form class="form" role="form" action="" method="post">	

<!-- Personal Information -->

<h2><b><?php _e( 'Personal Information', 'iv_team_portfolio' ); ?></b></h2><br>
	<div class="form-group row">
		<div class="input-group"> 
			<span class="input-group-addon" id="basic-addon1"><i class="fa fa-w fa-user"></i></span>
  			<input type="text" class="form-control" id="name" name="name" value="<?php if (isset($iv_team_portfolio_stored_meta['meta-name'])) {echo $iv_team_portfolio_stored_meta['meta-name'][0];} ?>" placeholder="Enter name" aria-describedby="basic-addon1">
		</div>
	</div>	
	<div class="form-group row">
		<div class="input-group"> 
			<span class="input-group-addon" id="basic-addon1"><i class="fa fa-w fa-calendar"></i></span>
  			<input type="text" class="form-control" id="joined" name="joined" value="<?php if (isset($iv_team_portfolio_stored_meta['meta-joined'])) {echo $iv_team_portfolio_stored_meta['meta-joined'][0];} ?>" placeholder="Enter joined date" aria-describedby="basic-addon1">
		</div>
	</div>	
	<div class="form-group row">
		<div class="input-group"> 
			<span class="input-group-addon" id="basic-addon1"><i class="fa fa-w fa-cog"></i></span>
  			<input type="text" class="form-control" id="position" name="position" value="<?php if (isset($iv_team_portfolio_stored_meta['meta-position'])) {echo $iv_team_portfolio_stored_meta['meta-position'][0];} ?>" placeholder="Enter position" aria-describedby="basic-addon1">
		</div>
	</div>	
	<div class="form-group row">
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1"><i class="fa fa-w fa-envelope"></i></span>
	 		<input type="email" class="form-control" id="email" name="email" value= "<?php if (isset($iv_team_portfolio_stored_meta['meta-email'])) {echo $iv_team_portfolio_stored_meta['meta-email'][0];} ?>" placeholder="Enter email" aria-describedby="basic-addon1">
		</div>
	</div>
	<div class="form-group row">
		<div class="input-group"> 
			<span class="input-group-addon" id="basic-addon1"><i class="fa fa-w fa-globe"></i></span> 
  			<input type="text" class="form-control" id="web-url" name="web-url" value="<?php if (isset($iv_team_portfolio_stored_meta['meta-web-url'])) {echo esc_url($iv_team_portfolio_stored_meta['meta-web-url'][0]);} ?>" placeholder="Enter Personal Website URL e.g. https://www.website.com" aria-describedby="basic-addon1">
		</div>
	</div>	
	<div class="form-group row">
		<div class="input-group"> 
			<span class="input-group-addon" id="basic-addon1"><i class="fa fa-w fa-phone"></i></span> 
  			<input type="text" class="form-control" id="phone-no" name="phone-no" value="<?php if (isset($iv_team_portfolio_stored_meta['meta-phone-no'])) {echo $iv_team_portfolio_stored_meta['meta-phone-no'][0];} ?>" placeholder="Enter Phone Number" aria-describedby="basic-addon1">
		</div>
	</div>
	<div class="form-group row">
		<div class="input-group"> 
			<span class="input-group-addon" id="basic-addon1"><i class="fa fa-w fa-map-marker"></i></span> 
  			<input type="text" class="form-control" id="location" name="location" value="<?php if (isset($iv_team_portfolio_stored_meta['meta-location'])) {echo $iv_team_portfolio_stored_meta['meta-location'][0];} ?>" placeholder="Enter Address" aria-describedby="basic-addon1">
		</div>
	</div>
	<div class="form-group row">
		<div class="input-group"> 
			<a href="#" id="insert_image" class="btn btn-default">Choose or Upload Image</a></i>
  		</div>
  		<div class="row single_image">
  		<div class="col-xs-6 col-md-3">
  			<input type="text" class="form-control image" id="image-url" name="image-url" value="<?php if (isset($iv_team_portfolio_stored_meta['meta-image-url'])) {echo esc_url($iv_team_portfolio_stored_meta['meta-image-url'][0]);} ?>" aria-describedby="basic-addon1">
  			<?php
  			if (!empty($iv_team_portfolio_stored_meta['meta-image-url']) && $iv_team_portfolio_stored_meta['meta-image-url'][0] !== "") :?>
  			<img src="<?php echo esc_url($iv_team_portfolio_stored_meta['meta-image-url'][0]);?>" id="img_url" class="img-thumbnail" height="100" width="150">  			
  			<?php endif; ?>	
  		</div>
  		</div>		
	</div>	

<hr>

<!-- Social Links -->

<h2><b><?php _e( 'Social Profile Links', 'iv_team_portfolio' ); ?></b></h2><br>

	<div class="form-group row">
		<div class="input-group"> 
			<span class="input-group-addon" id="basic-addon1"><i class="fa fa-w fa-facebook"></i></span>
  			<input type="text" class="form-control" id="fb-url" name="fb-url" value="<?php if (isset($iv_team_portfolio_stored_meta['meta-fb-url'])) {echo esc_url($iv_team_portfolio_stored_meta['meta-fb-url'][0]);} ?>" placeholder="Enter Facebook URL e.g. https://www.facebook.com/fb_id" aria-describedby="basic-addon1">
		</div>
	</div>	
	<div class="form-group row">
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1"><i class="fa fa-w fa-twitter"></i></span> 
  			<input type="text" class="form-control" id="twitter-url" name="twitter-url" value="<?php if (isset($iv_team_portfolio_stored_meta['meta-twitter-url'])) {echo esc_url($iv_team_portfolio_stored_meta['meta-twitter-url'][0]);} ?>" placeholder="Enter Twitter URL e.g. https://twitter.com/twitter_id" aria-describedby="basic-addon1">
		</div>
	</div>	
	<div class="form-group row">
		<div class="input-group"> 
			<span class="input-group-addon" id="basic-addon1"><i class="fa fa-w fa-linkedin"></i></span> 
  			<input type="text" class="form-control" id="linkedin-url" name="linkedin-url" value="<?php if (isset($iv_team_portfolio_stored_meta['meta-linkedin-url'])) {echo esc_url($iv_team_portfolio_stored_meta['meta-linkedin-url'][0]);} ?>" placeholder="Enter Linkedin URL e.g. https://www.linkedin.com/in/linkedin_id" aria-describedby="basic-addon1">
		</div>
	</div>	
	<div class="form-group row">
		<div class="input-group"> 
			<span class="input-group-addon" id="basic-addon1"><i class="fa fa-w fa-google-plus"></i></span> 
  			<input type="text" class="form-control" id="gplus-url" name="gplus-url" value="<?php if (isset($iv_team_portfolio_stored_meta['meta-gplus-url'])) {echo esc_url($iv_team_portfolio_stored_meta['meta-gplus-url'][0]);} ?>" placeholder="Enter Google Plus URL e.g. https://plus.google.com/google_plus_id" aria-describedby="basic-addon1">
		</div>
	</div>		
	<div class="form-group row">
		<div class="input-group"> 
			<span class="input-group-addon" id="basic-addon1"><i class="fa fa-w fa-instagram"></i></span> 
  			<input type="text" class="form-control" id="inst-url" name="inst-url" value="<?php if (isset($iv_team_portfolio_stored_meta['meta-inst-url'])) {echo esc_url($iv_team_portfolio_stored_meta['meta-inst-url'][0]);} ?>" placeholder="Enter Instagram URL e.g. https://instagram.com/inst_id" aria-describedby="basic-addon1">
		</div>
	</div>	
	<div class="form-group row">
		<div class="input-group"> 
			<span class="input-group-addon" id="basic-addon1"><i class="fa fa-w fa-pinterest-p"></i></span> 
  			<input type="text" class="form-control" id="pin-url" name="pin-url" value="<?php if (isset($iv_team_portfolio_stored_meta['meta-pin-url'])) {echo esc_url($iv_team_portfolio_stored_meta['meta-pin-url'][0]);} ?>" placeholder="Enter pinterest URL e.g. https://www.pinterest.com/pin_id" aria-describedby="basic-addon1">
		</div>
	</div>	
	<div class="form-group row">
		<div class="input-group"> 
			<span class="input-group-addon" id="basic-addon1"><i class="fa fa-w fa-vimeo"></i></span> 
  			<input type="text" class="form-control" id="vimeo-url" name="vimeo-url" value="<?php if (isset($iv_team_portfolio_stored_meta['meta-vimeo-url'])) {echo esc_url($iv_team_portfolio_stored_meta['meta-vimeo-url'][0]);} ?>" placeholder="Enter Vimeo URL e.g. https://vimeo.com/vimeo_id" aria-describedby="basic-addon1">
		</div>
	</div>	
	<div class="form-group row">
		<div class="input-group"> 
			<span class="input-group-addon" id="basic-addon1"><i class="fa fa-w fa-youtube"></i></span> 
  			<input type="text" class="form-control" id="youtube-url" name="youtube-url" value="<?php if (isset($iv_team_portfolio_stored_meta['meta-youtube-url'])) {echo esc_url($iv_team_portfolio_stored_meta['meta-youtube-url'][0]);} ?>" placeholder="Enter Youtube URL e.g. https://youtube.com/youtube_id" aria-describedby="basic-addon1">
		</div>
	</div>
<hr>

<!-- Attributes / Skills / Ratings -->

<h2><b><?php _e( 'Attributes / Skills / Ratings', 'iv_team_portfolio' ); ?></b></h2><br>
  	<div class="form-group row">
		<label class="control-label col-sm-2" for="skill-title">Title:</label>
		<div class="col-sm-10"> 
  			<input type="text" class="form-control" id="skill-title" name="skill-title" value="<?php if (isset($iv_team_portfolio_stored_meta['meta-skill-title'])) {echo $iv_team_portfolio_stored_meta['meta-skill-title'][0];} ?>" placeholder="Enter Skill Title">
		</div>
	</div>	
	
	<?php 
	if(is_array($iv_team_portfolio_stored_meta['meta-skills']) && is_array($iv_team_portfolio_stored_meta['meta-skill-rates'])):
		$user_skills=unserialize(reset($iv_team_portfolio_stored_meta['meta-skills']));
		$user_skills_rates=unserialize(reset($iv_team_portfolio_stored_meta['meta-skill-rates']));
		//var_dump($user_skills);
		//var_dump($user_skills_rates);
 
		foreach($user_skills as $key=>$value) :					
	?>

		<div class="form-group dynamic-rows">
		<div class="row dynamic">
			<label class="control-label col-sm-2" for="skills">Skill:</label>
			<div class="col-sm-4"> 
	  			<input type="text" class="form-control" id="skills" name="skills[]" value="<?php echo $value; ?>" placeholder="Title">
			</div>
			<div class="col-sm-4"> 
				<input type="text" class="form-control skill-rates" name="skill-rates[]" data-slider-min="0" data-slider-max="10" data-slider-step="1" data-slider-value="<?php echo $user_skills_rates[$key]; ?>" data-slider-orientation="horizontal">			
			</div>
			<div class= "col-sm-3">
				<input type="button" class="btn-insert btn btn-xs btn-info" value="Insert">
			    <input type="button" class="btn-delete btn-xs btn-danger btn hide" value="Delete">	
	    	</div>	
	    </div>
	    </div>
    
    <?php 
    	endforeach;
    else:
    ?>
    	<div class="form-group dynamic-rows">
		<div class="row dynamic">
			<label class="control-label col-sm-2" for="skills">Skill:</label>
			<div class="col-sm-4"> 
	  			<input type="text" class="form-control" id="skills" name="skills[]" value="<?php if (isset($iv_team_portfolio_stored_meta['meta-skills'])) {echo $iv_team_portfolio_stored_meta['meta-skills'][0];} ?>" placeholder="Title">
			</div>
			<div class="col-sm-4"> 
				<input type="text" class="form-control skill-rates" name="skill-rates[]" data-provide="slider" data-slider-min="0" data-slider-max="10" data-slider-step="1" data-slider-value="<?php if (isset($iv_team_portfolio_stored_meta['meta-skill-rates'])) {echo $iv_team_portfolio_stored_meta['mmeta-skill-rates'][0];} ?>" data-slider-orientation="horizontal">			
			</div>
			<div class= "col-sm-3">
				<input type="button" class="btn-insert btn btn-xs btn-info" value="Insert">
			    <input type="button" class="btn-delete btn-xs btn-danger btn hide" value="Delete">	
	    	</div>	
    	</div>
    	</div>
    <?php
	endif;
    ?>
<hr>

<!-- Multiple Images -->

 <h2><b><?php _e( 'Multiple Images', 'iv_team_portfolio' ); ?></b></h2><br>
	<div class="form-group row">
		<div class="input-group"> 
			<a href="#" class="btn btn-default" id="insert_images">Choose or Upload Images</a>
		</div>
		<div class="row image_container">		
	<?php	
	if(is_array($iv_team_portfolio_stored_meta['meta-image-urls'])) :
		$image_urls = array_filter(unserialize(reset($iv_team_portfolio_stored_meta['meta-image-urls'])));
		foreach($image_urls as $key=>$value) :
		if (!empty($iv_team_portfolio_stored_meta['meta-image-urls'])) :
	?>	
		<div class="col-xs-6 col-md-3">
			<input type="text" class="form-control image" name="image-urls[]" value="<?php echo $value; ?>" aria-describedby="basic-addon1">
			<button type="button" class="btn btn-xs remove" style="position: absolute; top: -5px; right: 60px"><i class="fa fa-minus-square" aria-hidden="true"></i></button>
			<img src="<?php echo $value;?>" class="img-thumbnail img_urls" height="100" width="150">
		</div>
	<?php
		endif; 
    	endforeach;
    ?>
		</div>
    <?php	
    else:
    	
    ?>	
		<!-- <div class="col-xs-6 col-md-3">
			<input type="text" class="form-control image" name="image-urls[]" value="<?php if (isset($iv_team_portfolio_stored_meta['meta-image-urls'])) {echo esc_url($iv_team_portfolio_stored_meta['meta-image-urls'][0]);} ?>" aria-describedby="basic-addon1">
			<button type="button" class="btn btn-xs remove" style="position: absolute; top: -5px; right: 60px"><i class="fa fa-minus-square" aria-hidden="true"></i></button>
			<img src="<?php echo esc_url($iv_team_portfolio_stored_meta['meta-image-urls'][0]);?>" class="img-thumbnail img_urls" height="100" width="150">
		</div> -->
	<?php
			
	endif;	
	?>		
	</div>	
 


</form>
</div>
</div>

