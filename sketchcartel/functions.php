<?php 

// Setup

// Includes
include( get_theme_file_path( '/includes/enqueue.php' ) );
include( get_theme_file_path( '/includes/setup.php' ) );
include( get_theme_file_path( '/includes/widgets.php' ) );
include( get_theme_file_path( '/includes/theme_customizer.php' ) );
include( get_theme_file_path( '/includes/init.php' ) );

// Hooks
add_action( 'wp_enqueue_scripts', 'sc_enqueue' );
add_action( 'after_setup_theme', 'sc_setup_theme' );
add_action( 'init', 'sc_post_type_init' );
add_action( 'widgets_init', 'sc_widgets' );
add_action( 'customize_register', 'sc_customize_register' );
add_action( 'add_meta_boxes', 'add_custom_meta_box');
add_action( 'save_post', 'wporg_save_postdata' );
add_action( 'wp_head', 'my_no_follow', 1 );

// Shortcodes

