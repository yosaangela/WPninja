
<div class="home-projects">
<!-- what i meant here just want to show the thumbnail. but then its error -->
	<?php 
		$args = array('post_type' => 'project', 'posts_per_page' => 7);

		// the query
		$the_query = new WP_Query( $args ); ?>

		<?php if ( $the_query->have_posts() ) : ?>

			<a class="home-project" href="#ACF-url">
				<h2>ACF title</h2>
			</a>

			<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<a class="home-project" href="<?php the_permalink(); ?>" style="background-image: url(<?php echo get_post_image($post->ID); ?>);">
				<h2><?php the_title(); ?></h2>
			</a>

			<?php endwhile; ?>
			<!-- end of the loop -->

			<!-- pagination here -->

			<?php wp_reset_postdata(); ?>

		<?php else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
</div><!--.kolom -->


