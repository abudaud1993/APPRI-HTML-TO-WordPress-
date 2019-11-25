<?php

// *** ================================================= ***
// *** ALL CSS OR JS Enqueue Funtion and condition Start ***
// *** ================================================= ***


function theme_scripts_styles(){

    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', null, 'v1.0', 'all');
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/css/fontawesome.all.min.css', null, 'v1.0', 'all');
    wp_enqueue_style('jdb_popup', get_template_directory_uri().'/css/jdb_popup.min.css', null, 'v1.0', 'all');
    wp_enqueue_style('slick', get_template_directory_uri().'/css/slick.css', null, 'v1.0', 'all');
    wp_enqueue_style('meanmenu', get_template_directory_uri().'/css/meanmenu.min.css', null, 'v1.0', 'all');
    wp_enqueue_style('scrollbar', get_template_directory_uri().'/css/scrollbar-color.css', null, 'v1.0', 'all');
    wp_enqueue_style('owl', get_template_directory_uri().'/css/owl.carousel.min.css', null, 'v1.0', 'all');
    wp_enqueue_style('main', get_template_directory_uri().'/css/main.css', null, 'v1.0', 'all');
    wp_enqueue_style('responsive', get_template_directory_uri().'/css/responsive.css', null, 'v1.0', 'all');
    wp_enqueue_style('stylesheet', get_stylesheet_uri());

    // JS here
    // wp_enqueue_script('jquery');
    // wp_enqueue_script('squery', get_stylesheet_directory_uri().'/js/jquery-3.4.1.min.js', array(), '1.0', true);
    // wp_enqueue_script('ajax-squery', get_stylesheet_directory_uri().'/js/jquery.ajax-libs.min.js', array('jquery'), '1.0', true);
    // wp_enqueue_script('popper-squery', get_stylesheet_directory_uri().'/js/_popper.min.js', array('jquery'), '1.0', true);
    // wp_enqueue_script('bootstrap-squery', get_stylesheet_directory_uri().'/js/_bootstrap.min.js', array('jquery'), '1.0', true);
    // wp_enqueue_script('waypoints-squery', get_stylesheet_directory_uri().'/js/jquery.waypoints.min.js', array('jquery'), '1.0', true);
    // wp_enqueue_script('fontawesome-squery', get_stylesheet_directory_uri().'/js/fontawesome.all.min.js', array('jquery'), '1.0', true);
    // wp_enqueue_script('counterup-squery', get_stylesheet_directory_uri().'jquery.counterup.min.js', array('jquery'), '1.0', true);
    // wp_enqueue_script('slicks-squery', get_stylesheet_directory_uri().'/js/slick.min.js', array('jquery'), '1.0', true);
    // wp_enqueue_script('meanmenu-squery', get_stylesheet_directory_uri().'/js/jquery.meanmenu.min.js', array('jquery'), '1.0', true);
    // wp_enqueue_script('owl.carousel-squery', get_stylesheet_directory_uri().'/js/owl.carousel.min.js', array('jquery'), '1.0', true);
    // wp_enqueue_script('jdb_popup-squery', get_stylesheet_directory_uri().'/js/jdb_popup.min.js', array('jquery'), '1.0', true);
    // wp_enqueue_script('main-squery', get_stylesheet_directory_uri().'/js/main.js', array('jquery'), '1.0', true);

}
add_action('wp_enqueue_scripts', 'theme_scripts_styles');


// *** ================================================= ***
// *** ALL CSS OR JS Enqueue Funtion and condition End   ***
// *** ================================================= ***