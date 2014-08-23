<?php
/*-------------------------------------------------------*/
/* Theme functions
/*-------------------------------------------------------*/



// Define theme constants
define( 'RUM_THEME_ID', 'luna-blue' );
define( 'RUM_THEME_NAME', 'Luna Blue' );




// setup Luna Blue
function luna_blue_setup() {

	// Post Formats
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );

}
add_action( 'after_setup_theme', 'luna_blue_setup' );

