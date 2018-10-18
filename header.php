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

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>	

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header <?php echo (is_front_page()) ? 'mb-0' : '' ;?>" role="banner">

		
	    <nav id="my-menu" class="navbar navbar-expand-lg">
	    	<div class="container">
				<div id="info-name">
					<?php bloginfo('name'); ?>
				</div>
				<button id="menu-button">MENU</button>

		   		<div class="collapse navbar-collapse" id="my-menu">
	            <?php
	            $args = array(
	              'theme_location' => 'primary',
	              'depth'      => 2,
	              'container'  => false,
	              'menu_class'     => 'navbar-nav',
	              'walker'     => new Bootstrap_Walker_Nav_Menu()
	              );
	            if (has_nav_menu('primary')) {
	              wp_nav_menu($args);
	            }
	            ?>
	          </div>
			
	        
		</nav>
	


	</header><!-- #masthead -->

	<div id="content" class="site-content">
	<?php 
	(is_front_page()) ? $container = 'container-fluid' : $container = 'container';
	?>

	<div class="<?php echo $container;?>">
		<div class="row">