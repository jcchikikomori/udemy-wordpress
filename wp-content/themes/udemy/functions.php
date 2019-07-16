<?php
// echo 'Ching Chong';

// Set up
add_theme_support('menus');

// Includes
require get_template_directory() . '/includes/front/enqueue.php';
require get_template_directory() . '/includes/setup.php';
require get_template_directory() . '/includes/widgets.php';

// Action & filter hooks
add_action('wp_enqueue_scripts', 'ju_enqueue');
add_action('after_setup_theme', 'ju_setup_theme');
add_action('widgets_init', 'ju_widgets');

// Shortcodes 