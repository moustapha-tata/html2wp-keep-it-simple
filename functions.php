<?php 
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