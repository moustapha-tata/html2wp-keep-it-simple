<?php
/**
 * Keep It Simple Theme functions and definitions
 *
 * @package html2wp-keep-it-simple
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * 1. Sets up theme defaults and registers support for various WordPress features.
 */
function html2wp_theme_setup() {
    // Make theme available for translation.
    load_theme_textdomain( 'html2wp-keep-it-simple', get_template_directory() . '/languages' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Switch default core markup to output valid HTML5.
    add_theme_support( 'html5', array(
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Register primary navigation menus.
    register_nav_menus( array(
        'top-menu'    => esc_html__( 'Main Menu', 'html2wp-keep-it-simple' ),
        'footer-menu' => esc_html__( 'Footer Menu', 'html2wp-keep-it-simple' ),
    ) );
}
add_action( 'after_setup_theme', 'html2wp_theme_setup' );

/**
 * 2. Enqueue scripts and styles.
 */
function html2wp_scripts_and_styles() {
    $theme_version = wp_get_theme()->get( 'Version' );
    $theme_uri     = get_template_directory_uri();

    // Enqueue CSS stylesheets with automated RTL support.
    if ( is_rtl() ) {
        wp_enqueue_style( 'html2wp-base', $theme_uri . '/assets/css/base-rtl.css', array(), $theme_version );
        wp_enqueue_style( 'html2wp-main', $theme_uri . '/assets/css/main-rtl.css', array( 'html2wp-base' ), $theme_version );
    } else {
        wp_enqueue_style( 'html2wp-base', $theme_uri . '/assets/css/base.css', array(), $theme_version );
        wp_enqueue_style( 'html2wp-main', $theme_uri . '/assets/css/main.css', array( 'html2wp-base' ), $theme_version );
        wp_enqueue_style( 'html2wp-style', get_stylesheet_uri(), array( 'html2wp-main' ), $theme_version );
    }

    // Enqueue JavaScript libraries and custom scripts.
    wp_enqueue_script( 'modernizr', $theme_uri . '/assets/js/modernizr.js', array(), '3.11.2', false );
    wp_enqueue_script( 'fontawesome', $theme_uri . '/assets/js/fontawesome/all.min.js', array(), '5.15.4', true );
    wp_enqueue_script( 'html2wp-main', $theme_uri . '/assets/js/main.js', array( 'jquery' ), $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'html2wp_scripts_and_styles' );

/**
 * 3. Register widget areas (Sidebars).
 */
function html2wp_register_sidebars() {
    $sidebars = array(
        'sidebar0' => esc_html__( 'Main Sidebar', 'html2wp-keep-it-simple' ),
        'sidebar1' => esc_html__( 'Footer Sidebar 1', 'html2wp-keep-it-simple' ),
        'sidebar2' => esc_html__( 'Footer Sidebar 2', 'html2wp-keep-it-simple' ),
        'sidebar3' => esc_html__( 'Footer Sidebar 3', 'html2wp-keep-it-simple' ),
        'sidebar4' => esc_html__( 'Custom Sidebar', 'html2wp-keep-it-simple' ),
    );

    foreach ( $sidebars as $id => $name ) {
        register_sidebar( array(
            'name'          => $name,
            'id'            => $id,
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title h6">',
            'after_title'   => '</h3>',
        ) );
    }
}
add_action( 'widgets_init', 'html2wp_register_sidebars' );

/**
 * 4. Add custom active and dropdown CSS classes to navigation menu items.
 */
function html2wp_custom_nav_menu_classes( $classes, $item ) {
    if ( in_array( 'current-menu-item', $classes ) || in_array( 'current-menu-parent', $classes ) || in_array( 'current-menu-ancestor', $classes ) ) {
        $classes[] = 'current';
    }

    if ( in_array( 'menu-item-has-children', $classes ) ) {
        $classes[] = 'has-children';
    }

    return $classes;
}
add_filter( 'nav_menu_css_class', 'html2wp_custom_nav_menu_classes', 10, 2 );

/**
 * 5. Configure ACF Local JSON save and load paths.
 */
// Automatically save ACF JSON field groups in the theme directory.
add_filter( 'acf/settings/save_json', function( $path ) {
    return get_stylesheet_directory() . '/acf-json';
} );

// Load ACF JSON field groups from the theme directory.
add_filter( 'acf/settings/load_json', function( $paths ) {
    unset( $paths[0] );
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
} );