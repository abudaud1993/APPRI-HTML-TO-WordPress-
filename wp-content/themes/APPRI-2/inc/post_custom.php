<?php

// *** ============================== ***
// *** ALL Custom Post Start ***
// *** ============================== ***

function custom_post(){

    register_post_type('Unique_Features', array(
        'labels' => array(
            'menu_name'     =>  'Unique Features Menu',
            'name'          =>  'Unique Features',
            'add_new'       =>  'add new',
            'all_items'     =>  'all Unique Features ',
            'add_new_item'  =>  'add new item',

        ),
        'public'  => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'),
        'menu_icon' =>  'dashicons-hammer'
    ));


    register_post_type('blog_post', array(
        'labels' => array(
            'menu_name'     =>  'Latest News Menu',
            'name'          =>  'Latest News',
            'add_new'       =>  'add new',
            'all_items'     =>  'all Latest News ',
            'add_new_item'  =>  'add new item',

        ),
        'public'  => true,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats'),
        'menu_icon' =>  'dashicons-hammer'
    ));

    
}
add_action('init', 'custom_post');


// *** ============================== ***
// *** ALL Custom Post End ***
// *** ============================== ***