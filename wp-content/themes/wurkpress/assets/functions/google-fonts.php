<?php
// For Google Fonts.

function wpb_add_google_fonts() {

	wp_enqueue_style( 'wpb-google-fonts', 'http://fonts.googleapis.com/css?family=Montserrat:400,700', false );
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );