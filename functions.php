<?php
/**
 * Functions File.
 *
 * @package  WordPressCourse
 */

/*
 * Theme Support.
 */
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

/**
 * Enqueue styles and scripts.
 */
function wpcourse_enqueue_scripts() {
	wp_enqueue_style( 'main-css', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'wpcourse_enqueue_scripts' );

/*
 * Nav Menus
 */
register_nav_menus( [
	'main-menu' => esc_html__( 'Main Menu', 'wpcourse' ),
] );
