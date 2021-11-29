<?php
/**
 * Theme functions.
 * 
 * @package ITService
 */

if (!defined('ITSERVICE_DIR_PATH')) {
    define('ITSERVICE_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('ITSERVICE_DIR_URI')) {
    define('ITSERVICE_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

require_once ITSERVICE_DIR_PATH . '/inc/helpers/autoloader.php';

function itservice_get_theme_instance() {
    \ITSERVICE_THEME\Inc\ITSERVICE_THEME::get_instance();
}

itservice_get_theme_instance();

/*
function itservice_enqueue_scripts() {

}
*/

function cc_mime_types($mimes) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }
add_filter('upload_mimes', 'cc_mime_types');

// CARBON FIELDS

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );

function crb_attach_theme_options() {
    $basic_options_container = Container::make( 'theme_options', 'Настройки темы' )
    ->set_icon( 'dashicons-admin-customizer' )
    ->add_fields( array(
        Field::make( 'header_scripts', 'crb_header_script', 'Скрипты заголовка' ),
        Field::make( 'footer_scripts', 'crb_footer_script', 'Скрипты подвала' ),
    ) );

    Container::make( 'post_meta', 'Настройки страницы' )
		->where( 'post_type', '=', 'page' )
        ->where( 'post_template', '=', 'front-page.php' )
		->add_fields( array(
 
		Field::make( 'text', 'hero_title', 'Hero: заголовок' ),
        Field::make( 'text', 'hero_subtitle', 'Hero: подзаголовок' ),
        Field::make( 'text', 'hero_button_title', 'Hero: текст кнопки' ),
        Field::make( 'text', 'hero_button_link', 'Hero: ссылка на кнопке' ),
	) );
}

add_action( 'after_setup_theme', 'crb_load' );

function crb_load() {
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}