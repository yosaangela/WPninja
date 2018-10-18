<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package HeadLabNeo
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function headlab_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'headlab_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function headlab_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'headlab_pingback_header' );


/**
 * Add Bootstrap button classes to tag cloud
 */
function headlab_tag_cloud_btn( $return ) {
	$return = str_replace('<a', '<a class="btn btn-secondary btn-sm"', $return );
	return $return;
}
add_filter( 'wp_tag_cloud', 'headlab_tag_cloud_btn' );


/**
 * Customize the Read More Button
**/
function headlab_modify_read_more_link() {
    return sprintf( '<a class="more-link btn btn-sm btn-secondary" href="%1$s">%2$s</a>',
        get_permalink(),
        __( 'Read More', 'headlab' )
    );
}
add_filter( 'the_content_more_link', 'headlab_modify_read_more_link' );

/**
* Posts and pages featured image url
* Called - E.g. background-image:url(<?php the_post_image(); ?>);
*/
// function the_post_image(){
//     if (has_post_thumbnail()){
//     $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
//     } else {
//     $feat_image = get_template_directory_uri() . '/images/image-default.jpg';
//     }
//     echo $feat_image;
// }
//NEEDS TO BE CHECKED SOMETHING'S OFF

/**
* Posts and pages featured image url
* Called - E.g. background-image:url(<?php echo get_post_image(2); ?>);
*/
function get_post_image($id){
    if (get_post_thumbnail_id($id)){
    $feat_image = wp_get_attachment_url( get_post_thumbnail_id($id) );
    } else {
    $feat_image = get_template_directory_uri() . '/images/image-default.jpg';
    }
    return $feat_image;
}


/*
* Custom menu output
* No <ul>, no <li>, just <a>
**/
function headlab_menu($location) {
// Get our nav locations (set in our theme, usually functions.php)
$menuLocations = get_nav_menu_locations(); // This returns an array of menu locations;

$menuID = $menuLocations[$location]; // Get the *MENU* menu ID

$menu_navs = wp_get_nav_menu_items($menuID);

$queried_page_id = get_queried_object_id();
  
  foreach ( $menu_navs as $menu_nav ) {

    $object_id = intval($menu_nav->object_id);

    if ( $queried_page_id == $object_id ) {
      $active = " class='active' ";
    } else {
      $active = '';
    }

    //var_dump($queried_page_id);

    echo '<a href="'. esc_url( $menu_nav->url ) .'" '. $active .' title="'. esc_html( $menu_nav->title ) .'">'. esc_html( $menu_nav->title ) .'</a>';
  }
}