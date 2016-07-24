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
print_r($args);

$members = new WP_Query( $args );
//var_dump($members);

?>
<style>
.new-me-team-member-1{
	display : block;
	width: 200px;
	margin-bottom: 5px;
}
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
	width: 100px;
	border: 0.5px solid #C0C0C0;
}
.new-me-skill-level-1{
	height:3px;  
	background: <?php echo '#'.$this->options1['main_color'] ;?>;
}

<?php echo $this->options1['custom_css'] ;?>		
</style>

<script>
(function( $ ) {
	$(document).ready(function(){
	    $('[data-toggle="tooltip"]').tooltip(); 
	    <?php echo $this->options1['custom_js'] ;?>	
	});
})( jQuery );	
</script>


<div class="iv_total_team_bs">
<div class ="container-fluid"> 
	<div class="row">		
		<?php
   		if ( $members->have_posts() ) :
        while ( $members->have_posts() ) :
            $members->the_post();         	        	
		?>	
		<?php
		if($coloumn=="2-columns") :?>
		<div class="new-me-team-member-1 col-sm-6">
		<?php elseif($coloumn=="1-column"): ?>
		<div class="new-me-team-member-1 col-sm-12">
		<?php elseif($coloumn=="3-columns"): ?>
		<div class="new-me-team-member-1 col-sm-4">
		<?php elseif($coloumn=="4-columns"): ?>
		<div class="new-me-team-member-1 col-sm-3">	
		<?php else : ?>
		<div class="new-me-team-member-1 col-sm-12">
		<?php 
		endif;
		?>
		<?php
		if($template==""):
			if($this->options1['template']=='template-1'):?>
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
			<?php
			endif;
			if($this->options1['template']=='template-2'):?>	
				<div class="col-sm-6 grid">						
					<?php		
					 include( plugin_dir_path( dirname( __FILE__ ) ) . 'template/template-image.php');
					?>		
				</div>	

				<div class="col-sm-6">
					<?php		
					 include( plugin_dir_path( dirname( __FILE__ ) ) . 'template/template-des.php');
					?>	
				</div>	
			<?php
			endif;
			if($this->options1['template']=='template-3'):?>	
				<div class="col-sm-6">
					<?php		
					 include( plugin_dir_path( dirname( __FILE__ ) ) . 'template/template-des.php');
					?>	
				</div>

				<div class="col-sm-6 grid">						
					<?php		
					 include( plugin_dir_path( dirname( __FILE__ ) ) . 'template/template-image.php');
					?>		
				</div>	
		<?php
			endif;
		else:
			if($template=='template-1'):?>
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
			<?php
			endif;
			if($template=='template-2'):?>	
				<div class="col-sm-6 grid">						
					<?php		
					 include( plugin_dir_path( dirname( __FILE__ ) ) . 'template/template-image.php');
					?>		
				</div>	

				<div class="col-sm-6">
					<?php		
					 include( plugin_dir_path( dirname( __FILE__ ) ) . 'template/template-des.php');
					?>	
				</div>	
			<?php
			endif;
			if($template=='template-3'):?>	
				<div class="col-sm-6">
					<?php		
					 include( plugin_dir_path( dirname( __FILE__ ) ) . 'template/template-des.php');
					?>	
				</div>

				<div class="col-sm-6 grid">						
					<?php		
					 include( plugin_dir_path( dirname( __FILE__ ) ) . 'template/template-image.php');
					?>		
				</div>	
			<?php
			endif;
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
