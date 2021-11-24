<?php
/**
 * Register menus
 * 
 * @package ITService
*/

namespace ITSERVICE_THEME\Inc;

use ITSERVICE_THEME\Inc\Traits\Singleton;

class Menus {
    use Singleton;
    
    protected function __construct() {
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        /**
         * Actions.
         */
        add_action('init', [$this, 'register_menus']);
    }

    public function register_menus() {
        register_nav_menus([
                'itservice-header-menu' => esc_html__('Header Menu', 'itservice'),
                'itservice-footer-menu' => esc_html__('Footer Menu', 'itservice')
            ]
        );
    }
}