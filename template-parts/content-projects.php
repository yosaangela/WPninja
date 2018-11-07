<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package stanleywp
 */
 get_header(); 
 ?>

<div id="primary" class="content-area-full">
	<div class="single-about" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if ( has_post_thumbnail() ): ?>
			<div class="page-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!--  .post-thumbnail -->

		<?php endif; ?>

		<div class="about-container">
			<h2 class="about-title"><?php the_title(); ?></h2>
			<div class="about-content">
				<?php the_content(); ?>
			</div>
		</div>
	</div><!-- #post-## -->
</div>

<?php get_footer(); ?>
