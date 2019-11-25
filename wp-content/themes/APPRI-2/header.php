<?php global $appritheme; ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> lang="en" class="no_js">

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="description" content="this appri psd to html build" />
  <meta name="keyword" content="html, css, javascript, jquery,Bootstrap" />
  <meta name="author" content="MD ABU DAUD" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Appri psd to html 2</title>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/logo/icon.ico" type="image/x-icon" />
  <?php wp_head(); ?>
</head>

<body>

  <!-- header start -->
  <section id="first_section">
    <header class=" <?php if (is_user_logged_in()) {
                      echo "top-30px";
                    } ?> header_area transparent_menu">
      <div class="container">
        <div class="row">
          <div class="col-xl-2 col-lg-2 col-md-2 d-flex align-self-center">
            <div class="logo">
              <a href="<?php echo esc_url(site_url()); ?>"><img src="<?php echo $appritheme['logo-image']['url'];?>"/></a>
            </div>
          </div>

          <div class="col-xl-10 col-lg-10 col-md-10">
            <div class="header_btn f_right d-none d-lg-block">
              <a href="#" class="btn">SIGN IN</a>
            </div>
            <div class="main_menu f_right">
              <nav id="mobile-menu">
                <?php wp_nav_menu(array(

                  'theme_location' => 'primary_menu',
                  'fallback_cb'    =>  'callback',
                  'walker'         => new WP_Bootstrap_Navwalker(),
                  'depth'          => 4,
                  'link_after'     => ' <span class="caret"></span> ',
                ));
                ?>
              </nav>
            </div>
            <div class="mobile-menu"></div>
          </div>
        </div>
      </div>
    </header>
  </section>
  <!-- header End  -->