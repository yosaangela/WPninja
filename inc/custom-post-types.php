<?php 
// Register Custom Post Type
function project() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'headlab' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'headlab' ),
		'menu_name'             => __( 'Projects', 'headlab' ),
		'name_admin_bar'        => __( 'Project', 'headlab' ),
		'archives'              => __( 'Project Archives', 'headlab' ),
		'attributes'            => __( 'Project Attributes', 'headlab' ),
		'parent_item_colon'     => __( 'Parent Project:', 'headlab' ),
		'all_items'             => __( 'All Projects', 'headlab' ),
		'add_new_item'          => __( 'Add New Project', 'headlab' ),
		'add_new'               => __( 'Add New', 'headlab' ),
		'new_item'              => __( 'New Project', 'headlab' ),
		'edit_item'             => __( 'Edit Project', 'headlab' ),
		'update_item'           => __( 'Update Project', 'headlab' ),
		'view_item'             => __( 'View Project', 'headlab' ),
		'view_items'            => __( 'View Projects', 'headlab' ),
		'search_items'          => __( 'Search Project', 'headlab' ),
		'not_found'             => __( 'Not found', 'headlab' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'headlab' ),
		'featured_image'        => __( 'Featured Image', 'headlab' ),
		'set_featured_image'    => __( 'Set featured image', 'headlab' ),
		'remove_featured_image' => __( 'Remove featured image', 'headlab' ),
		'use_featured_image'    => __( 'Use as featured image', 'headlab' ),
		'insert_into_item'      => __( 'Insert into Project', 'headlab' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Project', 'headlab' ),
		'items_list'            => __( 'Items list', 'headlab' ),
		'items_list_navigation' => __( 'Items list navigation', 'headlab' ),
		'filter_items_list'     => __( 'Filter Projects list', 'headlab' ),
	);
	$args = array(
		'label'                 => __( 'Project', 'headlab' ),
		'description'           => __( 'Mullergroup Projects', 'headlab' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 25,
		'menu_icon'             => 'dashicons-admin-multisite',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'query_var'             => 'project',
		'capability_type'       => 'post',
		'rewrite'				=> array( 'slug' => 'projects' ),
	);
	register_post_type( 'project', $args );

}
add_action( 'init', 'project', 0 );