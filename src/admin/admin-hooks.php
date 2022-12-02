<?php

add_action('admin_menu', '_plugin_menu_site_preloader');
function _plugin_menu_site_preloader() {
    add_menu_page('Site Preloader Options', 'Site Preloader', 'edit_plugins', 'site-preloader-options', '_plugin_page_site_preloader');

}

function _plugin_page_site_preloader(){
    if ( ! current_user_can( 'manage_options' ) ) {
        wp_die( __( 'Sorry, you are not allowed to manage options for this site.' ) );
    }
    if(!empty($_POST)){
        update_option('site_preloader_template', $_POST['template']);
        update_option('site_preloader_timeout', $_POST['timeout']);

    }

    $template = get_option('site_preloader_template');
    $timeout = get_option('site_preloader_timeout');

    require_once WP_PLUGIN_DIR . '/site-preloader/templates/admin/admin-options.php';
}