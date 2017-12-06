<?php

function uwf_child_enqueue_styles() {

	$dependencies = array(
		'uwf-reset',
		'uwf-bootstrap',
		'uwf-screen',
		'uwf-wp',
	);
    wp_enqueue_style( 'uwf-child-style', get_stylesheet_directory_uri() . '/style.css', $dependencies );

/*
	$print_dependencies = array(
		'uwf-print',
	);
    wp_enqueue_style( 'uwf-child-print', get_stylesheet_directory_uri() . '/print.css', $print_dependencies );
*/

}
add_action( 'wp_enqueue_scripts', 'uwf_child_enqueue_styles' );

?>
