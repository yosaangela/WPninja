<div class="home-news-section">
	<div class="container">
		<div class="row">
		   <h2 class="subtitle"><span>Nieuws</span></h2>
				<?php 
			  		$page_news = get_page_by_path('news');
			  		$news_url = $page_news ? get_permalink($page_news): '';
			  	
			  	    $args = array(
			  	    		'post_type' => 'post',
			  	    		'posts_per_page' => 3
			  	    		);
			  	   	$loop = new WP_Query($args);
			  	   	if ($loop->have_posts() ) :
			  	   		while ($loop->have_posts() ) : $loop -> the_post(); ?>
			  	 

				<div class="home-news-item-wrapper">

					<div class="home-news-item">
						<div class="home-news-item-image">
							<?php the_post_thumbnail();?>
							 <span class="post-info"><?php the_time('j F Y' );?></span>
						</div>

						<div class="home-news-item-content"> 
							<h2><?php the_title(); ?></h2>
							<p><?php echo content(30); ?></p>
							<a href="<?php the_permalink(); ?>" ><span class="sr-only">Read more</span></a>
						</div>

					</div><!--home-news-item -->

				</div> <!-- /.home-news-item-wrapper end -->

			<?php endwhile; ?>

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php esc_html_e( 'Sorry no post for now. Please come back later :)' ); ?></p>
			<?php endif; ?>
			
			<div class="wrapper-news-section">	
				<div class="home-news-btn">
					<a href="<?php echo $news_url ?>"><?php _e('Meer Nieuws', 'headlab'); ?></a> 
				</div>
				<div class="button-up">
					<i class="fas fa-caret-square-up"></i>
				</div> <!--  .button-up -->
			</div> <!--  .wrapper-news-section -->
			
		</div>
	</div>
</div>
