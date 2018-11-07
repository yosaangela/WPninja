<div id="primary" class="content-area-full">
	<div class="site-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<?php if ( has_post_thumbnail() ): ?>
				<div class="page-thumbnail">
					<?php the_post_thumbnail(); ?>
				</div> <!--  .page-thumbnail -->

		<?php endif; ?>

		<div class="page-container">
			<h2 class="about-title"><?php the_title(); ?></h2>
			<div class="about-content">
				<?php the_content(); ?>
			</div>
		</div>
	</div><!-- #post-## -->
</div>
