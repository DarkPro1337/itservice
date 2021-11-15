<?php
/**
 * Theme functions.
 * 
 * @package ITService
 */

function itservice_enqueue_scripts() {
    // Register Styles
    wp_register_style( 'app-css', get_template_directory_uri() . '/assets/dist/app.css', [], filemtime(get_template_directory() . '/assets/dist/app.css'), 'all' );

    // Register Scripts
    wp_register_script( 'app-js', get_template_directory_uri() . '/assets/dist/app.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);

    // Enqueue Styles
    wp_enqueue_style('app-css');

    // Enqueue Scripts
    wp_enqueue_script('app-js');
}
add_action( 'wp_enqueue_scripts', 'itservice_enqueue_scripts' );
?>