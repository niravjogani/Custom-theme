<?php 

function sc_enqueue(){

    $uri            =   get_theme_file_uri();

    wp_register_style('sc_style', $uri . '/style.css');
    wp_register_style('sc_fonts', $uri . '/fonts/stylesheet.css');
    wp_register_style('sc_font_awesome', $uri . '/fonts/font-awesome/all.css');

    wp_enqueue_style( 'sc_style' );
    wp_enqueue_style( 'sc_fonts' );
    wp_enqueue_style( 'sc_font_awesome' );

    wp_register_script( 'sc_script_js', $uri . '/js/script.js' );

    wp_enqueue_script('jquery');
    wp_enqueue_script('sc_script_js');
    
}