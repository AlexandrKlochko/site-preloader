<?php
/**
 * Plugin Name: Site Preloader
 * Description: Add preloader to site
 * Version: 1.0.0
 * Text Domain: site_preloader
 * Domain Path: /i18n/languages/
 * Requires at least: 5.2
 * Requires PHP: 7.0
 *
 */

defined( 'ABSPATH' ) || exit;


require __DIR__ . '/src/admin/admin-hooks.php';
require __DIR__ . '/src/frontend/frontend-hooks.php';

register_activation_hook( __FILE__, '_activation_site_preloader' );
function _activation_site_preloader(){
    add_option('site_preloader_template','circle');
    add_option('site_preloader_timeout','500');
}

register_uninstall_hook( __FILE__, '_uninstall_site_preloader' );
function _uninstall_site_preloader(){
    delete_option('site_preloader_template');
    delete_option('site_preloader_timeout');
}