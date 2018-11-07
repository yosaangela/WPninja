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
	<div id="primary" class="content-area-full">
		<main class="single-about">
			<?php
			while(have_posts()) : the_post(); ?>
			<?php
			if ( has_post_thumbnail()): ?>
			<div class="page-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>
			
			<div class="about-container">
				<h2 class="about-title"><?php the_title(); ?></h2>
				<div class="about-content">
					<?php the_content(); ?>
				</div>
			</div> <!--  .about-container -->
			<?php
			endif;
			?>
			
		<?php endwhile; ?>

		</main><!-- #main-->
	</div><!-- #primary --> 


<?php get_footer(); ?>

