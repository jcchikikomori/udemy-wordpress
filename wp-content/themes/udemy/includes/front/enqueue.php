<?php
/**
 * Undocumented function
 *
 * @return void
 */
function Ju_enqueue()
{
    $ASSET_DIR = get_template_directory_uri() . DIRECTORY_SEPARATOR . 'assets';
    $VENDOR = $ASSET_DIR . DIRECTORY_SEPARATOR . 'vendor';
    $BOOTSTRAP_CSS = $VENDOR . DIRECTORY_SEPARATOR . 'bootstrap/css';

    // Register needed styles
    wp_register_style('ju_bootstrap', $BOOTSTRAP_CSS . DIRECTORY_SEPARATOR . 'bootstrap.min.css');
    wp_register_style('ju_custom', $ASSET_DIR . DIRECTORY_SEPARATOR . 'css/custom.css');

    // Enqueue all registered styles
    wp_enqueue_style('ju_bootstrap');
    wp_enqueue_style('ju_custom');
}