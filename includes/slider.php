
<?php

// check if the repeater field has rows of data
if( have_rows('slides') ):


	echo '<div class="slide-show">';
 	// loop through the rows of data
    while ( have_rows('slides') ) : the_row();

        // display a sub field value
        $title = get_sub_field('slide_title');
        $btn_txt = get_sub_field('button_text');
        $btn_link = get_sub_field('button_link');
        $img = get_sub_field('slide_image');

        echo 
        "
		<div class='slide' style='background-image: url({$img["url"]})'>
			<h2>{$title}</h2>
			<a href='{$btn_link}'>{$btn_txt}</a>
		</div>
        ";

    endwhile;

    echo '</div>';

else :

    // no rows found

endif;

?>