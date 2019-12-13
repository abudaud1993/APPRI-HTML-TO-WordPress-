<?php

// Get options
$options = get_option('freelancerdaud_theme'); // unique id of the framework
$logo = $options['header-logo'];  // id of the field
$adminimg = $options['admin_image'];  // id of the field
$slidertitle = $options['slidder_title'];  // id of the field
$sliderdtitle = $options['slidder_daud_title'];  // id of the field
$slidersubtitle = $options['slidder_subtitle'];  // id of the field
$slidertext = $options['slider-text'];  // id of the field
$fb_icon = $options['FaceBook-icon'];  // id of the field
$l_icon = $options['Linkedin-icon'];  // id of the field
$t_icon = $options['Twitter-icon'];  // id of the field
$i_icon = $options['Instagram-icon'];  // id of the field
$yt_icon = $options['YouTube-icon'];  // id of the field
$p_icon = $options['Pinterest-icon'];  // id of the field
$abouttitle = $options['about_title'];  // id of the field
$aboutsubt = $options['about_subtitle'];  // id of the field
$attitle = $options['about_text_title'];  // id of the field
$atsubtitle = $options['about_text_subtitle'];  // id of the field
$aboutimg = $options['about_img'];  // id of the field
$skilltitle = $options['skills_title'];  // id of the field
$skillsubtitle = $options['skills_subtitle'];  // id of the field
$servicetitle = $options['Service_title'];  // id of the field
$servicesubtitle = $options['Service_subtitle'];  // id of the field
$worktitle = $options['Works_title'];  // id of the field
$worksubtitle = $options['Works_subtitle'];  // id of the field
$rtitle = $options['Reviwe_title'];  // id of the field
$rsubtitle = $options['Reviwe_subtitle'];  // id of the field




?>


<?php get_header(); ?>


<!-- Logo and Menu Start -->
<section class="menu_section mb-10">
  <div class="simple-menu clearfix ">
    <div class="container">
      <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-2 col-sm-2 col-sx-12">

          <div class="site_logo">
            
            <a href="#"> <img src="<?php echo $logo['url']; ?>" width="170" height="70" /></a>


          </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-10 col-sm-10 col-sx-12">
          <div class="main_menu">
            <nav>
              <a class="btn btn-menu">Menu</a>
              <?php wp_nav_menu(array(

                  'theme_location' => 'primary_menu',
                  'fallback_cb'    =>  'callback',
                  'walker'         => new WP_Bootstrap_Navwalker(),
                  'depth'          => 4,
                  'link_after'     => ' <span class="caret"></span> ',
                  ));
                  ?>
              <!-- <ul class=""> -->
                <!-- <li class=""><a href="#home">HOME</a></li> -->
                <!-- <li class=""><a href="#about">ABOUT</a></li> -->
                <!-- <li class=""><a href="#about">MY STORY</a></li> -->
                <!-- <li class=""><a href="#service">SERVICE</a></li> -->
                <!-- <li class=""><a href="#portfolio">PORTFOLIO</a></li> -->
                <!-- <li class=""><a href="#review">REVIEW'S</a></li> -->
                <!-- <li class=""><a href="#testimonial">TESTIMONIAL</a></li> -->
                <!-- <li class=""><a href="#youtube">YOUTUBE</a></li> -->
                <!-- <li class=""><a href="#getstarted">GET STARTED</a></li> -->
                <!-- <li class=""><a href="#contract">CONTACT</a></li> -->
              <!-- </ul> -->
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Logo and Menu End -->

<!-- Slider Section Start -->
<section class="slider_section mb-20" data-background="computer-work.jpg">
  <div class="container">
    <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-sx-12">
        <div class="author_image">
          <a href="">
            <img class="img" src="<?php echo $adminimg['url'];?>" alt="">

          </a>
        </div>
      </div>
      <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-sx-12">
        <div class="slider_content">
          <div class="author_text_area mb-20 ">
            <h1> <?php echo $slidertitle;?> <span class="dc"> <?php echo $sliderdtitle;?> </span> </h1>
            <h2><?php echo $slidersubtitle;?> </h2>
            <section class="intro animate-clip">
              <h3 class="ah-headline">
                <span class="ah-words-wrapper ">
                  <b class="is-visible">WEB DESIGNER </b>
                  <b>WEB DEVELOPER </b>
                  <b>WORDPRESS EXPERAT </b>
                  <b>LOGO DESIGNER </b>
                  <b>DIGITAL MARKETER </b>
                  <b>BUSNESS MAN </b>
                  <!-- <b>HARDWARE BUSINESS MAN</b> -->
                </span>
              </h3>
            </section>
          </div>
          <div class="social-icons ">
            <ul class="">
              <li class=""><a href="#"> <span class="icone_style"> <i class="fab fa-facebook-f"></i> </span> </br>
                  <span class="icone_style1">Facebook</span></a></li>
              <li class=""><a href="#"><span class="icone_style"> <i class="fab fa-linkedin-in"></i></span> </br>
                  <span class="icone_style1">Linkedin</span></a></li>
              <li class=""><a href="#"><span class="icone_style"> <i class="fab fa-twitter"></i> </span>
             </br><span class="icone_style1">Twitter</span></a></li>
              <li class=""><a href="#"><span class="icone_style"> <i class="fab fa-instagram"></i> </span> </br>
                  <span class="icone_style1">Instagram</span></a></li>
              <li class=""><a href="#"><span class="icone_style" class="icone_style"> <i class="fab fa-youtube-square"></i> </span> 
            </br> <span class="icone_style1">YouTube</span></a>
              </li>
              <li class=""><a href="#"><span class="icone_style"><i class="fab fa-pinterest-p"></i></span> </br>
                  <span class="icone_style1">Pinterest</span></a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>
</section>
</header>
<!-- Header Section End -->
<div id="about" class="mb-100"></div>
<!-- Main Section Start -->
<main>

  <!-- About Section Start -->
  <section class="about_area mb-60">
    <div class="container">
      <div class="about_title">
        <h1> <?php echo $abouttitle;?> </h1>
        <p><?php echo $aboutsubt;?> </p>
      </div>
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-sx-12">
          <div class="about_subtitle">
            <h3><?php echo $attitle;?></h3>

          </div>
          <div class="about_content mb-20">
            <p><?php echo $atsubtitle;?></p>

          </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-sx-12">
          <div class="work_img">
            <img class="img" src="<?php echo $aboutimg['url'];?>" alt="">

          </div>

        </div>

      </div>
    </div>
  </section>


  <!-- About Section End -->


  <!-- Skill section Start -->
  <section class="skill_area mb-40">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-sx-12 ">

          <div class="skill_bar_all">
            <div class="skill_bar_title mb-20">
              <h3><?php echo $skilltitle;?> </h3>
              <p><?php echo $skillsubtitle;?> </p>
              <hr>

            </div>

            <div class="skills_bar_margin">


              <div class="skillbar" data-percent="85">
                <span class="skillbar-title" style="background: #2c504d00;">HTML5</span>
                <p class="skillbar-bar" style="background: #e67e22;"></p>
                <span class="skill-bar-percent"></span>
              </div>
              <!-- End Skill Bar -->

              <div class="skillbar" data-percent="80">
                <span class="skillbar-title" style="background: #2c504d00;">CSS3</span>
                <p class="skillbar-bar" style="background: #3498db;"></p>
                <span class="skill-bar-percent"></span>
              </div>
              <!-- End Skill Bar -->

              <div class="skillbar" data-percent="70">
                <span class="skillbar-title" style="background: #2c504d00;">javascript</span>
                <p class="skillbar-bar" style="background: #F4D003;"></p>
                <span class="skill-bar-percent"></span>
              </div>
              <!-- End Skill Bar -->

              <div class="skillbar" data-percent="65">
                <span class="skillbar-title" style="background: #2c504d00;">jQuery</span>
                <p class="skillbar-bar" style="background: #0866A9;"></p>
                <span class="skill-bar-percent"></span>
              </div>
              <!-- End Skill Bar -->

              <div class="skillbar" data-percent="50">
                <span class="skillbar-title" style="background: #2c504d00;">PHP</span>
                <p class="skillbar-bar" style="background: #838EBA;"></p>
                <span class="skill-bar-percent"></span>
              </div>
              <!-- End Skill Bar -->
              <div class="skillbar" data-percent="70">
                <span class="skillbar-title" style="background: #2c504d00;">WordPress</span>
                <p class="skillbar-bar" style="background: #1D88B9;"></p>
                <span class="skill-bar-percent"></span>
              </div>
              <!-- End Skill Bar -->
              <div class="skillbar" data-percent="65">
                <span class="skillbar-title" style="background: #2c504d00;">Adobe Photoshop</span>
                <p class="skillbar-bar" style="background: #05C3F7;"></p>
                <span class="skill-bar-percent"></span>
              </div>
              <!-- End Skill Bar -->
              <div class="skillbar" data-percent="50">
                <span class="skillbar-title" style="background: #2c504d00;">Adobe Illustrator</span>
                <p class="skillbar-bar" style="background: #F87900;"></p>
                <span class="skill-bar-percent"></span>
              </div>
              <!-- End Skill Bar -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Skill section Start -->

  <div id="service" class="mb-170"></div>

  <!-- Service Section Start -->
  <section id="service" class="service_area ">
    <div class="container">
      <div class="service mb-60">
        <h1><?php echo  $servicetitle;?></h1>
        <p><?php echo  $servicesubtitle;?></p>
      </div>

      <div class="row">
      <?php
          $query = new wp_Query(array(

            'post_type' => 'my_service',
            'post_per_page'=> '-1',
            'order'     => 'DSC'
            
          ));
              if($query -> have_posts()){ 
                  while($query -> have_posts()) : $query -> the_post();
                  ?>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-sx-12">
                          <div class="service_service">
                            <div class="service_icon">
                              <i class="fas fa-laptop"></i>
                            </div>
                            <div class="service_title">
                              <h3><?php the_title();?></h3>
                            </div>
                            <div class="service_text">
                            <?php the_content();?>
                            </div>
                          </div>
                        </div>

                        <?php  
                endwhile;
              }
              ?>




        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-sx-12">
          <div class="service_service">
            <div class="service_icon">
              <i class="fas fa-laptop"></i>
            </div>
            <div class="service_title">
              <h3>WEB DESIGN</h3>
            </div>
            <div class="service_text">
              <p>Qualified web designs and attractive effects which catches visitor's Eye.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-sx-12">
          <div class="service_service">
            <div class="service_icon">
              <i class="fas fa-laptop-code"></i>
            </div>
            <div class="service_title">
              <h3>WEB DEVELOPMENT</h3>
            </div>
            <div class="service_text">
              <p>Clean and fresh issue free code to make your website dynamic perfectly.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-sx-12">
          <div class="service_service">
            <div class="service_icon">
              <i class="fab fa-wordpress-simple"></i>
            </div>
            <div class="service_title">
              <h3>WORDPRESS</h3>
            </div>
            <div class="service_text">
              <p>Wordpress, Magento, E-Commerce, Prestashop Theme Development & Customization.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-sm-12 col-sx-12">
          <div class="service_service">
            <div class="service_icon">
              <i class="far fa-window-restore"></i>
            </div>
            <div class="service_title">
              <h3>RESPONSIVE DESIGN</h3>
            </div>
            <div class="service_text">
              <p>Responsive Design which will be working almost all browsers and screens, Mobile, TaB, PC etc</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-sm-12 col-sx-12">
          <div class="service_service">
            <div class="service_icon">
              <i class="far fa-file-alt"></i>
            </div>
            <div class="service_title">
              <h3>WEB RESEARCH</h3>
            </div>
            <div class="service_text">
              <p>Admin Support, Microsoft Word, Excel, Powerpoint Slide, Internet marketing, Cpa marketing, Data
                mining etc etc.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-sm-12 col-sx-12">
          <div class="service_service">
            <div class="service_icon">
              <i class="fas fa-search-plus"></i>

            </div>
            <div class="service_title">
              <h3>SEO</h3>
            </div>
            <div class="service_text">
              <p>Search Engine Optimization to make website high ranked and bring expected traffics on websites.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Service section Start -->

  <div id="portfolio" class="mb-170"></div>

  <!-- Portfolio Section Start -->
  <section class="portfolio_area">
    <div class="portfolio_title_subtitle mb-60">
      <!-- <h1>PORTFOLIO'S</h1> -->
      <h1><?php echo $worktitle;?></h1>
      <p><?php echo $worksubtitle;?></p>
    </div>
    <div class="container">
      <div class="portfolio_margin">
        <div class="row">
        <?php
          $query = new wp_Query(array(

            'post_type' => 'Latest_Works',
            'post_per_page'=> '-1',
            'order'     => 'DSC'
            
          ));
              if($query -> have_posts()){ 
                  while($query -> have_posts()) : $query -> the_post();
                  ?>

          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-sx-12">
            <div class="portfolio_portfolio">
              <div class="box_scroll_hover"></div>
              <h3><?php the_title();?></h3>
            </div>
          </div>

                
          <?php  
                endwhile;
              }
              ?>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-sx-12">
            <div class="portfolio_portfolio">
              <div class="box_scroll_hover"></div>
              <h3>Consultancy Website Design</h3>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-sx-12">
            <div class="portfolio_portfolio">
              <div class="box_scroll_hover "></div>
              <h3>Childcare Website Design</h3>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-sx-12">
            <div class="portfolio_portfolio">
              <div class="box_scroll_hover"></div>
              <h3>Interior Design & Architecture</h3>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-sx-12 ">
            <div class="portfolio_portfolio">
              <div class="box_scroll_hover"></div>
              <h3>Ac-county Farm Website</h3>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-sx-12">
            <div class="portfolio_portfolio">
              <div class="box_scroll_hover"></div>
              <h3>Digital Product Services</h3>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-sx-12">
            <div class="portfolio_portfolio">
              <div class="box_scroll_hover"></div>
              <h3>Greek Restaurant Website</h3>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-sx-12">
            <div class="portfolio_portfolio">
              <div class="box_scroll_hover"></div>
              <h3>Baby Sitter Website Design</h3>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-sx-12">
            <div class="portfolio_portfolio">
              <div class="box_scroll_hover"></div>
              <h3>Marketing Agency Website</h3>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-sx-12">
            <div class="portfolio_portfolio">
              <div class="box_scroll_hover"></div>
              <h3>Vegetable Shop Website</h3>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>
  <!-- Portfolio Section End -->

  <div id="review" class="mb-120"></div>
  <!-- Review Section Start -->

  <section class="review_area">
    <div class="review_title_subtitle mb-60">
      <h1><?php echo $rtitle;?></h1>
      <p><?php echo $rsubtitle;?></p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-sx-12">
          <div class="iframe_margin">

            <iframe src="<?php echo get_template_directory_uri(); ?>/timeline.php" height="700" width="100%"></iframe>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- Review Section End -->
  <div id="contact" class="mb-170"></div>


</main>
<!-- Main Section End -->

<?php get_footer(); ?>