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

$groups= get_terms('iv_team_portfolio_group_position');

//var_dump($groups);
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="iv_total_team_bs">
<div class="container-fluid">
	<div class="row">
		<h3><?php echo __('Shortcode Generator', 'iv_team_portfolio');?></h3>
	</div>
	<div class="row">
		<form class="form col-sm-5 shortcode" role="form" action="" method="post">
			<h4><?php echo __('What entries do you want to display:', 'iv_team_portfolio');?></h4>
			<div class="form-group">
				<label for="groups"><?php echo __('Groups:', 'iv_team_portfolio');?></label>
			 	<select class="form-control" id="groups" name="groups" multiple>
	          		<option value="all">All</option>
	          		<?php
	          		foreach($groups as $group) :
	          		?>
	          		<option value="<?php echo $group->name;?>"><?php echo $group->name;?></option>
	          		<?php	
	          		endforeach;
	          		?>
	          	</select>
			</div>
			<div class="form-group">
				<label for="order_by"><?php echo __('Order By:', 'iv_team_portfolio');?></label>
			 	<select class="form-control" id="order_by" name="order_by">
	          		<option value="none">Default</option>
		            <option value="name">Name</option>
		            <option value="rand">Random</option>
		            <option value="ID">ID</option>
		            <option value="date">Date</option>
	          	</select>
			</div>
			<div class="form-group">
				<label for="order"><?php echo __('Order:', 'iv_team_portfolio');?></label>
			 	<select class="form-control" id="order" name="order">
	          		<option value="DESC">DESC</option>
		            <option value="ASC">ASC</option>	
	          	</select>
	          	<p><em><?php echo __('(Order is designated by Order By)', 'iv_team_portfolio');?></em></p>
			</div>
			<div class="form-group">
				<label for="no_entries_display"><?php echo __('Number of entries to display:', 'iv_team_portfolio');?></label>
			 	<input type="text"  class="form-control" id="no_entries_display" name="no_entries_display" value="0">
			 	<p><em><?php echo __('(Leave blank or 0 to display all)', 'iv_team_portfolio');?></em></p>
			</div>
			<!-- <div class="form-group">
		        <label for="pagination">Pagination</label>
			 	<select class="form-control" id="pagination" name="pagination">
	          		<option value="false">Inactive</option>
	          		<option value="true">Active</option>
	          	</select>	          		
			</div> -->
			<div class="form-group">
				<label for="post_id"><?php echo __('IDs to display:', 'iv_team_portfolio');?></label>
			 	<input type="text" class="form-control" id="post_id" name="post_id" value="">
			</div>
			<div class="form-group">
				<label for="post_id_exclude"><?php echo __('IDs to exclude:', 'iv_team_portfolio');?></label>
			 	<input type="text" class="form-control" id="post_id_exclude" name="post_id_excludetwitter" value="">
			</div>
			<h4><?php echo __('How you want it look like:', 'iv_team_portfolio');?></h4>	
			<div class="form-group">
				<label for="template"><?php echo __('Template:', 'iv_team_portfolio');?></label>
			 	<select class="form-control" id="template" name="template">
	          		<option value="">None</option>
		           	<option value="template-1">Grid(Image center)</option>
	                <option value="template-2">Grid(Image left & Content right)</option>
	                <option value="template-3">Grid(Image right & Content left)</option>
	                <option value="filter_button">Filtering with Button</option>id
	                <option value="filter_text">Filtering with Text</option>
	                <option value="carousel_dot">Carousel with Dots</option>
	                <option value="carousel_button">Carousol with Button</option>	          	
	            </select>
	          	<!-- <p><em></em></p> -->
			</div>
			<div class="form-group image_style">
				<label for="image_style"><?php echo __('Image Style:', 'iv_team_portfolio');?></label>
			 	<select class="form-control" id="image_style" name="image_style">
	          		<option value="effect-layla">effect-layla</option>
	          		<option value="effect-oscar">effect-oscar</option>
	          		<option value="effect-marley">effect-marley</option>
	          		<option value="effect-ruby">effect-ruby</option>
	          		<option value="effect-bubba">effect-bubba</option>
	          		<option value="effect-romeo">effect-romeo</option>
	          		<option value="effect-dexter">effect-dexter</option>
	          		<option value="effect-chico">effect-chico</option>
	          		<option value="effect-selena">effect-selena</option>
	          		<option value="effect-goliath">effect-goliath</option>
	          		<option value="effect-julia">effect-julia</option>
	          		<option value="effect-apollo">effect-apollo</option>
	          		<option value="effect-steve">effect-steve</option>
	          		<option value="effect-ming">effect-ming</option>
	          		<option value="effect-lexi">effect-lexi</option>
	          		<option value="effect-duke">effect-duke</option>
	          	</select>
			</div>
			<div class="form-group coloumns">
				<label for="coloumns"><?php echo __('No of coloumns:', 'iv_team_portfolio');?></label>
			 	<select class="form-control" id="coloumns" name="coloumns">
		            <option value="1-column">1</option>
		            <option value="2-columns">2</option>
		            <option value="3-columns">3</option>
		            <option value="4-columns">4</option>		            
	          	</select>
	          	<!-- <p><em></em></p> -->
			</div>
			<div class="form-group animateIn">
				<label for="animateIn"><?php echo __('Animate In:', 'iv_team_portfolio');?></label>
			 	<select class="form-control" id="animateIn" name="animateIn">
		            <option value="fadeIn">fadeIn</option>
		            <option value="fadeInDown">fadeInDown</option>
		            <option value="fadeInUp">fadeInUp</option>
		            <option value="slideInDown">slideInDown</option>
		            <option value="slideInUp">slideInUp</option>
		            <option value="flip">flip</option>
		            <option value="flipInX">flipInX</option>
		            <option value="flipInY">flipInY</option>
		            <option value="bounceIn">bounceIn</option>
		            <option value="bounceInDown">bounceInDown</option>
		            <option value="bounceInUp">bounceInUp</option>
		            <option value="rotateIn">rotateIn</option>
		            <option value="rotateInDownLeft">rotateInDownLeft</option>
		            <option value="rotateInDownRight">rotateInDownRight</option>
		            <option value="rollIn">rollIn</option>
		            <option value="zoomIn">zoomIn</option>
		            <option value="zoomInDown">zoomInDown</option>
		            <option value="zoomInUp">zoomInUp</option>		            
	          	</select>
	          	<!-- <p><em></em></p>-->		
			</div>
			<div class="form-group animateOut1">
				<label for="animateOut"><?php echo __('Animate Out:', 'iv_team_portfolio');?></label>
			 	<select class="form-control" id="animateOut" name="animateOut">
		            <<option value="fadeOut">fadeOut</option>
		            <option value="fadeOutDown">fadeOutDown</option>
		            <option value="fadeOutUp">fadeOutUp</option>
		            <option value="slideOutDown">slideOutDown</option>
		            <option value="slideOutUp">slideOutUp</option>
		            <option value="flip">flip</option>
		            <option value="flipOutX">flipOutX</option>
		            <option value="flipOutY">flipOutY</option>
		            <option value="bounceOut">bounceOut</option>
		            <option value="bounceOutDown">bounceOutDown</option>
		            <option value="bounceOutUp">bounceOutUp</option>
		            <option value="rotateOut">rotateOut</option>
		            <option value="rotateOutDownLeft">rotateOutDownLeft</option>
		            <option value="rotateOutDownRight">rotateOutDownRight</option>
		            <option value="rollOut">rollOut</option>
		            <option value="zoomOut">zoomOut</option>
		            <option value="zoomOutDown">zoomOutDown</option>
		            <option value="zoomOutUp">zoomOutUp</option>				            
	          	</select>
          		<!-- <p><em></em></p> -->
			</div>
			<h4><?php echo __('What informations do you want to display:', 'iv_team_portfolio');?></h4>	
			<div class="form-group">				 
			    <div class="checkbox">
			        <label class="checkbox">
			          <input type="checkbox" name="name" id="name"> <?php echo __('Name', 'iv_team_portfolio');?>
			        </label>
			        <label class="checkbox">
			          <input type="checkbox" name="image" id="image"> <?php echo __('Image', 'iv_team_portfolio');?>
			        </label>			
			        <label class="checkbox">
			          <input type="checkbox" name="position" id="position"> <?php echo __('Position', 'iv_team_portfolio');?>
			        </label>
			        <label class="checkbox">
			          <input type="checkbox" name="email" id="email"> <?php echo __('Email', 'iv_team_portfolio');?>
			        </label>
			        <label class="checkbox">
			          <input type="checkbox" name="phone_no" id="phone_no"> <?php echo __('Phone No', 'iv_team_portfolio');?>
			        </label>
			        <label class="checkbox">
			          <input type="checkbox" name="per_web" id="per_web"> <?php echo __('Personal website', 'iv_team_portfolio');?>
			        </label>
			        <label class="checkbox">
			          <input type="checkbox" name="facebook" id="facebook"> <?php echo __('Facebook', 'iv_team_portfolio');?>
			        </label>
			        <label class="checkbox">
			          <input type="checkbox" name="twitter" id="twitter"> <?php echo __('Twitter', 'iv_team_portfolio');?>
			        </label>
			        <label class="checkbox">
			          <input type="checkbox" name="linkedin" id="linkedin"> <?php echo __('Linkedin', 'iv_team_portfolio');?>
			        </label>
			        <label class="checkbox">
			          <input type="checkbox" name="gplus" id="gplus"> <?php echo __('Google plus', 'iv_team_portfolio');?>
			        </label>
			        <label class="checkbox">
			          <input type="checkbox" name="pinterest" id="pinterest"> <?php echo __('Pinterest', 'iv_team_portfolio');?>
			        </label>
			        <label class="checkbox">
			          <input type="checkbox" name="instagram" id="instagram"> <?php echo __('Instagram', 'iv_team_portfolio');?>
			        </label>
			        <label class="checkbox">
			          <input type="checkbox" name="vimeo" id="vimeo"> <?php echo __('Vimeo', 'iv_team_portfolio');?>
			        </label>
			        <label class="checkbox">
			          <input type="checkbox" name="youtube" id="youtube"> <?php echo __('Youtube', 'iv_team_portfolio');?>
			        </label>
			    </div>			    
			</div>	
			<div class="form-group">
				<label for="sin_page_link"><?php echo __('Single Page Link:', 'iv_team_portfolio');?></label>
			 	<select class="form-control" id="sin_page_link" name="sin_page_link">
	          		<option value="inactive">Inactive</option>
	          		<option value="active">Active</option>
	          	</select>
	          	<p><em><?php echo __('Only considered if single page is active in settings', 'iv_team_portfolio');?></em></p>
			</div>

			
		</form>

		<div class="col-sm-7">
			<div class="form-group">
				<label for="shortcode"><h3><?php echo __('Shortcode', 'iv_team_portfolio');?></h3></label>
				<div style="background: #D7E0EA">
				<p><b><i><?php echo __('Use this shortcode:', 'iv_team_portfolio');?></i></b></p>
				<div id="shortcode" style="background: #84dfed; margin: 0px 10px;"></div>
				<br>
				<p><b><i><?php echo __('Use this PHP function:', 'iv_team_portfolio');?></i></b></p>
				<div id="php_shortcode" style="background: #84dfed; margin: 0px 10px;"></div>
				<br>
				</div>
			</div>
			<a class="btn btn-primary" role="button" id="show_prev"><?php echo __('Preview', 'iv_team_portfolio');?></a>
			<input type="hidden" name="shrt" id="shrt" value="">
			<!-- <input type="button" class="btn btn-primary" id="iv_team_portfolio_save_shortcode" name="iv_team_portfolio_save_shortcode" value="Save Shortcode"></input> -->			
		</div>
	</div>
</div>
</div>
