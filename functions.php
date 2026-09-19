<?php 
function html2wp_scripts_and_styles() {
    $theme_version = wp_get_theme()->get( 'Version' );
    $theme_uri     = get_template_directory_uri();

    // 1.call css files with support RTL
    if ( is_rtl() ) {
        wp_enqueue_style( 'html2wp-base', $theme_uri . '/assets/css/base-rtl.css', array(), $theme_version );
        wp_enqueue_style( 'html2wp-main', $theme_uri . '/assets/css/main-rtl.css', array( 'html2wp-base' ), $theme_version );
    } else {
        wp_enqueue_style( 'html2wp-base', $theme_uri . '/assets/css/base.css', array(), $theme_version );
        wp_enqueue_style( 'html2wp-main', $theme_uri . '/assets/css/main.css', array( 'html2wp-base' ), $theme_version );
        wp_enqueue_style( 'html2wp-style', get_stylesheet_uri(), array( 'html2wp-main' ), $theme_version );
    }

    // 2. call JavaScript files
    wp_enqueue_script( 'modernizr', $theme_uri . '/assets/js/modernizr.js', array(), '3.11.2', false );
    wp_enqueue_script( 'fontawesome', $theme_uri . '/assets/js/fontawesome/all.min.js', array(), '5.15.4', true ); 
    wp_enqueue_script( 'html2wp-main', $theme_uri . '/assets/js/main.js', array( 'jquery' ), $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'html2wp_scripts_and_styles' );


function tatakeepitsimple_registar_sidebars(){
	$page_sidebar = array(
						"name" => "Main Sidebar",
						"id" => "sidebar0"
	);
	$footer1_sidebar = array(
						"name" => "Footer Sidebar 1",
						"id" => "sidebar1"
	);
	$footer2_sidebar = array(
						"name" => "Footer Sidebar 2",
						"id" => "sidebar2"
	);
	$footer3_sidebar = array(
						"name" => "Footer Sidebar 3",
						"id" => "sidebar3"
	);
	$custom_sidebar = array(
						"name" => "Custome Sidebar",
						"id" => "sidebar4"
	);
	
	register_sidebar( $page_sidebar );
	register_sidebar( $footer1_sidebar );
	register_sidebar( $footer2_sidebar );
	register_sidebar( $footer3_sidebar );
	register_sidebar( $custom_sidebar );
	
}
add_action( 'widgets_init', 'tatakeepitsimple_registar_sidebars' );



// kipitsimple register menus

function tatakipitsimple_registar_menus(){
	$kipitsimple_menus = array(
		'top-menu' => 'Main Menu',
		'footer-menu' => 'Footer Menu'
	);
	register_nav_menus( $kipitsimple_menus );
}
add_action('init','tatakipitsimple_registar_menus');

add_filter('nav_menu_css_class', 'add_custom_nav_menu_classes', 10, 2);

function add_custom_nav_menu_classes($classes, $item) {
    if (in_array('current-menu-item', $classes) || in_array('current-menu-parent', $classes) || in_array('current-menu-ancestor', $classes)) {
        $classes[] = 'current';
    }

    if (in_array('menu-item-has-children', $classes)) {
        $classes[] = 'has-children';
    }

    return $classes;
}