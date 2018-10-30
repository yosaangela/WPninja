<?php
/**
 * Template Name: Archives
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

<div id="primary" class="site-content">
<div id="content" role="main">
 
<?php while ( have_posts() ) : the_post(); ?>
                 
<h1 class="entry-title"><?php the_title(); ?></h1>
 
<div class="entry-content">
 
<?php the_content(); ?>
 
/* Custom Archives Functions Go Below this line */
 
 
 
/* Custom Archives Functions Go Above this line */
 
</div><!-- .entry-content -->
 
<?php endwhile; // end of the loop. ?>
 
</div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>