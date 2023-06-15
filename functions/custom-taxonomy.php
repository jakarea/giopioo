<?php

/**
 * Register a private 'Technology' taxonomy for post type 'project'.
 *
 * @see register_post_type() for registering post types.
 *
 * Create two taxonomies, Technologys and writers for the post type "book".
 *
 * @see register_post_type() for registering custom post types.
 */
function wpdocs_create_book_taxonomies() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Technology', 'taxonomy general name', 'giopio' ),
        'singular_name'     => _x( 'Technology', 'taxonomy singular name', 'giopio' ),
        'singular_name'     => _x( 'Technology', 'taxonomy singular name', 'giopio' ),
        'search_items'      => __( 'Search Technology', 'giopio' ),
        'all_items'         => __( 'All Technologies', 'giopio' ),
        'parent_item'       => __( 'Parent Technology', 'giopio' ),
        'parent_item_colon' => __( 'Parent Technology:', 'giopio' ),
        'edit_item'         => __( 'Edit Technology', 'giopio' ),
        'update_item'       => __( 'Update Technology', 'giopio' ),
        'add_new_item'      => __( 'Add New Technology', 'giopio' ),
        'new_item_name'     => __( 'New Technology Name', 'giopio' ),
        'menu_name'         => __( 'Technology', 'giopio' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'technologies' ),
    );

    register_taxonomy( 'technologies', 'project', $args );
}
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'wpdocs_create_book_taxonomies', 0 );