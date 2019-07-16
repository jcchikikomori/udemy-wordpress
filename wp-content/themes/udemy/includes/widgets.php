<?php

/**
 * Undocumented function
 *
 * @return void
 */
function Ju_widgets()
{
  register_sidebar(array(
    'name' => __('My First Theme Sidebar', 'udemy'),
    'id' => 'ju_sidebar',
    'description' => __('Sidebar for the theme Udemy', 'udemy'),
    'class' => '',
    'before_widget' => '<div id="%1$s" class="card my-4 %2$s">',
    'after_widget' => '</div></div></div>',
    'before_title' => '<div class="card-header"><span class="card-title">',
    'after_title' => '</span></div><div class="card-body"><div class="widget">'
  ));
}