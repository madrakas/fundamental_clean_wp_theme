<?php

function fundeasy_theme_support() {
    // Add dynamic title tag support
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'fundeasy_theme_support' );


function fundeasy_menus() {
    $locations = array(
        'primary' => 'Desktop Primary Left Sidebar',
        'footer' => 'Footer Menu Items'
    );
    register_nav_menus( $locations );
}

add_action( 'init', 'fundeasy_menus' );

function fundeasy_register_styles() {

    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style( 'fundeasy-style', get_template_directory_uri() . '/style.css', array('fundeasy-bootstrap'), $version, 'all' );
    wp_enqueue_style( 'fundeasy-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all' );
    wp_enqueue_style( 'fundeasy-fontawsome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'fundeasy_register_styles' );

function fundeasy_register_scripts() {

    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_script( 'fundeasy-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true );
    wp_enqueue_script( 'fundeasy-popper',  'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true );
    wp_enqueue_script( 'fundeasy-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true );
    wp_enqueue_script( 'fundeasy-main', get_template_directory_uri() . '/assets/js/main.js', array(), $version, true );
}

add_action( 'wp_enqueue_scripts', 'fundeasy_register_scripts' );

?>