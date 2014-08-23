<?php
/*-------------------------------------------------------*/
/* Run Theme Blvd framework (required)
/*-------------------------------------------------------*/

require_once( get_template_directory() . '/framework/themeblvd.php' );

/*-------------------------------------------------------*/
/* Start Child Theme
/*-------------------------------------------------------*/



// include files - these are simply to organize functions into logical areas
include_once( 'includes/theme-functions.php' );




/**
 * Override Jump Start's default JavaScript and 
 * re-locate it to the child theme so we can use 
 * it as a starting point.
 */

function my_scripts() {
	// Register child theme file before Jump Start to override
	wp_register_script( 'themeblvd_theme', get_stylesheet_directory_uri() . '/assets/js/theme.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'my_scripts', 9 ); // Use any priority less than 10 to override Jump Start

add_theme_support( 'post-formats', array( 'aside', 'gallery' ) ); // adding theme support for post formats



