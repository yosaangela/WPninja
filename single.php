<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package HeadLabNeo
 */

get_header(); ?>
			<div id="primary" class="content-area-full">
				<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'single_post' );

					//the_post_navigation();

				endwhile; // End of the loop.
				?>

				</main><!-- #main -->
			</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
