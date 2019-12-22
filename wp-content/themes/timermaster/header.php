<!DOCTYPE html>
<html <?php language_attributes(); ?> lang="en" class="no_js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="<?php bloginfo('charset'); ?>" />
        <link rel="icon" href="favicon.ico">
        <title>Timer Agency Template</title>
        <title><?php bloginfo( 'name' ) . ' : '. bloginfo( 'description' ); ?></title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php wp_head(); ?>
         
    </head>
    <body>
        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header <?php if (is_user_logged_in()) {
                      echo "top-30px";
                    } ?>">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="<?php echo esc_url(site_url()); ?>" >
                            <img src="<?php echo get_template_directory_uri();?>/Images/logo.png" alt="">
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        
                        <?php wp_nav_menu(array(

                            'theme_location' => 'primary_menu',
                            'menu_class'    =>  'nav navbar-nav navbar-right',
                            'fallback_cb'    =>  'callback',
                            'walker'         => new WP_Bootstrap_Navwalker(),
                            'depth'          => 2,
                            'link_after'     => ' <span class="caret"></span> ',
                            ));
                            ?>
                        <!-- <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="index.html" >Home</a>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="service.html">Service</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="blog-fullwidth.html">Blog Full</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog Left sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right sidebar</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul> -->
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>