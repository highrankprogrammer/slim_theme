<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */
	
	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */

	add_theme_support('post-thumbnails');
	
	// register_nav_menus(array('primary' => 'Primary Navigation'));

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	
	add_action('wp_footer','footer_scripts');

	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */



	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function starkers_script_enqueuer() {
		
		wp_register_style( 'screen', get_stylesheet_directory_uri().'/stylesheets/screen.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );

	}

	// ADD SCRIPTS TO FOOTER HOOK
	function footer_scripts() {
		/*
		wp_deregister_script('jquery');
		wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
		wp_enqueue_script('jquery');
		*/
		
		wp_register_script( 'cycle2', get_template_directory_uri().'/js/cycle2.js', array( 'jquery' ) );
		wp_enqueue_script( 'cycle2' );

		wp_register_script( 'carousel', 'http://malsup.github.io/jquery.cycle2.carousel.js', array( 'jquery' ) );
		wp_enqueue_script( 'carousel' );

		wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
		wp_enqueue_script('site');

	}
	
	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	
/* ========================================================================================================================
 Register Menus
======================================================================================================================== */
function register_my_menus() {
register_nav_menus( array(
		'primary_nav'  	=> 'Main Menu',
		'subnav' 		=> 'Sub Nav',
		'footer_nav' 	=>'Footer Menu'
	) );
}
add_action('init','register_my_menus');

/* ========================================================================================================================
 Widgets
======================================================================================================================== */
// register mainnav widget
if(function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' 			=> 'main nav',
		'id'     		=> 'mainnav',
		'description'   => 'Widget for header navigation'
	) );
}

// register practice area widget
if(function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' 			=> 'practice menu',
		'id'     		=> 'practicemenu',
		'description'   => 'Widget for practice area menu'
	) );
}



?>