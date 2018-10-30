
<div class="home-news-section">
	<div class="container clearfix">
		<div class="row">
			  <h2>Nieuws</h2> 
				<?php 
				  $page_news = get_page_by_path('news');
				  $news_url = $page_news ? get_permalink($page_news): '';
				  
				$args = array(
					'post_type' => 'post', 
					'posts_per_page' => 3
				);
				$loop = new WP_Query( $args );
				if($loop->have_posts()) :
				while ( $loop->have_posts() ) : $loop->the_post();
					
			    ?>	

				<div class="home-news-item"><!-- parent -->
					<div class="home-news-item-image">
						<?php the_post_thumbnail();?>
						 <p class="post-info"><?php the_time('j F Y' );?></p>
					</div>
					<div class="home-news-item-content"> 
						<h5><?php the_title(); ?></h5>
						<p><?php echo content(30); ?></p>
						<a class="right-arrow" href="<?php the_permalink(); ?>" ><span class="sr-only">Read more</span></a>
					</div>
					
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
				
				<div class="home-news-btn">
					<a href="<?php echo $news_url ?>"><?php _e('Meer Nieuws', 'headlab'); ?></a> 
				</div>
		
		</div>
	</div>
</div>
