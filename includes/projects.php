
<div class="home-projects">
	<?php 
		$args = array('post_type' => 'project', 'posts_per_page' => 7);
		$the_query = new WP_Query( $args ); ?>

	<?php if ( $the_query->have_posts() ) : ?>

		<a href="#" class="home-project">
			<h2>ACF title</h2> 
		</a>

		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<a class="home-project" href="<?php the_permalink(); ?>" style="background-image: url(<?php echo get_post_image($post->ID); ?>);">
			<h2><?php the_title(); ?></h2>
		</a>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>

	<?php else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
</div><!--.kolom -->


