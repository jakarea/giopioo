<?php
// Register Custom Post Type feedback
function create_feedback_cpt() {

	$labels = array(
		'name' => _x( 'feedbacks', 'Post Type General Name', 'giopio' ),
		'singular_name' => _x( 'feedback', 'Post Type Singular Name', 'giopio' ),
		'menu_name' => _x( 'feedbacks', 'Admin Menu text', 'giopio' ),
		'name_admin_bar' => _x( 'feedback', 'Add New on Toolbar', 'giopio' ),
		'archives' => __( 'feedback Archives', 'giopio' ),
		'attributes' => __( 'feedback Attributes', 'giopio' ),
		'parent_item_colon' => __( 'Parent feedback:', 'giopio' ),
		'all_items' => __( 'All feedbacks', 'giopio' ),
		'add_new_item' => __( 'Add New feedback', 'giopio' ),
		'add_new' => __( 'Add New', 'giopio' ),
		'new_item' => __( 'New feedback', 'giopio' ),
		'edit_item' => __( 'Edit feedback', 'giopio' ),
		'update_item' => __( 'Update feedback', 'giopio' ),
		'view_item' => __( 'View feedback', 'giopio' ),
		'view_items' => __( 'View feedbacks', 'giopio' ),
		'search_items' => __( 'Search feedback', 'giopio' ),
		'not_found' => __( 'Not found', 'giopio' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'giopio' ),
		'featured_image' => __( 'Featured Image', 'giopio' ),
		'set_featured_image' => __( 'Set featured image', 'giopio' ),
		'remove_featured_image' => __( 'Remove featured image', 'giopio' ),
		'use_featured_image' => __( 'Use as featured image', 'giopio' ),
		'insert_into_item' => __( 'Insert into feedback', 'giopio' ),
		'uploaded_to_this_item' => __( 'Uploaded to this feedback', 'giopio' ),
		'items_list' => __( 'feedbacks list', 'giopio' ),
		'items_list_navigation' => __( 'feedbacks list navigation', 'giopio' ),
		'filter_items_list' => __( 'Filter feedbacks list', 'giopio' ),
	);
	$args = array(
		'label' => __( 'feedback', 'giopio' ),
		'description' => __( 'Clients testimonials', 'giopio' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-editor-quote',
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => false,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'feedback', $args );

}
add_action( 'init', 'create_feedback_cpt', 0 );