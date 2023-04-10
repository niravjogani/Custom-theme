<?php

function sc_post_type_init(){
    $labels = array(
        'name'                  => _x( 'Sketch', 'Post type general name', 'sketch' ),
        'singular_name'         => _x( 'Sketch', 'Post type singular name', 'sketch' ),
        'menu_name'             => _x( 'Sketch', 'Admin Menu text', 'sketch' ),
        'name_admin_bar'        => _x( 'Sketch', 'Add New on Toolbar', 'sketch' ),
        'add_new'               => __( 'Add New', 'sketch' ),
        'add_new_item'          => __( 'Add New Sketch', 'sketch' ),
        'new_item'              => __( 'New Sketch', 'sketch' ),
        'edit_item'             => __( 'Edit Sketch', 'sketch' ),
        'view_item'             => __( 'View Sketch', 'sketch' ),
        'all_items'             => __( 'All Sketchs', 'sketch' ),
        'search_items'          => __( 'Search Sketch', 'sketch' ),
        'parent_item_colon'     => __( 'Parent Sketch:', 'sketch' ),
        'not_found'             => __( 'No Sketch found.', 'sketch' ),
        'not_found_in_trash'    => __( 'No Sketch found in Trash.', 'sketch' ),
        'featured_image'        => _x( 'Sketch Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'sketch' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'sketch' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'sketch' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'sketch' ),
        'archives'              => _x( 'Sketch archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'sketch' ),
        'insert_into_item'      => _x( 'Insert into Sketch', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'sketch' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Sketch', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'sketch' ),
        'filter_items_list'     => _x( 'Filter Sketchs list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'sketch' ),
        'items_list_navigation' => _x( 'Sketch list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'sketch' ),
        'items_list'            => _x( 'Sketch list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'sketch' ),
    );
 
    $args                       =   array(
        'labels'                =>  $labels,
        'description'           =>  'A custom post type for Sketch',
        'public'                =>  true,
        'publicly_queryable'    =>  true,
        'show_ui'               =>  true,
        'show_in_menu'          =>  true,
        'query_var'             =>  true,
        'rewrite'               =>  array( 'slug' => 'sketch' ),
        'capability_type'       =>  'post',
        'has_archive'           =>  true,
        'hierarchical'          =>  false,
        'menu_position'         =>  5,
        'supports'              =>  [ 'title','thumbnail' ],
        'show_in_rest'          =>  true,
        'menu_icon'             => 'dashicons-admin-customizer',
    );
 
    register_post_type( 'Sketch', $args );
}
?>