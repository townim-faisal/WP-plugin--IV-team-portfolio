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

//var_dump(get_option('iv_team_portfolio_setting_options'));
extract(get_option('iv_team_portfolio_setting_options'));

?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class=" iv_total_team_bs ">
<div class="container-fluid">
	<div class="notice notice-success row">
        <p><b><?php _e( 'New Settings are saved', 'iv_team_portfolio' ); ?></b></p>
    </div>
	<!-- START TEAM SETTINGS -->
	<form class="form" role="form" action="" method="post">
	<table class="table table-bordered" style="background-color: white">	
		<thead>
		<tr><th>
			<h2><?php echo __('Team Settings', 'iv_team_portfolio');?></h2>
		</th></tr>
		</thead>
		<tbody>
		<tr><td>
			<div class="form-group col-sm-4">
				<label for="template"><?php echo __('Template:', 'iv_team_portfolio');?></label>				
			 	<select class="form-control" id="template" name="template">
	          		<option value="template-1" <?php echo 'template-1' == esc_attr($template) ? 'selected=selected' : ''; ?>>Grid(Image center)</option>
	                <option value="template-2" <?php echo 'template-2' == esc_attr($template) ? 'selected=selected' : ''; ?>>Grid(Image left & Content right)</option>
	                <option value="template-3" <?php echo 'template-3' == esc_attr($template) ? 'selected=selected' : ''; ?>>Grid(Image right & Content left)</option>
	                <option value="filter_button" <?php echo 'filter_button' == esc_attr($template) ? 'selected=selected' : ''; ?>>Filtering with Button</option>
	                <option value="filter_text" <?php echo 'filter_text' == esc_attr($template) ? 'selected=selected' : ''; ?>>Filtering with Text</option>
	                <option value="carousel_dot" <?php echo 'carousel_dot' == esc_attr($template) ? 'selected=selected' : ''; ?>>Carousel with Dots</option>
	                <option value="carousel_button" <?php echo 'carousel_button' == esc_attr($template) ? 'selected=selected' : ''; ?>>Carousol with Button</option>
	          	</select>				
			</div>
			<!-- <div class="form-group col-sm-4">
				<label for="image_style">Image Style:</label>
			 	<select class="form-control" id="image_style" name="image_style">
	          		<option value="effect-layla" <?php echo 'effect-layla' == esc_attr($image_style) ? 'selected=selected' : ''; ?>>effect-layla</option>
	          		<option value="effect-oscar" <?php echo 'effect-oscar' == esc_attr($image_style) ? 'selected=selected' : ''; ?>>effect-oscar</option>
	          		<option value="effect-marley" <?php echo 'effect-marley' == esc_attr($image_style) ? 'selected=selected' : ''; ?>>effect-marley</option>
	          		<option value="effect-ruby" <?php echo 'effect-ruby' == esc_attr($image_style) ? 'selected=selected' : ''; ?>>effect-ruby</option>
	          		<option value="effect-bubba" <?php echo 'effect-bubba' == esc_attr($image_style) ? 'selected=selected' : ''; ?>>effect-bubba</option>
	          		<option value="effect-romeo" <?php echo 'effect-romeo' == esc_attr($image_style) ? 'selected=selected' : ''; ?>>effect-romeo</option>
	          		<option value="effect-dexter" <?php echo 'effect-dexter' == esc_attr($image_style) ? 'selected=selected' : ''; ?>>effect-dexter</option>
	          		<option value="effect-chico" <?php echo 'effect-chico' == esc_attr($image_style) ? 'selected=selected' : ''; ?>>effect-chico</option>
	          		<option value="effect-selena" <?php echo 'effect-selena' == esc_attr($image_style) ? 'selected=selected' : ''; ?>>effect-selena</option>
	          		<option value="effect-goliath" <?php echo 'effect-goliath' == esc_attr($image_style) ? 'selected=selected' : ''; ?>>effect-goliath</option>
	          		<option value="effect-julia" <?php echo 'effect-julia' == esc_attr($image_style) ? 'selected=selected' : ''; ?>>effect-julia</option>
	          		<option value="effect-apollo" <?php echo 'effect-apollo' == esc_attr($image_style) ? 'selected=selected' : ''; ?>>effect-apollo</option>
	          		<option value="effect-steve" <?php echo 'effect-steve' == esc_attr($image_style) ? 'selected=selected' : ''; ?>>effect-steve</option>
	          		<option value="effect-ming" <?php echo 'effect-ming' == esc_attr($image_style) ? 'selected=selected' : ''; ?>>effect-ming</option>
	          		<option value="effect-lexi" <?php echo 'effect-lexi' == esc_attr($image_style) ? 'selected=selected' : ''; ?>>effect-lexi</option>
	          		<option value="effect-duke" <?php echo 'effect-duke' == esc_attr($image_style) ? 'selected=selected' : ''; ?>>effect-duke</option>
	          	</select>
			</div> -->
			<!-- <div class="form-group col-sm-4">
				<label for="display_name">Display Name:</label>
			 	<select class="form-control" id="display_name" name="display_name">
	          		<option value="yes" <?php echo 'yes' == esc_attr($display_name) ? 'selected=selected' : ''; ?>>Yes</option>
	          		<option value="no" <?php echo 'no' == esc_attr($display_name) ? 'selected=selected' : ''; ?>>No</option>
	          	</select>
			</div> -->
			<div class="form-group col-sm-4">
				<label for="display_content"><?php echo __('Display Content:', 'iv_team_portfolio');?></label>
			 	<select class="form-control" id="display_content" name="display_content">
	          		<option value="yes" <?php echo 'yes' == esc_attr($display_content) ? 'selected=selected' : ''; ?>>Yes</option>
	          		<option value="no" <?php echo 'no' == esc_attr($display_content) ? 'selected=selected' : ''; ?>>No</option>
	          	</select>
			</div>
			<div class="form-group col-sm-4">
				<label for="display_skills"><?php echo __('Display Skills Bar:', 'iv_team_portfolio');?></label>
			 	<select class="form-control" id="display_skills" name="display_skills">
	          		<option value="yes" <?php echo 'yes' == esc_attr($display_skills) ? 'selected=selected' : ''; ?>>Yes</option>
	          		<option value="no" <?php echo 'no' == esc_attr($display_skills) ? 'selected=selected' : ''; ?>>No</option>
	          	</select>
			</div>
			<div class="form-group col-sm-4">
				<label for="display_social_icon"><?php echo __('Display Social Icons:', 'iv_team_portfolio');?></label>
			 	<select class="form-control" id="display_social_icon" name="display_social_icon">
	          		<option value="yes" <?php echo 'yes' == esc_attr($display_social_icon) ? 'selected=selected' : ''; ?>>Yes</option>
	          		<option value="no" <?php echo 'no' == esc_attr($display_social_icon) ? 'selected=selected' : ''; ?>>No</option>
	          	</select>
			</div>
			<div class="form-group col-sm-4">
				<label for="icons_style"><?php echo __('Icons Style:', 'iv_team_portfolio');?></label>
			 	<select class="form-control" id="icons_style" name="icons_style">
	          		<option value="" <?php echo '' == esc_attr($icons_style) ? 'selected=selected' : ''; ?>>1</option>
	          		<option value="no" <?php echo 'no' == esc_attr($icons_style) ? 'selected=selected' : ''; ?>>No</option>
	          	</select>
			</div>
			<div class="form-group col-sm-4">
				<label for="main_color"><?php echo __('Main Color:', 'iv_team_portfolio');?></label>
			 	<input type="text" class="form-control jscolor" id="main_color" name="main_color" value="<?php echo esc_attr($main_color); ?>">
			</div>			
			<div class="form-group col-sm-4">
				<label for="name_font_size"><?php echo __('Name Font Size:', 'iv_team_portfolio');?></label>
			 	<input type="text"  class="form-control " id="name_font_size" name="name_font_size" placeholder="Default size 14" value="<?php echo esc_attr($name_font_size); ?>" >
			</div>
			<div class="form-group col-sm-4">
				<label for="content_font_size"><?php echo __('Content Font Size:', 'iv_team_portfolio');?></label>
			 	<input type="text"  class="form-control " id="content_font_size" name="content_font_size" placeholder="Default size 15" value="<?php echo esc_attr($content_font_size); ?>" >
			</div>
			<div class="form-group col-sm-4">
				<label for="image_width"><?php echo __('Image Width:', 'iv_team_portfolio');?></label>
			 	<input type="text"  class="form-control " id="image_width" name="image_width" placeholder="Default size 480" value="<?php echo esc_attr($image_width); ?>" >
			</div>
			<div class="form-group col-sm-4">
				<label for="image_height"><?php echo __('Image Height:', 'iv_team_portfolio');?></label>
			 	<input type="text"  class="form-control " id="image_height" name="image_height" placeholder="Default size 360" value="<?php echo esc_attr($image_height); ?>" >
			</div>			
			<div class="form-group col-sm-4">
				<label for="single_page_activation"><?php echo __('Single Page Activation:', 'iv_team_portfolio');?></label>
			 	<select class="form-control" id="single_page_activation" name="single_page_activation">
	          		<option value="yes" <?php echo 'yes' == esc_attr($single_page_activation) ? 'selected=selected' : ''; ?>>Yes</option>
	          		<option value="no" <?php echo 'no' == esc_attr($single_page_activation) ? 'selected=selected' : ''; ?>>No</option>
	          	</select>
			</div>
			<div class="form-group col-sm-4">
				<label for="exclude_from_search"><?php echo __('Exclude From Search:', 'iv_team_portfolio');?></label>
			 	<select class="form-control" id="exclude_from_search" name="exclude_from_search">
	          		<option value="yes" <?php echo 'yes' == esc_attr($exclude_from_search) ? 'selected=selected' : ''; ?>>Yes</option>
	          		<option value="no" <?php echo 'no' == esc_attr($exclude_from_search) ? 'selected=selected' : ''; ?>>No</option>
	          	</select>
			</div>
			<div class="form-group col-sm-4">
				<label for="mail_to"><?php echo __('Mail To - Active:', 'iv_team_portfolio');?></label>
			 	<select class="form-control" id="mail_to" name="mail_to">
	          		<option value="yes" <?php echo 'yes' == esc_attr($mail_to) ? 'selected=selected' : ''; ?>>Yes</option>
	          		<option value="no" <?php echo 'no' == esc_attr($mail_to) ? 'selected=selected' : ''; ?>>No</option>
	          	</select>
			</div>
			<div class="form-group col-sm-4">
				<label for="tel_to"><?php echo __('Tel - Active:', 'iv_team_portfolio');?></label>
			 	<select class="form-control" id="tel_to" name="tel_to">
	          		<option value="yes" <?php echo 'yes' == esc_attr($tel_to) ? 'selected=selected' : ''; ?>>Yes</option>
	          		<option value="no" <?php echo 'no' == esc_attr($tel_to) ? 'selected=selected' : ''; ?>>No</option>
	          	</select>
			</div>
			<div class="form-group col-sm-4">
				<label for="custom_css"><?php echo __('Custom CSS:', 'iv_team_portfolio');?></label>
			 	<textarea class="form-control" rows="2" id="custom_css" name="custom_css" value="<?php echo esc_attr($custom_css); ?>" ></textarea>
			</div>
			<div class="form-group col-sm-4">
				<label for="custom_js"><?php echo __('Custom JS:', 'iv_team_portfolio');?></label>
			 	<textarea class="form-control" rows="2" id="custom_js" name="custom_js" value="<?php echo esc_attr($custom_js); ?>" ></textarea>
			</div>
		</td></tr>
		</tbody>
	</table>	

	<!-- END TEAM SETTINGS -->


	<!-- START Feature Names -->
	<table class="table table-bordered" style="background-color: white">
		<thead>
		<tr><th>
			<h2><?php echo __('Feature Names', 'iv_team_portfolio');?></h2>
		</th></tr>
		</thead>
		<tbody>
		<tr><td>
			<div class="form-group col-sm-4">
				<label for="sin_name"><?php echo __('Singular Name:', 'iv_team_portfolio');?></label>
			 	<input type="text"  class="form-control " id="sin_name" name="sin_name" placeholder="Default is Member" value="<?php echo esc_attr($sin_name); ?>" >
			</div>
			<div class="form-group col-sm-4">
				<label for="plu_name"><?php echo __('Plural Name:', 'iv_team_portfolio');?></label>
			 	<input type=text"  class="form-control " id="plu_name" name="plu_name" placeholder="Default is Team Portfolio" value="<?php echo esc_attr($plu_name); ?>" >
			</div>
			<div class="form-group col-sm-4">
				<label for="category"><?php echo __('Category:', 'iv_team_portfolio');?></label>
			 	<input type="text"  class="form-control " id="category" name="category" placeholder="Default is Groups" value="<?php echo esc_attr($category); ?>" >
			</div>
		</td></tr>
		</tbody>
	</table>
	<!-- END Feature names -->



	<!-- START Single Member View Settings -->
	<table class="table table-bordered" style="background-color: white">
		<thead>
		<tr><th>
			<h2><?php echo __('Single Member View Settings', 'iv_team_portfolio');?></h2>
		</th></tr>
		</thead>
		<tbody>
		<tr><td>
			<!-- <div class="form-group row">
				<label class="control-label col-sm-3" for="template2">Template:</label>
				<div class="col-sm-4">
			 		<select class="form-control" id="template2" name="template2">
	          		<option value="standard">Theme Default (single post)</option>
                    <option value="disable"></option>                            
                    <option ="" value="custom" >Custom Template - ( Pro Version )</option>
                    <option ="">Card (pop-up) - ( pro version )</option>
                    <option ="">Side Panel - ( pro version )</option>
	          		</select>
				</div>
			</div> -->
			<div class="form-group col-sm-4">
				<label for="multiple_images"><?php echo __('Display Multiple Images in Carousel:', 'iv_team_portfolio');?></label>
			 	<select class="form-control" id="multiple_images" name="multiple_images">
	          		<option value="yes" <?php echo 'yes' == esc_attr($multiple_images) ? 'selected=selected' : ''; ?>>Yes</option>
          			<option value="no" <?php echo 'no' == esc_attr($multiple_images) ? 'selected=selected' : ''; ?>>No</option>
	          	</select>
			</div>
			<div class="form-group col-sm-4">
				<label for="joined_date"><?php echo __('Display Joined Date:', 'iv_team_portfolio');?></label>
			 	<select class="form-control" id="joined_date" name="joined_date">
	          		<option value="yes" <?php echo 'yes' == esc_attr($joined_date) ? 'selected=selected' : ''; ?>>Yes</option>
          			<option value="no" <?php echo 'no' == esc_attr($joined_date) ? 'selected=selected' : ''; ?>>No</option>
	          	</select>
			</div>
			<div class="form-group col-sm-4">
				<label for="address"><?php echo __('Display Address:', 'iv_team_portfolio');?></label>
			 	<select class="form-control" id="address" name="address">
	          		<option value="yes" <?php echo 'yes' == esc_attr($address) ? 'selected=selected' : ''; ?>>Yes</option>
          			<option value="no" <?php echo 'no' == esc_attr($address) ? 'selected=selected' : ''; ?>>No</option>
	          	</select>
			</div>
			<div class="form-group col-sm-4">
				<label for="social_icon2"><?php echo __('Display Social Icons:', 'iv_team_portfolio');?></label>
			 	<select class="form-control" id="social_icon2" name="social_icon2">
	          		<option value="yes" <?php echo 'yes' == esc_attr($social_icon2) ? 'selected=selected' : ''; ?>>Yes</option>
          			<option value="no" <?php echo 'no' == esc_attr($social_icon2) ? 'selected=selected' : ''; ?>>No</option>
	          	</select>
			</div>
			<div class="form-group col-sm-4">
				<label for="display_skills2"><?php echo __('Display Skills Bar:', 'iv_team_portfolio');?></label>
			 	<select class="form-control" id="display_skills2" name="display_skills2">
	          		<option value="yes" <?php echo 'yes' == esc_attr($display_skills2) ? 'selected=selected' : ''; ?>>Yes</option>
	          		<option value="no" <?php echo 'no' == esc_attr($display_skills2) ? 'selected=selected' : ''; ?>>No</option>
	          	</select>
			</div>
		</td></tr>
		</tbody>
	</table>
	
		<input type="button" class="btn btn-primary" id="iv_team_portfolio_update" name="iv_team_portfolio_submit" value="Save"></input>
		
	</form>

</div>
</div>
