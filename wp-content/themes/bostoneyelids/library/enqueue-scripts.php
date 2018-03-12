<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles() {
	$parent_style = 'b4st-master'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css', array( 'bootstrap-css' ) );
    wp_enqueue_style( 'boston-eyelids-child',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
