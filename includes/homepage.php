<div class="about-section">
	<div class="clearfix">
		<h3>
			<?php
			if( have_rows('selling_points', 'option') ):

			 	// loop through the rows of data
			    while ( have_rows('selling_points', 'option') ) : the_row(); ?>

			      <span><?php the_sub_field('selling__point__text', 'option');?></span>  

			   <?php endwhile;
			else :
			    // no rows found
			endif;?>

		</h3> 
		<div class="box-info">
			<p><?php echo get_field('product_description', 'option'); ?>
			</p>
		</div>
		<div class="end-of-about-section"><!-- be more specific if you dont't want to reuse class -->
			<a href=".flip-box"><h2 class="more">Muller</h2></a>
			<a >Less meer</a>
		</div>
	</div>

	<!-- here goes rest of section -->
</div>
