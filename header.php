<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HeadLabNeo
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>	

<body <?php body_class(); ?>>


<div id="page" class="site">
	
	<?php include get_stylesheet_directory() . '/includes/main-menu.php'; ?>

	<header id="masthead" class="site-header <?php echo (is_front_page()) ? 'mb-0' : '' ;?>" role="banner">
	
		<div id="cust-menu" class="custom-menu">

			<div class="custom-menu-inner clearfix">
				<?php 
		    		if ( has_custom_logo() ) {
					    the_custom_logo();
					} else { ?>
					    <div class="navbar-brand mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
				<?php } ?>

				<?php headlab_menu('primary'); ?>
			</div>
	
			<a href="#" id="menu-trigger"><?php _e('MENU', 'headlab');?></a> 
			<!-- menu button, when user click this... -->
		</div><!-- custom menu-->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
	<?php 
	(is_front_page()) ? $container = 'container-fluid' : $container = 'container';
	?>

	<div class="<?php echo $container;?>">
		<div class="row">