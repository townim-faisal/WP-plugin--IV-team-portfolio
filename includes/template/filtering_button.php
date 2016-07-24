<!-- FILTERING -->

<div class="row"> 
<?php
if($template==""){
	if ($this->options1['template']=='filter_button') :?>
		<label class="control-label" for="filtering"></label>
		<div class="filters-button-group">
		<div class="btn-group btn-group-sm" role="group" aria-label="filtering">
			<button type="button" class="btn btn-default all">All</button>
		<?php
		if ( $members->have_posts() ) :
	    while ( $members->have_posts() ) :
	        $members->the_post();  
	    	$meta_position = get_post_meta( get_the_ID(), 'meta-position', true );
	    	$meta_positions[] = $meta_position;
	    	$positions[] = strtolower(str_replace(' ', '', $meta_position));
	    endwhile;
		wp_reset_postdata();	
		$positions = array_unique($positions);
		$meta_positions = array_unique($meta_positions);
		foreach($positions as $key=>$value) :    	
	    ?>
			<button type="button" class="btn btn-default" data-filter=".<?php echo $value;?>"><?php echo $meta_positions[$key];?></button>	
		<?php
		endforeach;    	
		endif;
		?>
		</div>
		</div>
	<?php
	endif;
	if($this->options1['template']=='filter_text') :?>
		<label class="control-label" for="filtering"></label>	
		<div class="filters-button-group3">
			<button type="button" class="btn btn-link all">All</button> 
		<?php
		if ( $members->have_posts() ) :
	    while ( $members->have_posts() ) :
	        $members->the_post();  
	    	$meta_position = get_post_meta( get_the_ID(), 'meta-position', true );
	    	$meta_positions[] = $meta_position;
	    	$positions[] = strtolower(str_replace(' ', '', $meta_position));
	    endwhile;
		wp_reset_postdata();	
		$positions = array_unique($positions);
		$meta_positions = array_unique($meta_positions);
		foreach($positions as $key=>$value) :    	
	    ?> 
			<button type="button" class="btn btn-link" data-filter=".<?php echo $value;?>"><?php echo $meta_positions[$key];?></button>	
		<?php	
		endforeach;
		endif;
		?>	
		</div>
<?php
	endif;
}elseif($template =='filter_button'){?>
		<label class="control-label" for="filtering"></label>
		<div class="filters-button-group">
		<div class="btn-group btn-group-sm" role="group" aria-label="filtering">
			<button type="button" class="btn btn-default all">All</button>
		<?php
		if ( $members->have_posts() ) :
	    while ( $members->have_posts() ) :
	        $members->the_post();  
	    	$meta_position = get_post_meta( get_the_ID(), 'meta-position', true );
	    	$meta_positions[] = $meta_position;
	    	$positions[] = strtolower(str_replace(' ', '', $meta_position));
	    endwhile;
		wp_reset_postdata();	
		$positions = array_unique($positions);
		$meta_positions = array_unique($meta_positions);
		foreach($positions as $key=>$value) :    	
	    ?>
			<button type="button" class="btn btn-default" data-filter=".<?php echo $value;?>"><?php echo $meta_positions[$key];?></button>	
		<?php
		endforeach;    	
		endif;
		?>
		</div>
		</div>
<?php	
}elseif($template=='filter_text') {?>
		<label class="control-label" for="filtering"></label>	
		<div class="filters-button-group3">
			<button type="button" class="btn btn-link all">All</button> 
		<?php
		if ( $members->have_posts() ) :
	    while ( $members->have_posts() ) :
	        $members->the_post();  
	    	$meta_position = get_post_meta( get_the_ID(), 'meta-position', true );
	    	$meta_positions[] = $meta_position;
	    	$positions[] = strtolower(str_replace(' ', '', $meta_position));
	    endwhile;
		wp_reset_postdata();	
		$positions = array_unique($positions);
		$meta_positions = array_unique($meta_positions);
		foreach($positions as $key=>$value) :    	
	    ?> 
			<button type="button" class="btn btn-link" data-filter=".<?php echo $value;?>"><?php echo $meta_positions[$key];?></button>	
		<?php	
		endforeach;
		endif;
		?>		
		</div>
<?php
}
?>	
</div>