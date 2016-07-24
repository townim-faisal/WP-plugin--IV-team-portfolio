<figure class="<?php echo $image_style;?>">
<?php if(!empty($display_arr) && in_array('image', $display_arr)==true):?>
	<img src="<?php echo get_post_meta( get_the_ID(), 'meta-image-url', true );?>">
<?php elseif(!empty($display_arr) && in_array('image', $display_arr)==false) : ?>		
	<img src="">
<?php else: ?>
	<img src="<?php echo get_post_meta( get_the_ID(), 'meta-image-url', true );?>">
<?php endif; ?>
<figcaption>
<div>
	<h2>
	<?php 
 	switch ($sin_page_link) {
 		case "inactive" :
 		if(!empty($display_arr) && in_array('name', $display_arr)==true){
 			echo get_post_meta( get_the_ID(), 'meta-name', true );
 		}elseif(!empty($display_arr) && in_array('name', $display_arr)==false){
		}else{
			echo get_post_meta( get_the_ID(), 'meta-name', true );
		}
 		break;

 		case "active" :
 		if(!empty($display_arr) && in_array('name', $display_arr)==true){
 	?>
 		<a href="<?php the_permalink();?>" style="text-decoration: none;"><?php echo get_post_meta( get_the_ID(), 'meta-name', true );?></a>
 	<?php
 		}elseif(!empty($display_arr) && in_array('name', $display_arr)==false){
		}else{
	?>
 		<a href="<?php the_permalink();?>" style="text-decoration: none;"><?php echo get_post_meta( get_the_ID(), 'meta-name', true );?></a>
 	<?php
		}
 		break;

 		default:
 		if(!empty($display_arr) && in_array('name', $display_arr)==true){
 			echo get_post_meta( get_the_ID(), 'meta-name', true );
 		}elseif(!empty($display_arr) && in_array('name', $display_arr)==false){
		}else{
			echo get_post_meta( get_the_ID(), 'meta-name', true );
		}
 	}					 	
 	?>
	</h2>
	<p>
	<?php 
	if(!empty($display_arr) && in_array('position', $display_arr)==true){
		echo get_post_meta( get_the_ID(), 'meta-position', true );
	}elseif(!empty($display_arr) && in_array('position', $display_arr)==false){
	}else{
		echo get_post_meta( get_the_ID(), 'meta-position', true );
	}		
	?>
	</p>
</div>					
</figcaption>	
</figure>