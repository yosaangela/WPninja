<?php
/**
 * @package HeadLabNeo
 * @subpackage theme name here
 * Template Name: Homepage
 */
?>
<?php get_header(); ?>

	<?php if (is_front_page()) : ?>
	<?php /* Slider */ include get_stylesheet_directory() . '/includes/slider.php'; ?>
	<?php endif; ?>
	<?php include get_stylesheet_directory() . '/includes/homepage.php'; ?>
	<?php include get_stylesheet_directory() . '/includes/projects.php'; ?>
	<?php include get_stylesheet_directory() . '/includes/news.php'; ?>

<?php 
get_footer();
