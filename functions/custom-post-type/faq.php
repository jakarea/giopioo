<?php
// Register Custom Post Type FAQ
function create_faq_cpt() {

	$labels = array(
		'name' => _x( 'faqs', 'Post Type General Name', 'giopio' ),
		'singular_name' => _x( 'FAQ', 'Post Type Singular Name', 'giopio' ),
		'menu_name' => _x( 'faqs', 'Admin Menu text', 'giopio' ),
		'name_admin_bar' => _x( 'FAQ', 'Add New on Toolbar', 'giopio' ),
		'archives' => __( 'FAQ Archives', 'giopio' ),
		'attributes' => __( 'FAQ Attributes', 'giopio' ),
		'parent_item_colon' => __( 'Parent FAQ:', 'giopio' ),
		'all_items' => __( 'All faqs', 'giopio' ),
		'add_new_item' => __( 'Add New FAQ', 'giopio' ),
		'add_new' => __( 'Add New', 'giopio' ),
		'new_item' => __( 'New FAQ', 'giopio' ),
		'edit_item' => __( 'Edit FAQ', 'giopio' ),
		'update_item' => __( 'Update FAQ', 'giopio' ),
		'view_item' => __( 'View FAQ', 'giopio' ),
		'view_items' => __( 'View faqs', 'giopio' ),
		'search_items' => __( 'Search FAQ', 'giopio' ),
		'not_found' => __( 'Not found', 'giopio' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'giopio' ),
		'featured_image' => __( 'Featured Image', 'giopio' ),
		'set_featured_image' => __( 'Set featured image', 'giopio' ),
		'remove_featured_image' => __( 'Remove featured image', 'giopio' ),
		'use_featured_image' => __( 'Use as featured image', 'giopio' ),
		'insert_into_item' => __( 'Insert into FAQ', 'giopio' ),
		'uploaded_to_this_item' => __( 'Uploaded to this FAQ', 'giopio' ),
		'items_list' => __( 'faqs list', 'giopio' ),
		'items_list_navigation' => __( 'faqs list navigation', 'giopio' ),
		'filter_items_list' => __( 'Filter faqs list', 'giopio' ),
	);
	$args = array(
		'label' => __( 'FAQ', 'giopio' ),
		'description' => __( 'FAQ', 'giopio' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-universal-access-alt',
		'supports' => array('title', 'excerpt'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 70,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => false,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'faq', $args );

}
add_action( 'init', 'create_faq_cpt', 0 );