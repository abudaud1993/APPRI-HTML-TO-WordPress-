<?php

// *** ================================================= ***
// *** ALL Footer Or Sidebar Funtion and condition Start ***
// *** ================================================= ***


function theme_slug_widgets_init()
{
    register_sidebar(array(
        'name' => __('Footer-1', 'theme-slug'),
        'id' => 'footer-1',
        'description' => __('Widgets in this area will be shown on all posts and pages.', 'theme-slug'),
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name' => __('Footer-2', 'theme-slug'),
        'id' => 'footer-2',
        'description' => __('Widgets in this area will be shown on all posts and pages.', 'theme-slug'),
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name' => __('Footer-3', 'theme-slug'),
        'id' => 'footer-3',
        'description' => __('Widgets in this area will be shown on all posts and pages.', 'theme-slug'),
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'theme_slug_widgets_init');

// *** ================================================= ***
// *** ALL Footer Or Sidebar Funtion and condition Start ***
// *** ================================================= ***