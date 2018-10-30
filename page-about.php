<?php
/**
 * Template Name: page about
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

	<div id="primary" class="content-area">
		<main id="main" class="single-page" role="main">
			<?php

			while(have_posts()) : the_post(); ?>

			<span><?php the_title(); ?></span>
			
			<?php
			if ( has_post_thumbnail()): ?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!--  .post-thumbnail -->
			<?php 
			the_content();
			endif;
			?>
			
		<?php endwhile; ?>

		</main><!-- #main-->
	</div><!-- #primary --> 

<?php get_footer(); ?>

