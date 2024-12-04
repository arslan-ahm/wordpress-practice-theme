<?php
// Enqueue Styles
function cool_cooks_enqueue_styles()
{
    wp_enqueue_style('cool-cooks-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'cool_cooks_enqueue_styles');

// Theme Setup
if ( ! function_exists( 'cool_cooks_theme_setup' ) ) {
    function cool_cooks_theme_setup() {
        add_theme_support( 'title-tag' );
    }
}
add_action( 'after_setup_theme', 'cool_cooks_theme_setup' );

// Register Nav Menu
if ( ! function_exists( 'cool_cooks_register_nav_menu' ) ) {
	function cool_cooks_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'cool_cooks' ),
	    	'footer_menu'  => __( 'Footer Menu', 'cool_cooks' ),
		) );
	}
	add_action( 'after_setup_theme', 'cool_cooks_register_nav_menu', 0 );
}



?>