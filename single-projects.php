<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package HeadLabNeo
 */

get_header(); ?>
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
	<h1>hai its single</h1>
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'projects' );

					the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

				</main><!-- #main -->
			</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

