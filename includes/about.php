<?php 
$args = array(
'post_type'=> 'post',
'orderby'    => 'ID',
'post_status' => 'publish',
'order'    => 'DESC',
'posts_per_page' => -1 // this will retrive all the post that is published 
);
$result = new WP_Query( $args ); ?>
<?php if ( $result-> have_posts() ) : ?>
<?php while ( $result->have_posts() ) : $result->the_post(); ?>
<?php the_title(); ?>   
<?php endwhile; ?>
<?php endif; wp_reset_postdata(); ?>