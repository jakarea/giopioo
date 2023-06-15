<?php

function project() {
    $args = array(
        'public'    => true,
        'label'     => __( 'Project', 'giopio' ),
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'editor', 'thumbnail','excerpt'),
    );
    register_post_type( 'project', $args );
}
add_action( 'init', 'project' );