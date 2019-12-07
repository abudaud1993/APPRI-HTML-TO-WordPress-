<?php

function theme_support(){

    add_theme_support('title-tag');
    // add_theme_support( 'custom-logo', array(
    //     'height' => 480,
    //     'width'  => 720,
    // ) );

    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','theme_support');





// JS here

require_once('inc/css-js-style.php');



