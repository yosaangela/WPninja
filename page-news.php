<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HeadLabNeo
 */

get_header(); ?>

<div class="news-section">
	<div class="container">
		<div class="row">

			    <?php 
				$args = array(
					'post_type' => 'post', 
				);
				$loop = new WP_Query( $args );
				if($loop->have_posts()) :
				while ( $loop->have_posts() ) : $loop->the_post();
					
			    ?>	
					<div class="news-item"><!-- parent -->
						<div class="news-item-image">
							<?php the_post_thumbnail();?>
							<div class="overlay">
								<h5><?php the_title(); ?></h5>
							</div> <!--  .overlay -->
						</div>
						<div class="news-item-content"> 
	
							<p><?php echo content(20); ?></p>
							<a class="right-arrow" href="<?php the_permalink(); ?>" ><span class="sr-only">Read more</span></a>
						</div>
						
					</div>
			
			<?php endwhile; ?>
			<?php else : ?>
				<?php esc_html_e('Sorry, we hav no post for now :)'); ?>

			<?php endif; ?>
		
		</div>
	</div>
</div>


<?php get_footer(); ?>

