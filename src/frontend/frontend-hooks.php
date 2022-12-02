<?php
function _sp_scripts()
{
    wp_register_script('_sp-js', plugins_url( 'site-preloader/assets/js/script.js' ), array('jquery'), null, true);
    wp_localize_script( '_sp-js', 'sp_params', array(
        'timeout' => get_option('site_preloader_timeout')
    ));
    wp_enqueue_script('_sp-js');

    wp_enqueue_style('_sp-main-css', plugins_url( 'site-preloader/assets/css/main.css'), false, '1.0', 'all' );
    if(!empty(get_option('site_preloader_template'))) {
        wp_enqueue_style('_sp-anim-css', plugins_url( 'site-preloader/assets/css/'.get_option('site_preloader_template').'.css'), array('_sp-main-css'), '1.0', 'all' );
    }

}

add_action('wp_enqueue_scripts', '_sp_scripts');

function _show_preloader(){
    if(!empty(get_option('site_preloader_template'))) {
        require_once WP_PLUGIN_DIR . '/site-preloader/templates/frontend/' . get_option('site_preloader_template') . '.php';
    }
}
add_action('after_body', '_show_preloader');
