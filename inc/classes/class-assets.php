<?php
/**
 * Enqueue these assets
 * 
 * @package ITService
*/

namespace ITSERVICE_THEME\Inc;

use ITSERVICE_THEME\Inc\Traits\Singleton;

class Assets {
    use Singleton;
    
    protected function __construct() {
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        /**
         * Actions.
         */
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles() {
        // Register Styles
        wp_register_style( 'app-css', ITSERVICE_DIR_URI . '/assets/dist/app.css', [], filemtime(ITSERVICE_DIR_PATH . '/assets/dist/app.css'), 'all' );
        // Enqueue Styles
        wp_enqueue_style('app-css');
    }

    public function register_scripts() {
        // Register Scripts
        wp_register_script( 'app-js', ITSERVICE_DIR_URI . '/assets/dist/app.js', [], filemtime(ITSERVICE_DIR_PATH . '/assets/main.js'), true);
        // Enqueue Scripts
        wp_enqueue_script('app-js');
    }
}