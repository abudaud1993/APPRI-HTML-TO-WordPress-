<?php
function theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('thumbnails-frist', 80, 80, false);
}
add_action('after_setup_theme', 'theme_support');






require_once('inc/enqueue_cs_js.php');
require_once('inc/nav_menus.php');
require_once('inc/post_custom.php');
require_once('inc/cmb2_custom_fields.php');
require_once('inc/redux-framework/redux-framework.php');
require_once('inc/custom_redux.php');
require_once('inc/footer_widgets_funtion.php');




