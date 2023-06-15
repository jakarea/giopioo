<?php
// Register Custom Post Type Team
function create_team_cpt() {

	$labels = array(
		'name' => _x( 'Teams', 'Post Type General Name', 'giopio' ),
		'singular_name' => _x( 'Team', 'Post Type Singular Name', 'giopio' ),
		'menu_name' => _x( 'Teams', 'Admin Menu text', 'giopio' ),
		'name_admin_bar' => _x( 'Team', 'Add New on Toolbar', 'giopio' ),
		'archives' => __( 'Team Archives', 'giopio' ),
		'attributes' => __( 'Team Attributes', 'giopio' ),
		'parent_item_colon' => __( 'Parent Team:', 'giopio' ),
		'all_items' => __( 'All Teams', 'giopio' ),
		'add_new_item' => __( 'Add New Team', 'giopio' ),
		'add_new' => __( 'Add New', 'giopio' ),
		'new_item' => __( 'New Team', 'giopio' ),
		'edit_item' => __( 'Edit Team', 'giopio' ),
		'update_item' => __( 'Update Team', 'giopio' ),
		'view_item' => __( 'View Team', 'giopio' ),
		'view_items' => __( 'View Teams', 'giopio' ),
		'search_items' => __( 'Search Team', 'giopio' ),
		'not_found' => __( 'Not found', 'giopio' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'giopio' ),
		'featured_image' => __( 'Featured Image', 'giopio' ),
		'set_featured_image' => __( 'Set featured image', 'giopio' ),
		'remove_featured_image' => __( 'Remove featured image', 'giopio' ),
		'use_featured_image' => __( 'Use as featured image', 'giopio' ),
		'insert_into_item' => __( 'Insert into Team', 'giopio' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Team', 'giopio' ),
		'items_list' => __( 'Teams list', 'giopio' ),
		'items_list_navigation' => __( 'Teams list navigation', 'giopio' ),
		'filter_items_list' => __( 'Filter Teams list', 'giopio' ),
	);
	$args = array(
		'label' => __( 'Team', 'giopio' ),
		'description' => __( 'Our team members', 'giopio' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-universal-access-alt',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
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
	register_post_type( 'team', $args );

}
add_action( 'init', 'create_team_cpt', 0 );