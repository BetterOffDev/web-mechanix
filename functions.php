<?php 

/* Remove the admin bar */
function wsdev_remove_admin_bar(){
    return false;
}

add_filter( 'show_admin_bar' , 'wsdev_remove_admin_bar');

/* Enqueue Styles */
function wsdev_web_mechanix_scripts() {
	wp_enqueue_style( 'bootstrap_styles', '//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css' );
	wp_enqueue_style( 'google_fonts', 'http://fonts.googleapis.com/css?family=Oxygen:400,300,700' );
	wp_enqueue_script( 'bootstrap_js', '//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js', array('jquery') );
}

add_action( 'wp_enqueue_scripts', 'wsdev_web_mechanix_scripts' );


?>