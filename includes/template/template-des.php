<div class="new-me-member-des-1">
	<?php if($this->options1['display_content']=='yes'){the_content();}?>
</div>
<div class="new-me-member-skills-wrapper-1">
	<?php 
	$skills= get_post_meta( get_the_ID(), 'meta-skills', true );
	$skill_rates= get_post_meta( get_the_ID(), 'meta-skill-rates', true );
	if($this->options1['display_skills']=='yes') :
	if(count($skills)>=1 && count($skill_rates)>=1):
	foreach($skills as $key=>$value): ?>		
	    <div class="new-me-skill-label-1"><?php echo $value;?></div>
	    <div class="new-me-skill-bar-1">
	    	<div class="new-me-skill-level-1" style="width: <?php echo $skill_rates[$key]*10;?>px"></div>
	    </div>
	<?php 
	endforeach;
	endif;
	endif;				
	?>
	<div class="new-me-member-social-1">
		<?php
		if(!empty($display_arr) && in_array('email', $display_arr)==true) :
			if(!empty(get_post_meta( get_the_ID(), 'meta-email', true )[0])):
			?>
			<a href="<?php if($this->options1['mail_to']=='yes') 
			{
				echo $this->hide_email(get_post_meta( get_the_ID(), 'meta-email', true ));
			}elseif($this->options1['mail_to']=='no') {
				echo get_post_meta( get_the_ID(), 'meta-email', true );
				}?>">
				<i class="fa fa-envelope"></i>
			</a>
		<?php
			endif;
		elseif(!empty($display_arr) && in_array('email', $display_arr)==false):	
		else: 
			if(!empty(get_post_meta( get_the_ID(), 'meta-email', true )[0])):
			?>
			<a href="<?php if($this->options1['mail_to']=='yes') 
			{
				echo $this->hide_email(get_post_meta( get_the_ID(), 'meta-email', true ));
			}elseif($this->options1['mail_to']=='no') {
				echo get_post_meta( get_the_ID(), 'meta-email', true );
				}?>">
				<i class="fa fa-envelope"></i>
			</a>
		<?php
			endif;	
		endif;
		if(!empty($display_arr) && in_array('phone_no', $display_arr)==true) :
			if(!empty(get_post_meta( get_the_ID(), 'meta-phone-no', true )[0])):
			?>
			<a href=<?php if($this->options1['tel_to']=='yes') {
				echo '"tel:'.get_post_meta( get_the_ID(), 'meta-phone-no', true).'"';
			}elseif($this->options1['tel_to']=='no') {
				echo '"#" data-toggle="tooltip" data-placement="top" title="'.get_post_meta( get_the_ID(), 'meta-phone-no', true).'"';
			}?>>
				<i class="fa fa-phone-square"></i>
			</a>
		<?php
			endif;
		elseif(!empty($display_arr) && in_array('phone_no', $display_arr)==false):
		else:
			if(!empty(get_post_meta( get_the_ID(), 'meta-phone-no', true )[0])):
			?>
			<a href=<?php if($this->options1['tel_to']=='yes') {
				echo '"tel:'.get_post_meta( get_the_ID(), 'meta-phone-no', true).'"';
			}elseif($this->options1['tel_to']=='no') {
				echo '"#" data-toggle="tooltip" data-placement="top" title="'.get_post_meta( get_the_ID(), 'meta-phone-no', true).'"';
			}?>>
				<i class="fa fa-phone-square"></i>
			</a>
		<?php
			endif;
		endif;
		if(!empty($display_arr) && in_array('website', $display_arr)==true):
			if(!empty(get_post_meta( get_the_ID(), 'meta-web-url', true )[0])):
			?>
			<a href="<?php echo get_post_meta( get_the_ID(), 'meta-web-url', true );?>">
				<i class="fa fa-globe"></i>
			</a>
			<?php
			endif;
		elseif(!empty($display_arr) && in_array('website', $display_arr)==false):
		else:
			if(!empty(get_post_meta( get_the_ID(), 'meta-web-url', true )[0])):
			?>
			<a href="<?php echo get_post_meta( get_the_ID(), 'meta-web-url', true );?>">
				<i class="fa fa-globe"></i>
			</a>
		<?php
			endif;
		endif;
		
		//display social icons
		if($this->options1['display_social_icon']=='yes') :
		if(!empty(get_post_meta( get_the_ID(), 'meta-fb-url', true )[0])):
			if(!empty($display_arr) && in_array('facebook', $display_arr)==true):
		?>
			<a href="<?php echo get_post_meta( get_the_ID(), 'meta-fb-url', true );?>">
				<i class="fa fa-facebook-square"></i>
			</a>
		<?php
			endif;
		endif;
		if(!empty(get_post_meta( get_the_ID(), 'meta-twitter-url', true )[0])):
			if(!empty($display_arr) && in_array('twitter', $display_arr)==true):
		?>
			<a href="<?php echo get_post_meta( get_the_ID(), 'meta-twitter-url', true );?>">
				<i class="fa fa-twitter-square"></i>
			</a>
		<?php
			endif;
		endif;					
		if(!empty(get_post_meta( get_the_ID(), 'meta-linkedin-url', true )[0])):
			if(!empty($display_arr) && in_array('linkedin', $display_arr)==true):
		?>
			<a href="<?php echo get_post_meta( get_the_ID(), 'meta-linkedin-url', true );?>">
				<i class="fa fa-linkedin-square"></i>
			</a>
		<?php
			endif;
		endif;
		if(!empty(get_post_meta( get_the_ID(), 'meta-gplus-url', true )[0])):
			if(!empty($display_arr) && in_array('gplus', $display_arr)==true):
		?>
		<a href="<?php echo get_post_meta( get_the_ID(), 'meta-gplus-url', true );?>">
			<i class="fa fa-google-plus-square"></i>
		</a>
		<?php
			endif;
		endif;
		if(!empty(get_post_meta( get_the_ID(), 'meta-pin-url', true )[0])):
			if(!empty($display_arr) && in_array('pinterest', $display_arr)==true):
		?>
			<a href="<?php echo get_post_meta( get_the_ID(), 'meta-pin-url', true );?>">
				<i class="fa fa-pinterest-square"></i>
			</a>
		<?php
			endif;
		endif;
		if(!empty(get_post_meta( get_the_ID(), 'meta-inst-url', true )[0])):
			if(!empty($display_arr) && in_array('instagram', $display_arr)==true):
		?>
			<a href="<?php echo get_post_meta( get_the_ID(), 'meta-inst-url', true );?>">
				<i class="fa fa-instagram"></i>
			</a>
		<?php
			endif;
		endif;
		if(!empty(get_post_meta( get_the_ID(), 'meta-vimeo-url', true )[0])):
			if(!empty($display_arr) && in_array('instagram', $display_arr)==true):
		?>
			<a href="<?php echo get_post_meta( get_the_ID(), 'meta-vimeo-url', true );?>">
				<i class="fa fa-vimeo-square"></i>
			</a>
		<?php
			endif;
		endif;
		if(!empty(get_post_meta( get_the_ID(), 'meta-youtube-url', true )[0])):
			if(!empty($display_arr) && in_array('instagram', $display_arr)==true):
		?>
			<a href="<?php echo get_post_meta( get_the_ID(), 'meta-youtube-url', true );?>">
				<i class="fa fa-youtube-square"></i>
			</a>
		<?php
			endif;
		endif;					
		endif;	
		?>
	</div>
</div>