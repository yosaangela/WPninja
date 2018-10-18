<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package stanleywp
 */
?>

<?php //$project_items = get_theme_mod( 'project_items', '4' ); // what is this? its using plugin, so, actually its malfunction. We dont need that.
// Use this for single project page, you dont need that for homepage. Let me show you
?>


<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-'. $project_items); ?>>
			<?php if ( has_post_thumbnail() ) : ?>
			<div class="row">
			<div id="telo" class="kolom">
					   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					   <?php the_post_thumbnail() ?>
					   </a>
					</div><!--  .post-thumbnail -->
				<?php endif;?>
			</div>
			</div>

</article><!-- #post-## -->
