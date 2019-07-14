<?php
// echo 'Ching Chong';

// Set up 

// Includes
include( get_template_directory() . '/includes/front/enqueue.php' );

// Action & filter hooks
add_action('wp_enqueue_scripts', 'ju_enqueue');

// Shortcodes

