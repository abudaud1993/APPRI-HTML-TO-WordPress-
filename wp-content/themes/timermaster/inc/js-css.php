<?php 

// *** ================================================= ***
// *** ALL CSS OR JS Enqueue Funtion and condition Start ***
// *** ================================================= ***


// <!-- Template CSS Files ================= -->
function js_css_enqueue() {

    // <!-- Twitter Bootstrs CSS -->
    
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/plugins/bootstrap/bootstrap.min.css','null','v3.3.4','all');

    // <!-- Ionicons Fonts Css -->
    wp_enqueue_style('ionicons', get_template_directory_uri().'/plugins/ionicons/ionicons.min.css','null','v2.0.0','all');

    // <!-- animate css -->
    wp_enqueue_style('animate', get_template_directory_uri().'/plugins/animate-css/animate.css','null','1.0.0','all');

    // <!-- Hero area slider css-->
    wp_enqueue_style('slider', get_template_directory_uri().'/plugins/slider/slider.css','null','1.0.0','all');

    // <!-- owl craousel css -->
    wp_enqueue_style('owl-carousel', get_template_directory_uri().'/plugins/owl-carousel/owl.carousel.css','null','v1.3.3','all');
    wp_enqueue_style('carousel', get_template_directory_uri().'/plugins/owl-carousel/owl.theme.css','null','v1.3.3','all');

    // <!-- Fancybox -->
    wp_enqueue_style('facncybox', get_template_directory_uri().'/plugins/facncybox/jquery.fancybox.css','null','v2.1.5','all');

    // <!-- template main css file -->
    wp_enqueue_style('main', get_template_directory_uri().'/css/main-style.css','null','1.0.0','all');

    wp_enqueue_style('stylesheet', get_stylesheet_uri());

    // <!-- Template Javascript Files ========================== -->

     // JS here

    //  <!-- jquery -->
     wp_enqueue_script('jquery');

    //  <!-- Form Validation -->
     wp_enqueue_script('validation-js', get_template_directory_uri().'/plugins/form-validation/jquery.form.js', array(),'3.32.0',true );
     wp_enqueue_script('form-validation-js', get_template_directory_uri().'/plugins/form-validation/jquery.validate.min.js', array(),'v1.11.1',true );

    //  <!-- owl carouserl js -->
     wp_enqueue_script('owl-carousel-js', get_template_directory_uri().'/plugins/owl-carousel/owl.carousel.min.js', array(),'1.0.0',true );

    //  <!-- bootstrap js -->
     wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/plugins/bootstrap/bootstrap.min.js', array(),'v3.3.5',true );

    //  <!-- wow js -->
     wp_enqueue_script('wow-js', get_template_directory_uri().'/plugins/wow-js/wow.min.js', array(),'v1.0.2',true );

    //  <!-- slider js -->
     wp_enqueue_script('slider-js', get_template_directory_uri().'/plugins/slider/slider.js', array(),'1.0.0',true );

    //  <!-- Fancybox -->
     wp_enqueue_script('facncybox-js', get_template_directory_uri().'/plugins/facncybox/jquery.fancybox.js', array(),'2.1.5',true );

    //  <!-- template main js -->
     wp_enqueue_script('main-js', get_template_directory_uri().'/js/main.js', array(),'1.0.0',true );
}
add_action('wp_enqueue_scripts','js_css_enqueue');



// *** ================================================= ***
// *** ALL CSS OR JS Enqueue Funtion and condition End   ***
// *** ================================================= ***
?>