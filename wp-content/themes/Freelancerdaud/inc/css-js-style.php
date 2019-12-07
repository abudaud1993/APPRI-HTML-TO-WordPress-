<?php

// *** ================================================= ***
// *** ALL CSS OR JS Enqueue Funtion and condition Start ***
// *** ================================================= ***

function css_js_enqueue(){
    


    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap-4.4.1.min.css','null','4.4.1','all');
    wp_enqueue_style('fontawesome',get_template_directory_uri().'/assets/css/fontawesome-5.11.2.min.css','null','5.11.2','all');
    wp_enqueue_style('animatedheadline',get_template_directory_uri().'/assets/jq-plugins/css/animatedheadline.css','null','1.0.0','all');
    wp_enqueue_style('skills',get_template_directory_uri().'/assets/jq-plugins/css/skills.css','null','1.0.0','all');
    wp_enqueue_style('Sticky-Nav-menu',get_template_directory_uri().'/assets/jq-plugins/css/Sticky-Nav-menu.css','null','1.0.0','all');
    wp_enqueue_style('timeline',get_template_directory_uri().'/assets/jq-plugins/css/timeline.css','null','1.0.0','all');
    wp_enqueue_style('default',get_template_directory_uri().'/assets/css/default-1.0.0.css','null','1.0.0','all');
    wp_enqueue_style('main',get_template_directory_uri().'/assets/css/main-1.0.0.css','null','1.0.0','all');
    wp_enqueue_style('Responsive',get_template_directory_uri().'/assets/css/Responsive.css','null','1.0.0','all');
    wp_enqueue_style('stylesheet', get_stylesheet_uri());

    // JS here
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-js', get_template_directory_uri().'/assets/jq-plugins/js/jquery-2.1.4.min.js', array(),'2.1.4',true );
    wp_enqueue_script('skill-js', get_template_directory_uri().'/assets/jq-plugins/js/skill.bars.jquery.js', array(),'1.0.0',true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap-4.4.1.min.js', array(),'4.4.1',true);
    wp_enqueue_script('popper-js', get_template_directory_uri().'/assets/js/popper-1.14.7.min.js', array(),'1.14.7',true );
    wp_enqueue_script('fontawesome-js', get_template_directory_uri().'/assets/js/fontawesome-5.11.2.min.js', array(),'5.11.2',true);
    wp_enqueue_script('animatedheadline-js', get_template_directory_uri().'/assets/jq-plugins/js/jquery.animatedheadline.min.js', array(),'1.0.0',true);
    wp_enqueue_script('menu-js', get_template_directory_uri().'/assets/jq-plugins/js/jquery.simple-menu.min.js', array(),'1.0.0',true);
    wp_enqueue_script('main-js', get_template_directory_uri().'/assets/js/main.js', array(),'1.0.0',true);
 

}
add_action('wp_enqueue_scripts','css_js_enqueue');


// *** ================================================= ***
// *** ALL CSS OR JS Enqueue Funtion and condition End   ***
// *** ================================================= ***