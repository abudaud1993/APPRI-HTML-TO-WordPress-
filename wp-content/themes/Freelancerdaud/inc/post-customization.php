<?php
// *** ============================== ***
// *** ALL Customizetion Post Start ***
// *** ============================== ***


function Customizetion_post(){
    register_post_type('my_service', array(
        'labels' => array(
            'menu_name'     =>  'My Service Menu',
            'name'          =>  'My Service',
            'add_new'       =>  'add new',
            'all_items'     =>  'all My Service ',
            'add_new_item'  =>  'add new item',
        ),
        'public'  => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'),
        'menu_icon' =>  'dashicons-hammer'
    ));
    register_post_type('Latest_Works', array(
        'labels' => array(
            'menu_name'     =>  'Latest Works Menu',
            'name'          =>  'Latest Works',
            'add_new'       =>  'add new',
            'all_items'     =>  'all Latest Works ',
            'add_new_item'  =>  'add new item',
        ),
        'public'  => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'),
        'menu_icon' =>  'dashicons-hammer'
    ));
    register_post_type('Client"s_Say', array(
        'labels' => array(
            'menu_name'     =>  'What My Client"s Say Menu',
            'name'          =>  'What My Client"s Say',
            'add_new'       =>  'add new',
            'all_items'     =>  'all What My Client"s Say ',
            'add_new_item'  =>  'add new item',
        ),
        'public'  => true,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats'),
        'menu_icon' =>  'dashicons-hammer'
    ));
    
}
add_action('init', 'Customizetion_post');
// *** ============================== ***
// *** ALL Customizetion Post End ***
// *** ============================== ***

















// *** ============================== ***
// *** ALL Custom Post End ***
// *** ============================== ***






//  ***   =============================================   ***
//  ***   ALL Menu Register Funtion and condition End     ***
//  ***   =============================================   ***