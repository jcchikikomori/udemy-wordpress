<?php
/**
 * Undocumented function
 *
 * @return void
 */
function Ju_enqueue()
{
    $ASSET_DIR = get_template_directory_uri() . DIRECTORY_SEPARATOR . 'assets';
    $CSS_DIR = $ASSET_DIR . DIRECTORY_SEPARATOR . 'css';
    $JS_DIR = $ASSET_DIR . DIRECTORY_SEPARATOR . 'js';
    $VENDOR = $ASSET_DIR . DIRECTORY_SEPARATOR . 'vendor';
    $BOOTSTRAP_CSS = $VENDOR . DIRECTORY_SEPARATOR . 'bootstrap/css';
    $BOOTSTRAP_JS = $VENDOR . DIRECTORY_SEPARATOR . 'bootstrap/js';
    $JQUERY_DIR = $VENDOR . DIRECTORY_SEPARATOR . 'jquery';

    // Register needed styles
    $ju_bootstrap_css = $BOOTSTRAP_CSS . DIRECTORY_SEPARATOR . 'bootstrap.min.css';
    $ju_custom = $CSS_DIR . DIRECTORY_SEPARATOR . 'custom.css';
    wp_register_style('ju_bootstrap', $ju_bootstrap_css);
    wp_register_style('ju_custom', $ju_custom);

    // Enqueue all registered styles
    wp_enqueue_style('ju_bootstrap');
    wp_enqueue_style('ju_custom');

    // Now for javascript / footer stuffs
    $ju_bs_js = $BOOTSTRAP_JS . DIRECTORY_SEPARATOR . 'bootstrap.bundle.min.js';
    $ju_jquery = $JQUERY_DIR . DIRECTORY_SEPARATOR . 'jquery.min.js';
    wp_register_script('ju_bootstrap', $ju_bs_js, array(), false, true);
    wp_register_script('ju_jquery', $ju_jquery, array(), false, true);

    // Enqueue all registered scripts
    wp_enqueue_script('ju_bootstrap');
    wp_enqueue_script('ju_jquery');
}