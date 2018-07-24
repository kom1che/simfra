<?php

if ( is_admin() ) {
    add_filter( 'filesystem_method', create_function( '$a', 'return "direct";' ) );
    if ( ! defined( 'FS_CHMOD_DIR' ) ) {
        define( 'FS_CHMOD_DIR', 0751 );
    }
}

remove_action( 'wp_head', 'wp_resource_hints', 2 );

// Remove emoji script
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

add_filter( 'emoji_svg_url', '__return_false' );

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','rest_output_link_wp_head');
show_admin_bar(false);

function logo_widget_init() {

    register_sidebar( array(
        'name'          => 'Logo SVG',
        'id'            => 'logo',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<span class="hidden">',
        'after_title'   => '</span>',
    ));
}
add_action( 'widgets_init', 'logo_widget_init' );


function icon_widget_init() {

    register_sidebar( array(
        'name'          => 'Icon SVG',
        'id'            => 'icon',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<span class="hidden">',
        'after_title'   => '</span>',
    ));
}
add_action( 'widgets_init', 'icon_widget_init' );


require_once ( get_stylesheet_directory() . '/theme-options.php' );

add_theme_support( 'post-thumbnails' );