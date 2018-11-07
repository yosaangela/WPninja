<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package headlabneo
 */
?>
<?php get_header(); ?>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="single_page">
			
			<span><?php the_title(); ?></span>
			<?php the_post_thumbnail(); ?>
			<p><?php the_content(); ?></p>

		</div>
	<?php endif;?>


<?php get_footer(); ?>