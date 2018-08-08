<?php
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );
add_theme_support( 'post-format', [
	'aside',
	'gallery',
	'link',
	'image',
	'quote',
	'status',
	'video',
	'audio',
	'chat',
] );

register_nav_menus( [
	'main-menu' => esc_html__( 'Main Menu', 'wpcourse' ),
] );

function wpcourse_enqueue_scripts() {
	wp_enqueue_style( 'normalize-css', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css' );
	wp_enqueue_style( 'main-css', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'wpcourse_enqueue_scripts' );

function wpcourse_widgets_init() {
    register_sidebar([
        'name'          => esc_html__( 'Main Sidebar', 'wpcourse' ),
        'id'            => 'main-sidebar',
        'description'   => esc_html__( 'Main sidebar displayed at the left of the site.', 'wpcourse' ),
        'before_widget' => '<div class="main-sidebar-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="widget-title">',
        'after_title'   => '</div>',
    ]);
}

add_action( 'widgets_init', 'wpcourse_widgets_init' );
