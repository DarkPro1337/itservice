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

?>