<?php

function theme_support(){

    add_theme_support('title-tag');
    // add_theme_support( 'custom-logo', array(
    //     'height' => 480,
    //     'width'  => 720,
    // ) );

    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );

    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','theme_support');





// Integrate here
require_once('inc/css-js-style.php');
require_once('inc/nav_menus.php');
require_once('inc/post-customization.php');
require_once('inc/footer_widgets_funtion.php');
require_once('inc/add-do-remove-action.php');
require_once('inc/codestar-framework-master/codestar-framework.php');
require_once('inc/options.samples.php');
