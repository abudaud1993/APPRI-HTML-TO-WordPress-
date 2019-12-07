<?php

/**
 * ReduxFramework Barebones Sample Config File
 * For full documentation, please visit: http://docs.reduxframework.com/
 */

if (!class_exists('Redux')) {
    return;
}

// This is your option name where all the Redux data is stored.
$opt_name = "appritheme";

/**
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 * */

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    // TYPICAL -> Change these values as you need/desire
    'opt_name'             => $opt_name,
    // This is where your data is stored in the database and also becomes your global variable name.
    'display_name'         => $theme->get('Name'),
    // Name that appears at the top of your panel
    'display_version'      => $theme->get('Version'),
    // Version that appears at the top of your panel
    'menu_type'            => 'menu',
    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
    'allow_sub_menu'       => true,
    // Show the sections below the admin menu item or not
    'menu_title'           => __('APPRI THEME OPTION', 'APPRI-THEME'),
    'page_title'           => __('APPRI THEME OPTION', 'APPRI-THEME'),
    // You will need to generate a Google API key to use this feature.
    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
    'google_api_key'       => '',
    // Set it you want google fonts to update weekly. A google_api_key value is required.
    'google_update_weekly' => false,
    // Must be defined to add google fonts to the typography module
    'async_typography'     => true,
    // Use a asynchronous font on the front end or font string
    //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
    'admin_bar'            => true,
    // Show the panel pages on the admin bar
    'admin_bar_icon'       => 'dashicons-portfolio',
    // Choose an icon for the admin bar menu
    'admin_bar_priority'   => 50,
    // Choose an priority for the admin bar menu
    'global_variable'      => '',
    // Set a different name for your global variable other than the opt_name
    'dev_mode'             => true,
    // Show the time the page took to load, etc
    'update_notice'        => true,
    // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
    'customizer'           => true,
    // Enable basic customizer support
    //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
    //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

    // OPTIONAL -> Give you extra features
    'page_priority'        => null,
    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
    'page_parent'          => 'themes.php',
    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
    'page_permissions'     => 'manage_options',
    // Permissions needed to access the options panel.
    'menu_icon'            => '',
    // Specify a custom URL to an icon
    'last_tab'             => '',
    // Force your panel to always open to a specific tab (by id)
    'page_icon'            => 'icon-themes',
    // Icon displayed in the admin panel next to your menu_title
    'page_slug'            => '_options',
    // Page slug used to denote the panel
    'save_defaults'        => true,
    // On load save the defaults to DB before user clicks save or not
    'default_show'         => false,
    // If true, shows the default value next to each field that is not the default value.
    'default_mark'         => '',
    // What to print by the field's title if the value shown is default. Suggested: *
    'show_import_export'   => true,
    // Shows the Import/Export panel when not used as a field.

    // CAREFUL -> These options are for advanced use only
    'transient_time'       => 60 * MINUTE_IN_SECONDS,
    'output'               => true,
    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
    'output_tag'           => true,
    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
    'database'             => '',
    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

    'use_cdn'              => true,
    // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

    //'compiler'             => true,

    // HINTS
    'hints'                => array(
        'icon'          => 'el el-question-sign',
        'icon_position' => 'right',
        'icon_color'    => 'lightgray',
        'icon_size'     => 'normal',
        'tip_style'     => array(
            'color'   => 'light',
            'shadow'  => true,
            'rounded' => false,
            'style'   => '',
        ),
        'tip_position'  => array(
            'my' => 'top left',
            'at' => 'bottom right',
        ),
        'tip_effect'    => array(
            'show' => array(
                'effect'   => 'slide',
                'duration' => '500',
                'event'    => 'mouseover',
            ),
            'hide' => array(
                'effect'   => 'slide',
                'duration' => '500',
                'event'    => 'click mouseleave',
            ),
        ),
    )
);

// ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
$args['admin_bar_links'][] = array(
    'id'    => 'redux-docs',
    'href'  => 'http://docs.reduxframework.com/',
    'title' => __('Documentation', 'APPRI-THEME'),
);

$args['admin_bar_links'][] = array(
    //'id'    => 'redux-support',
    'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
    'title' => __('Support', 'APPRI-THEME'),
);

$args['admin_bar_links'][] = array(
    'id'    => 'redux-extensions',
    'href'  => 'reduxframework.com/extensions',
    'title' => __('Extensions', 'APPRI-THEME'),
);

// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
$args['share_icons'][] = array(
    'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
    'title' => 'Visit us on GitHub',
    'icon'  => 'el el-github'
    //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
);
$args['share_icons'][] = array(
    'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
    'title' => 'Like us on Facebook',
    'icon'  => 'el el-facebook'
);
$args['share_icons'][] = array(
    'url'   => 'http://twitter.com/reduxframework',
    'title' => 'Follow us on Twitter',
    'icon'  => 'el el-twitter'
);
$args['share_icons'][] = array(
    'url'   => 'http://www.linkedin.com/company/redux-framework',
    'title' => 'Find us on LinkedIn',
    'icon'  => 'el el-linkedin'
);

// Panel Intro text -> before the form
if (!isset($args['global_variable']) || $args['global_variable'] !== false) {
    if (!empty($args['global_variable'])) {
        $v = $args['global_variable'];
    } else {
        $v = str_replace('-', '_', $args['opt_name']);
    }
    $args['intro_text'] = sprintf(__('<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'APPRI-THEME'), $v);
} else {
    $args['intro_text'] = __('<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'APPRI-THEME');
}

// Add content after the form.
$args['footer_text'] = __('<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'APPRI-THEME');

Redux::setArgs($opt_name, $args);

/*
     * ---> END ARGUMENTS
     */

/*
     * ---> START HELP TABS
     */

$tabs = array(
    array(
        'id'      => 'redux-help-tab-1',
        'title'   => __('Theme Information 1', 'APPRI-THEME'),
        'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'APPRI-THEME')
    ),
    array(
        'id'      => 'redux-help-tab-2',
        'title'   => __('Theme Information 2', 'APPRI-THEME'),
        'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'APPRI-THEME')
    )
);
Redux::setHelpTab($opt_name, $tabs);

// Set the help sidebar
$content = __('<p>This is the sidebar content, HTML is allowed.</p>', 'APPRI-THEME');
Redux::setHelpSidebar($opt_name, $content);


/*
     * <--- END HELP TABS
     */


/*
     *
     * ---> START SECTIONS
     *
     */

/*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

// -> START Home page Fields
Redux::setSection($opt_name, array(
    'title' => __('Home Page Fields', 'APPRI-THEME'),
    'id'    => 'home_page',
    'desc'  => __('Home Page Theme Option.', 'APPRI-THEME'),
    'icon'  => 'el el-home'
));

Redux::setSection($opt_name, array(
    'title'      => __('Header Section', 'APPRI-THEME'),
    'desc'       => __('Header Section Theme Option', 'APPRI-THEME'),
    'id'         => 'header_section',
    'icon'       =>  'el el-podcast',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'logo-image',
            'type'     => 'media',
            'title'    => __('Logo Image', 'APPRI-THEME'),
            'subtitle' => __('.PNG , .JPG ,', 'APPRI-THEME'),
            'desc'     => __('Upload your logo Image', 'APPRI-THEME'),
            'url'      =>   true,
            'default'  => array(
                'url'  => get_template_directory_uri() . '/img/logo/logo-1.png',
            ),
        ),
    )
));

Redux::setSection($opt_name, array(
    'title'      => __('Slider Section', 'APPRI-THEME'),
    'desc'       => __('Slider Section Theme Option', 'APPRI-THEME'),
    'id'         => 'Slider_section',
    'icon'       =>  'el el-resize-horizontal',
    'subsection' => true,
    'fields'     => array(

        array(
            'id'       => 'slider-image-shap1',
            'type'     => 'media',
            'title'    => __('Slider Image Shap', 'APPRI-THEME'),
            'subtitle' => __('. PNG . JPG', 'APPRI-THEME'),
            'desc'     => __('Upload your slider Image Shap', 'APPRI-THEME'),
            'url'      =>   true,
            'default'  => array(
                'url'  => get_template_directory_uri() . '/img/shape/shape01.png',
            ),
        ),

        array(
            'id'       => 'slider-image-shap2',
            'type'     => 'media',
            'title'    => __('Slider Image Shap', 'APPRI-THEME'),
            'subtitle' => __('. PNG . JPG', 'APPRI-THEME'),
            'desc'     => __('Upload your slider Image Shap', 'APPRI-THEME'),
            'url'      =>   true,
            'default'  => array(
                'url'  => get_template_directory_uri() . '/img/shape/shape02.png',
            ),
        ),

        array(
            'id'       => 'slider-title',
            'type'     => 'text',
            'title'    => __('Slider Title', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input Your Slider Title', 'APPRI-THEME'),
            'default'  => 'Make your life greater then before'
        ),

        array(
            'id'       => 'slider-subtitle',
            'type'     => 'textarea',
            'title'    => __('Slider SubTitle', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input Your Slider Sub Title', 'APPRI-THEME'),
            'default'  => 'Enables you to define cross-channel profiles and improve audience sessions per week.'
        ),

        array(
            'id'       => 'slider-button1',
            'type'     => 'text',
            'title'    => __('Slider Button', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input Your Slider Button text ', 'APPRI-THEME'),
            'default'  => 'READ MORE'
        ),

        array(
            'id'       => 'slider-button1-url',
            'type'     => 'text',
            'title'    => __('Slider Button Url', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input Your Slider Button Url ', 'APPRI-THEME'),
            'default'  => 'https://www.'
        ),

        array(
            'id'       => 'slider-button2',
            'type'     => 'text',
            'title'    => __('Slider Button', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input Your Slider Button text ', 'APPRI-THEME'),
            'default'  => 'LEARN MORE'
        ),

        array(
            'id'       => 'slider-button2-url',
            'type'     => 'text',
            'title'    => __('Slider Button Url', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input Your Slider Button Url ', 'APPRI-THEME'),
            'default'  => 'https://wwww.'
        ),

        array(
            'id'       => 'slider-image',
            'type'     => 'media',
            'title'    => __('Slider Image', 'APPRI-THEME'),
            'subtitle' => __('. PNG . JPG', 'APPRI-THEME'),
            'desc'     => __('Upload your slider Image', 'APPRI-THEME'),
            'url'      =>   true,
            'default'  => array(
                'url'  => get_template_directory_uri() . '/img/app-mb-01.png',
            ),
        ),

        array(
            'id'       => 'slider-image-shap3',
            'type'     => 'media',
            'title'    => __('Slider Image Shap', 'APPRI-THEME'),
            'subtitle' => __('. PNG . JPG', 'APPRI-THEME'),
            'desc'     => __('Upload your slider Image Shap', 'APPRI-THEME'),
            'url'      =>   true,
            'default'  => array(
                'url'  => get_template_directory_uri() . '/img/shape/shape03.png',
            ),
        ),
        array(
            'id'       => 'slider-image-shap4',
            'type'     => 'media',
            'title'    => __('Slider Image Shap', 'APPRI-THEME'),
            'subtitle' => __('. PNG . JPG', 'APPRI-THEME'),
            'desc'     => __('Upload your slider Image Shap', 'APPRI-THEME'),
            'url'      =>   true,
            'default'  => array(
                'url'  => get_template_directory_uri() . '/img/shape/shape04.png',
            ),
        ),

    )
));


Redux::setSection($opt_name, array(
    'title'      => __('Counter Section', 'APPRI-THEME'),
    'desc'       => __('Counter Section Theme Option', 'APPRI-THEME'),
    'id'         => 'counter_section',
    'subsection' => true,
    'icon'      => 'el el-time',
    'fields'     => array(
        array(
            'id'       => 'counter-number',
            'type'     => 'text',
            'title'    => __('Counter', 'APPRI-THEME'),
            'subtitle' => __('Number', 'APPRI-THEME'),
            'desc'     => __('Input your Counter number', 'APPRI-THEME'),
            'default'  => '40,790',
        ),

        array(
            'id'       => 'counter-text',
            'type'     => 'text',
            'title'    => __('Counter Text', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your Counter Text', 'APPRI-THEME'),
            'default'  => 'Download App',
        ),
        array(
            'id'       => 'counter-number0',
            'type'     => 'text',
            'title'    => __('Counter', 'APPRI-THEME'),
            'subtitle' => __('Number', 'APPRI-THEME'),
            'desc'     => __('Input your Counter number', 'APPRI-THEME'),
            'default'  => '10,900',
        ),

        array(
            'id'       => 'counter-text0',
            'type'     => 'text',
            'title'    => __('Counter Text', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your Counter Text', 'APPRI-THEME'),
            'default'  => 'Active Users',
        ),
        array(
            'id'       => 'counter-number1',
            'type'     => 'text',
            'title'    => __('Counter', 'APPRI-THEME'),
            'subtitle' => __('Number', 'APPRI-THEME'),
            'desc'     => __('Input your Counter number', 'APPRI-THEME'),
            'default'  => ',790',
        ),
        array(
            'id'       => 'counter-text1',
            'type'     => 'text',
            'title'    => __('Counter Text', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your Counter Text', 'APPRI-THEME'),
            'default'  => 'Positive Reviews',
        ),
    )
));

Redux::setSection($opt_name, array(
    'title'      => __('Unique Features Section', 'APPRI-THEME'),
    'desc'       => __('Unique Features Section Theme Option', 'APPRI-THEME'),
    'id'         => 'unique_features_section',
    'icon'      =>  'el el-ok',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'unique_features-title',
            'type'     => 'text',
            'title'    => __('Unique Features Title ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your Unique Features Title', 'APPRI-THEME'),
            'default'  => 'Unique Features',
        ),
        array(
            'id'       => 'unique_features-subtitle',
            'type'     => 'textarea',
            'title'    => __('Unique Features SubTitle ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your Unique Features SubTitle', 'APPRI-THEME'),
            'default'  => 'Enables you to define cross-channel profiles and improve audience. sessions per week.',
        ),

    )
));

Redux::setSection($opt_name, array(
    'title'      => __('Watch Video Section', 'APPRI-THEME'),
    'desc'       => __('Watch Video Section Theme Option', 'APPRI-THEME'),
    'id'         => 'watch-video_section',
    'icon'      => 'el el-video',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'watch-video-title',
            'type'     => 'text',
            'title'    => __('Watch Video Title ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your Watch Video Title', 'APPRI-THEME'),
            'default'  => 'Watch Video',
        ),
        array(
            'id'       => 'watch-video-bg-image',
            'type'     => 'media',
            'title'    => __('Watch Video BG Image', 'APPRI-THEME'),
            'subtitle' => __('. PNG . JPG', 'APPRI-THEME'),
            'desc'     => __('Upload your Watch Video BG Image', 'APPRI-THEME'),
            'url'      =>   true,
            'default'  => array(
                'url'  => get_template_directory_uri() . '/img/background-img/video-bg.png',
            ),
        ),
        array(
            'id'       => 'watch-video-image',
            'type'     => 'media',
            'title'    => __('Watch Video Image', 'APPRI-THEME'),
            'subtitle' => __('. PNG . JPG', 'APPRI-THEME'),
            'desc'     => __('Upload your Watch Video Image', 'APPRI-THEME'),
            'url'      =>   true,
            'default'  => array(
                'url'  => get_template_directory_uri() . '/img/app-mb-01.png',
            ),
        ),
        array(
            'id'       => 'watch-video-icon-title',
            'type'     => 'text',
            'title'    => __('Watch Video Icon Title ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your Watch Video Icon Text', 'APPRI-THEME'),
            'default'  => '<i class="fab fa-google-play"></i>',
        ),
    )
));


Redux::setSection($opt_name, array(
    'title'      => __('How It Works Section', 'APPRI-THEME'),
    'desc'       => __('How It Works Section Theme Option', 'APPRI-THEME'),
    'id'         => 'How-It-Works_section',
    'icon'      =>  'el el-network',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'How-It-Works-title',
            'type'     => 'text',
            'title'    => __('How It Works Title ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your How It Works Title', 'APPRI-THEME'),
            'default'  => 'How It Works',
        ),
        array(
            'id'       => 'How-It-Works-subtitle',
            'type'     => 'textarea',
            'title'    => __('How It Works SubTitle ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your How It Works SubTitle', 'APPRI-THEME'),
            'default'  => 'Enables you to define cross-channel profiles and improve audience. sessions per week.',
        ),
    )
));



Redux::setSection($opt_name, array(
    'title'      => __('How It Works Post Section', 'APPRI-THEME'),
    'desc'       => __('How It Works post Section Theme Option', 'APPRI-THEME'),
    'id'         => 'How-It-Works-post_section',
    'icon'      =>  'el el-network',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'How-It-Works-post-image',
            'type'     => 'media',
            'title'    => __('How It Works Post Image ', 'APPRI-THEME'),
            'subtitle' => __('.PNG , .JPG,', 'APPRI-THEME'),
            'desc'     => __('Input your How It Works Post Image', 'APPRI-THEME'),
            'url'       =>  true,
            'default'  => array(
                'url'   => get_template_directory_uri() . '/img/post-img/medil-bg.png'
            ),
        ),
        array(
            'id'       => 'How-It-Works-post-title',
            'type'     => 'text',
            'title'    => __('How It Works Post Title ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your How It Works Post Title', 'APPRI-THEME'),
            'default'  => 'Build better managment easier togother',
        ),
        array(
            'id'       => 'How-It-Works-post-subtitle',
            'type'     => 'textarea',
            'title'    => __('How It Works Post SubTitle ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your How It Works Post SubTitle', 'APPRI-THEME'),
            'default'  => 'Enables you to define cross-channel profiles and improve audience. sessions per week There is no one type or way in our diverse community Alienum phaedrum torquatos nec eu.',
        ),
        array(
            'id'       => 'How-It-Works-post-button',
            'type'     => 'text',
            'title'    => __('How It Works Post Button ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your How It Works Post Button Text', 'APPRI-THEME'),
            'default'  => 'Try it Free Now',
        ),

        array(
            'id'       => 'How-It-Works-post-button_url',
            'type'     => 'text',
            'title'    => __('How It Works Post Button url ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your How It Works Post Button Text url ', 'APPRI-THEME'),
            'default'  => '',
        ),

        array(
            'id'       => 'How-It-Works-post-image1',
            'type'     => 'media',
            'title'    => __('How It Works Post Image ', 'APPRI-THEME'),
            'subtitle' => __('.PNG , .JPG,', 'APPRI-THEME'),
            'desc'     => __('Input your How It Works Post Image', 'APPRI-THEME'),
            'url'       =>  true,
            'default'  => array(
                'url'   => get_template_directory_uri() . '/img/post-img/medil-bg-1.png'
            ),
        ),
        array(
            'id'       => 'How-It-Works-post-title1',
            'type'     => 'text',
            'title'    => __('How It Works Post Title ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your How It Works Post Title', 'APPRI-THEME'),
            'default'  => 'Build better managment easier togother',
        ),
        array(
            'id'       => 'How-It-Works-post-subtitle1',
            'type'     => 'textarea',
            'title'    => __('How It Works Post SubTitle ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your How It Works Post SubTitle', 'APPRI-THEME'),
            'default'  => 'Enables you to define cross-channel profiles and improve audience. sessions per week There is no one type or way in our diverse community Alienum phaedrum torquatos nec eu.',
        ),
        array(
            'id'       => 'How-It-Works-post-button1',
            'type'     => 'text',
            'title'    => __('How It Works Post Button ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your How It Works Post Button Text', 'APPRI-THEME'),
            'default'  => 'Try it Free Now',
        ),

        array(
            'id'       => 'How-It-Works-post-button_url1',
            'type'     => 'text',
            'title'    => __('How It Works Post Button url ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your How It Works Post Button Text url ', 'APPRI-THEME'),
            'default'  => '',
        ),
    )
));
Redux::setSection($opt_name, array(
    'title'      => __('Pricing Plan Section', 'APPRI-THEME'),
    'desc'       => __('Pricing Plan Section Theme Option', 'APPRI-THEME'),
    'id'         => 'Pricing-Plan_section',
    'icon'      =>  'el  el-usd',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'Pricing-Plan-title',
            'type'     => 'text',
            'title'    => __('Pricing Plan Title ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your Pricing Plan Title', 'APPRI-THEME'),
            'default'  => 'Pricing Plan',
        ),
        array(
            'id'       => 'Pricing-Plan-subtitle',
            'type'     => 'textarea',
            'title'    => __('Pricing Plan SubTitle ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your Pricing Plan SubTitle', 'APPRI-THEME'),
            'default'  => 'Enables you to define cross-channel profiles and improve audience. sessions per week.',
        ),
    )
));

Redux::setSection($opt_name, array(
    'title'      => __('App Screenshot Section', 'APPRI-THEME'),
    'desc'       => __('App Screenshot Section Theme Option', 'APPRI-THEME'),
    'id'         => 'App-Screenshot_section',
    'icon'      =>  'el  el-camera',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'App-Screenshot-title',
            'type'     => 'text',
            'title'    => __('App Screenshot Title ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your App Screenshot Title', 'APPRI-THEME'),
            'default'  => 'App Screenshot',
        ),
        array(
            'id'       => 'App-Screenshot-subtitle',
            'type'     => 'textarea',
            'title'    => __('App Screenshot SubTitle ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your App Screenshot SubTitle', 'APPRI-THEME'),
            'default'  => 'Enables you to define cross-channel profiles and improve audience. sessions per week.',
        ),

        array(
            'id'       => 'App-Screenshot-image',
            'type'     => 'media',
            'title'    => __('App Screenshot Image', 'APPRI-THEME'),
            'subtitle' => __('. PNG . JPG', 'APPRI-THEME'),
            'desc'     => __('Upload your App Screenshot Image', 'APPRI-THEME'),
            'url'      =>   true,
            'default'  => array(
                'url'  => get_template_directory_uri() . '/img/only-img.png',
            ),
        ),

    )
));

Redux::setSection($opt_name, array(
    'title'      => __('FAQS Section', 'APPRI-THEME'),
    'desc'       => __('FAQS Section Theme Option', 'APPRI-THEME'),
    'id'         => 'FAQS_section',
    'icon'      =>  'el el-tasks',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'FAQS-title',
            'type'     => 'text',
            'title'    => __('FAQS Title ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your FAQS Title', 'APPRI-THEME'),
            'default'  => 'FAQS',
        ),
        array(
            'id'       => 'FAQS-subtitle',
            'type'     => 'textarea',
            'title'    => __('FAQS SubTitle ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your FAQS SubTitle', 'APPRI-THEME'),
            'default'  => 'Enables you to define cross-channel profiles and improve audience. sessions per week.',
        ),
        array(
            'id'       => 'FAQS-image',
            'type'     => 'media',
            'title'    => __('FAQS Image', 'APPRI-THEME'),
            'subtitle' => __('. PNG . JPG', 'APPRI-THEME'),
            'desc'     => __('Upload your FAQS Image', 'APPRI-THEME'),
            'url'      =>   true,
            'default'  => array(
                'url'  => get_template_directory_uri() . '/img/New folder/mobeil.png',
            ),
        ),
        array(
            'id'       => 'How-to-Buy-This-title',
            'type'     => 'text',
            'title'    => __('How to Buy This Title ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your How to Buy This Title', 'APPRI-THEME'),
            'default'  => 'How to Buy This?',
        ),
        array(
            'id'       => 'How-to-Buy-This-subtitle',
            'type'     => 'textarea',
            'title'    => __('How to Buy This SubTitle ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your How to Buy This SubTitle', 'APPRI-THEME'),
            'default'  => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven"t heard of them accusamus labore sustainable VHS.',
        ),
        array(
            'id'       => 'refundable-title',
            'type'     => 'text',
            'title'    => __('It is refundable Title ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your It is refundable Title', 'APPRI-THEME'),
            'default'  => 'It is refundable?',
        ),
        array(
            'id'       => 'refundable-subtitle',
            'type'     => 'textarea',
            'title'    => __('It is refundable SubTitle ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your It is refundable SubTitle', 'APPRI-THEME'),
            'default'  => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven"t heard of them accusamus labore sustainable VHS.',
        ),
        array(
            'id'       => 'free-title',
            'type'     => 'text',
            'title'    => __('Can i use free Title ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your Can i use free Title', 'APPRI-THEME'),
            'default'  => 'Can i use free',
        ),
        array(
            'id'       => 'free-subtitle',
            'type'     => 'textarea',
            'title'    => __('Can i use free SubTitle ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your Can i use free SubTitle', 'APPRI-THEME'),
            'default'  => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven"t heard of them accusamus labore sustainable VHS.',
        ),
    )
));
Redux::setSection($opt_name, array(
    'title'      => __('Trusted Section', 'APPRI-THEME'),
    'desc'       => __('Trusted Section Theme Option', 'APPRI-THEME'),
    'id'         => 'Trusted_section',
    'icon'      =>  'el el-hand-right ',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'Trusted-title',
            'type'     => 'textarea',
            'title'    => __('Trusted Title ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your Trusted Title', 'APPRI-THEME'),
            'default'  => 'Trusted by thousands of people and companies worldwide',
        ),
        
    )
));

Redux::setSection($opt_name, array(
    'title'      => __('Latest News Section', 'APPRI-THEME'),
    'desc'       => __('Latest News Section Theme Option', 'APPRI-THEME'),
    'id'         => 'Latest-News_section',
    'icon'      =>  'el el-ok ',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'Latest-News-title',
            'type'     => 'text',
            'title'    => __('Latest News Title ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your Latest News Title', 'APPRI-THEME'),
            'default'  => 'Latest News',
        ),

        array(
            'id'       => 'Latest-News-subtitle',
            'type'     => 'textarea',
            'title'    => __('Latest News SubTitle ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your Latest News SubTitle', 'APPRI-THEME'),
            'default'  => 'Enables you to define cross-channel profiles and improve audience. sessions per week.',
        ),
        
    )
));

Redux::setSection($opt_name, array(
    'title'      => __('Available Apps Section', 'APPRI-THEME'),
    'desc'       => __('Available Apps Section Theme Option', 'APPRI-THEME'),
    'id'         => 'Available-Apps_section',
    'icon'      =>  'el el-wordpress ',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'Available-title',
            'type'     => 'text',
            'title'    => __('Available Title ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your Available Title', 'APPRI-THEME'),
            'default'  => 'Now Available On',
        ),
        array(
            'id'       => 'Available-Apps-image',
            'type'     => 'media',
            'title'    => __('Available Apps Image', 'APPRI-THEME'),
            'subtitle' => __('. PNG . JPG', 'APPRI-THEME'),
            'desc'     => __('Upload your Available Apps Image', 'APPRI-THEME'),
            'url'      =>   true,
            'default'  => array(
                'url'  => get_template_directory_uri() . '/img/i-con-now/APPRI.png',
            ),
        ),
        array(
            'id'       => 'Available-Apps-image0',
            'type'     => 'media',
            'title'    => __('Available Apps Image', 'APPRI-THEME'),
            'subtitle' => __('. PNG . JPG', 'APPRI-THEME'),
            'desc'     => __('Upload your Available Apps Image', 'APPRI-THEME'),
            'url'      =>   true,
            'default'  => array(
                'url'  => get_template_directory_uri() . '//img/i-con-now/APPRI=1-.png',
            ),
        ),

        
    )
));


/*
                * <--- END SECTIONS
                */





// -> START About Page Fields
Redux::setSection($opt_name, array(
    'title' => __('About Page Fields', 'APPRI-THEME'),
    'id'    => 'about_page',
    'desc'  => __('Basic fields as subsections.', 'APPRI-THEME'),
    'icon'  => 'el  el-adult'
));

Redux::setSection($opt_name, array(
    'title'      => __('Text', 'APPRI-THEME'),
    'desc'       => __('For full documentation on this field, visit: ', 'APPRI-THEME') . '<a href="//docs.reduxframework.com/core/fields/text/" target="_blank">//docs.reduxframework.com/core/fields/text/</a>',
    'id'         => '1opt-text-subsection',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => '1text-example',
            'type'     => 'text',
            'title'    => __('Text Field', 'APPRI-THEME'),
            'subtitle' => __('Subtitle', 'APPRI-THEME'),
            'desc'     => __('Field Description', 'APPRI-THEME'),
            'default'  => 'Default Text',
        ),
    )
));

Redux::setSection($opt_name, array(
    'title'      => __('Text Area', 'APPRI-THEME'),
    'desc'       => __('For full documentation on this field, visit: ', 'APPRI-THEME') . '<a href="//docs.reduxframework.com/core/fields/textarea/" target="_blank">//docs.reduxframework.com/core/fields/textarea/</a>',
    'id'         => '1opt-textarea-subsection',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => '1textarea-example',
            'type'     => 'textarea',
            'title'    => __('Text Area Field', 'APPRI-THEME'),
            'subtitle' => __('Subtitle', 'APPRI-THEME'),
            'desc'     => __('Field Description', 'APPRI-THEME'),
            'default'  => 'Default Text',
        ),
    )
));




// DEMO Example All Site Yous Start
Redux::setSection($opt_name, array(
    'title' => __('DEMO  Fields', 'APPRI-THEME'),
    'id'    => 'demo_page',
    'desc'  => __('Demo Type fields.', 'APPRI-THEME'),
    'icon'  => 'el  el-record'
));
Redux::setSection($opt_name, array(
    'title'      => __('Demo Section', 'APPRI-THEME'),
    'desc'       => __('Demo Section Theme Option', 'APPRI-THEME'),
    'id'         => 'demo_section',
    'icon'      =>  'el el-gift',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'demo-image',
            'type'     => 'media',
            'title'    => __('Demo Image', 'APPRI-THEME'),
            'subtitle' => __('. PNG . JPG', 'APPRI-THEME'),
            'desc'     => __('Upload your Demo Image', 'APPRI-THEME'),
            'url'      =>   true,
            'default'  => array(
                'url'  => get_template_directory_uri() . '/img/demo.jpg',
            ),
        ),
        array(
            'id'       => 'demo-title',
            'type'     => 'text',
            'title'    => __('Demo Title ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your Demo Title', 'APPRI-THEME'),
            'default'  => 'Demo Titel',
        ),
        array(
            'id'       => 'demo-subtitle',
            'type'     => 'textarea',
            'title'    => __('Demo SubTitle ', 'APPRI-THEME'),
            'subtitle' => __('Text', 'APPRI-THEME'),
            'desc'     => __('Input your Demo SubTitle', 'APPRI-THEME'),
            'default'  => 'Demo SubTitle',
        ),
    )
));
      // DEMO Example All Site Yous End
