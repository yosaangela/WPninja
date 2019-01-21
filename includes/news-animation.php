<div class="flip-box" id="flip-box">
    <div class="flip-box-inner">
        <div class="flip-box-front">Hi! Hover<br> Me!</div>

        <div class="flip-box-back">
            <h2>Back Side</h2>
        </div>
    </div>
</div>

<!--div class="flip-container">
    <div class="flipper"> <pos. relative -->
        <!--div class="front"> < post. back & fornt: absolute-->
            <!--img src="images/images.jpg">
        </div>
        <div class="back">
            <p>Hallo this is test!</p>
        </div>
    </div>
</div>























<?php 
    /* 
        $page_news = get_page_by_path('news');
        $news_url = $page_news ? get_permalink($page_news) : '';

        $args = array(
            'post_type' => 'post',
            'post_per_page' => 3
        );

        $loop = new WP_Query($args);

            if($loop->have_posts() ) :
                while($loop->have_posts() ) : $loop -> the_post(); ?>
                    <div class="post-thumbnail">
                        <?php if (has_post_thumbnail()) :
                            the_post_thumbnail();
                        endif; ?>
                        <span class="post-info"><?php the_time('j F Y'); ?></span>
                    </div>
                    <div class="item-content">
                        <?php the_content(); ?>
                    </div>
                    <div class="item-title">
                        <?php the_title(); ?>
                    </div>
                <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
            <?php else : 
                echo esc_html_e("Sorry, there is no post yet :)");
            ?>
            <?php endif; ?>
        */