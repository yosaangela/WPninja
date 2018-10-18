<div class="container-fluid">	
	<div class="row">	
	<div id="telo" class="kolom">
		<?php 
			//the query
			$args = array('post_type' => 'project', 'posts_per_page' => 6);

			$the_query = new WP_Query( $args ); ?>

			<?php if ( $the_query->have_posts() ) : ?>

				<!-- the loop -->
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					<div class="home-project">
						<?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?>
					</div>

				 <?php endwhile; ?>
				<!-- end of the loop -->

				<!-- pagination here -->

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
	</div><!--.row -->
</div><!--  .container -->
</div>

<?php get_footer(); ?>
