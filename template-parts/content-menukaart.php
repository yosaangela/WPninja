<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Template Name: menukaart
 * @package HeadLabNeo
 */
get_header();
?>

<div class="menukaart">
    <div id="primary" class="content-area-full">
                <?php 
                    if (have_posts()) : 
                        while (have_posts()) : the_post(); 
                            if (has_post_thumbnail()) : ?>
                                <div class="up-image">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            <?php endif; ?>
                            <div class="box-title">
                                <?php the_title(); ?> 
                            </div>
                            <div class="box-content">
                                <?php the_content(); ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
    </div><!--#page-->
</div><!--menukaart-->

<?php get_footer(); ?>