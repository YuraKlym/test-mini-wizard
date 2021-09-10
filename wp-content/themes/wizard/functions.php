<?php

add_action( 'wp_enqueue_scripts', 'wizard_style' );
add_action( 'wp_enqueue_scripts', 'wizard_scripts' );
function wizard_style() {

	wp_enqueue_style( 'main-style', get_stylesheet_uri() );

}



function wizard_scripts() {

    wp_enqueue_script( 'main-script', get_template_directory_uri() .'/assets/js/script.js', array(), '1.0', true );
}


//[foobar]
function r_test(){
	return "<p>Title</p><p>this is description</p>";
    
}
add_shortcode( 'r_test', 'r_test' );