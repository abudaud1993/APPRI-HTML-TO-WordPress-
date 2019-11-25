
<?php get_header();?>

   <!-- main start  -->
   <main>
    <!-- slider-area start -->
    <section class="slider-area slider-height d-flex" data-background="<?php echo get_template_directory_uri();?>/img/background-img/header-backgrind.png">
      <div class="container">
        <div class="row">
          <div class="col-xl-7 col-lg-9 ">
            <div class="shape-img">
              <img class="shape-1 shape" src="<?php echo $appritheme['slider-image-shap1']['url']?>"/>
              <img class="shape-2 shape" src="<?php echo $appritheme['slider-image-shap2']['url']?>" alt="" />
            </div>
            <div class="slider-text slider-content-space">
              <h2><?php echo $appritheme['slider-title'];?></h2>
              <p>
              <?php echo $appritheme['slider-subtitle'];?>
              </p>
              <div class="slider-btn">
                <a href="<?php esc_url($appritheme['slider-button1-url']);?>" class="btn"><?php echo $appritheme['slider-button1'];?></a>
                <a href="<?php esc_url($appritheme['slider-button2-url']);?>" class="btn btn-border"><?php echo $appritheme['slider-button2'];?></a>
              </div>
            </div>
          </div>

          <div class="col-xl-5 d-none d-xl-block">
            <div class="slider-img abbs">
              <img class="shape shape-3" src="<?php echo $appritheme['slider-image-shap3']['url']?>" alt="" />
              <img class="shape shape-4" src="<?php echo $appritheme['slider-image-shap4']['url']?>" alt="" />
              <img class="main-img" src="<?php echo $appritheme['slider-image']['url']?>" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- slider-area End -->
    <section class="fact-sction">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 offset-xl-2 col-lg-8  offset-lg-2   ">



            <div class="row fact-paren justify-content-around">
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <div class="single-fact  text-conter">
                  <h2><span class="counter"><?php echo $appritheme['counter-number'];?></span><span>+</span></h2>
                  <span class="span-text"><?php echo $appritheme['counter-text'];?></span>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <div class="single-fact text-conter">
                  <h2><span class="counter"><?php echo $appritheme['counter-number0'];?></span><span>+</span></h2>
                  <span class="span-text"><?php echo $appritheme['counter-text0'];?></span>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <div class="single-fact text-conter">
                  <h2><span class="counter"><?php echo $appritheme['counter-number1'];?></span><span>+</span></h2>
                  <span class="span-text"><?php echo $appritheme['counter-text1'];?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="first-content-section">
      <div class="container">
        <div class="row justify-content-around">
          <div class="col-xl-6 col-lg-6">
            <div class="content-1 text-center">
              <h2><?php echo $appritheme['unique_features-title'];?></h2>
              <p>
              <?php echo $appritheme['unique_features-subtitle'];?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="shape-area-2">
      <div class="shape-section-2">
        <div class="out-side-shape">
          <img class="shape-5" src="<?php echo get_template_directory_uri();?>/img/shape/shape05.png" alt="">
          <img class="shape-6" src="<?php echo get_template_directory_uri();?>/img/shape/shape06.png" alt="">
        </div>
      </div>

    </section>


    
    <section class="features-area">
      <div class="container">
        <div class="row ">

          <?php
          $query = new wp_Query(array(

            'post_type' => 'post',
            
          ));
              if($query -> have_posts()){ 
                  while($query -> have_posts()) : $query -> the_post(); 
                  $more = get_post_meta(get_the_ID(), 'more', true);
                  ?>

                              <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="single-features text-center">
                                  <div class="features-icon">
                                  <a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnails-frist',array('class' => 'img'));?></a>
                                  </div>
                                  <div class="features-text">
                                    <a href="<?php the_permalink();?>"><h3>
                                      <?php the_title();?>
                                    </h3></a>
                                    
                                    <?php the_excerpt();?>
                                    <a class="mb" href="<?php the_permalink();?>"><?php echo $more; ?></a>                                     
                                  </div>
                                </div>
                              </div>
                  <?php  
                endwhile;
              }
              ?>
            </div>
          </section>

          <section class="features-area">
      <div class="container">
        <div class="row ">
        
        <div class="col-xl-12 col-lg-12">
            <div class="content-1a text-center">
              <h2><?php echo $appritheme['unique_features-title'];?></h2>
              <p>
              <?php echo $appritheme['unique_features-subtitle'];?>
              </p>
            </div>
          </div>

          


          <?php 
             $queryUF = new wp_Query(array(

                'post_type' => 'Unique_Features',
                'post_per_page'=> '-1',
                'order'     => 'DSC'
              ));

            if($queryUF -> have_posts()){
                while($queryUF -> have_posts()) : $queryUF -> the_post();
                ?>
              <div class="col-xl-4 col-lg-4 col-md-4">
            <div class="single-features text-center">
              <div class="features-icon">
               
                <?php the_post_thumbnail();?>
              </div>
              <div class="features-text">
                <h3><?php the_title();?></h3>

              <?php the_content();?>

              </div>
            </div>
          </div>
                <?php 
              endwhile;

            }

            ?>
          
          </div>
          </div>
    </section>

    <section class="video-area">
      <div class="container">

        <iframe width="100%" height="450px" src="https://www.youtube.com/embed/tgbNymZ7vqY?playlist=tgbNymZ7vqY&loop=1">
        </iframe>

      </div>
    </section>

    <section class="video-area-2">
      
      <div class="container">
        <div class="vedio-bg" data-background="<?php echo $appritheme['watch-video-bg-image']['url'];?>"></div>
        <div class="row">
          <div class="col-xl-12 col-lg-12">

            <div class="text-center mt_30 position-1">

              <div class="video-text">
                <h3><?php echo $appritheme['watch-video-title'];?></h3>
              </div>

              <div class="popup-video">
                <a id="mypopup" href="<?php echo $appritheme['watch-video-image']['url'];?>"> <?php echo  $appritheme['watch-video-icon-title'];?></a>

              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <section class="text-area-2">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12">
            <div class="text-content text-center">
              <h3><?php echo $appritheme['How-It-Works-title'];?></h3>
              <p><?php echo $appritheme['How-It-Works-subtitle'];?></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="post-area">
      <div class="post-1">
        <div class="container">
          <div class="row">
            <div class="col-xl-7 col-lg-7">
              <div class="first-p-img">
                <img src="<?php echo $appritheme['How-It-Works-post-image']['url'];?>" alt="">
              </div>
            </div>
            <div class="col-xl-5 col-lg-5">
              <div class="first-p-text">
                <h3><?php echo $appritheme['How-It-Works-post-title'];?></h3>
                <p><?php echo $appritheme['How-It-Works-post-subtitle'];?></p>
                <a class="btn" href="<?php echo esc_url($appritheme['How-It-Works-post-button_url']['0']);?>"><?php echo $appritheme['How-It-Works-post-button'];?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="post-area">
      <div class="post-2 ">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-lg-5">
              <div class="secend-p-text ">
                <h3><?php echo $appritheme['How-It-Works-post-title'];?></h3>
                <p><?php echo $appritheme['How-It-Works-post-subtitle'];?></p>
                <a class="btn" href="<?php echo esc_url($appritheme['How-It-Works-post-button_url1']['0']);?>"><?php echo $appritheme['How-It-Works-post-button1'];?></a>
              </div>
            </div>
            <div class="col-xl-7 col-lg-7">
              <div class="secend-p-img">
                <img src="<?php echo $appritheme['How-It-Works-post-image1']['url'];?>" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="text-area-2">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12">
            <div class="text-content text-center">
              <h3><?php echo $appritheme['Pricing-Plan-title'];?></h3>
              <p><?php echo $appritheme['Pricing-Plan-subtitle'];?></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="price-area">
      <div class="container">
        <div class="row">
          <div class="tab-nav">
            <div class="tab-menu text-center">
              <ul class="nav price-nav" id="myTab" role="tablist">

                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="pill" href="#home" role="tab"
                    aria-controls="pills-home" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="pill" href="#profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false">Profile</a>
                </li>


                <!-- <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                </li> -->

              </ul>
            </div>
            <div class="tab-content my-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="price-shape">
                      <div class="price-titel">
                        <h4>Primary</h4>
                      </div>
                      <div class="price-rate">
                        <h2>$0<span class="sel">/</span><span>mo</span></h2>
                      </div>
                      <div class="price-list">
                        <ul>
                          <li>1GB storage</li>
                          <li>1 project limit</li>
                          <li>2 contributors limit</li>
                          <li> Unlimited viewers</li>
                          <li>Team account</li>
                        </ul>
                      </div>
                      <div class="price-button">
                        <a class="btn price-btn " href="#">Get Started Now</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="price-shape">
                      <div class="price-titel">
                        <h4>Primary</h4>
                      </div>
                      <div class="price-rate">
                        <h2>$10<span class="sel">/</span><span>mo</span></h2>
                      </div>
                      <div class="price-list">
                        <ul>
                          <li>1GB storage</li>
                          <li>1 project limit</li>
                          <li>2 contributors limit</li>
                          <li> Unlimited viewers</li>
                          <li>Team account</li>
                        </ul>
                      </div>
                      <div class="price-button">
                        <a class="btn price-btn active" href="#">Get Started Now</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="price-shape">
                      <div class="price-titel">
                        <h4>Primary</h4>
                      </div>
                      <div class="price-rate">
                        <h2>$15<span class="sel">/</span><span>mo</span></h2>
                      </div>
                      <div class="price-list">
                        <ul>
                          <li>1GB storage</li>
                          <li>1 project limit</li>
                          <li>2 contributors limit</li>
                          <li> Unlimited viewers</li>
                          <li>Team account</li>
                        </ul>
                      </div>
                      <div class="price-button">
                        <a class="btn price-btn " href="#">Get Started Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="price-shape">
                      <div class="price-titel">
                        <h4>Primary</h4>
                      </div>
                      <div class="price-rate">
                        <h2>$50<span class="sel">/</span><span>ye</span></h2>
                      </div>
                      <div class="price-list">
                        <ul>
                          <li>1GB storage</li>
                          <li>1 project limit</li>
                          <li>2 contributors limit</li>
                          <li> Unlimited viewers</li>
                          <li>Team account</li>
                        </ul>
                      </div>
                      <div class="price-button">
                        <a class="btn price-btn " href="#">Get Started Now</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="price-shape">
                      <div class="price-titel">
                        <h4>Primary</h4>
                      </div>
                      <div class="price-rate">
                        <h2>$75<span class="sel">/</span><span>ye</span></h2>
                      </div>
                      <div class="price-list">
                        <ul>
                          <li>1GB storage</li>
                          <li>1 project limit</li>
                          <li>2 contributors limit</li>
                          <li> Unlimited viewers</li>
                          <li>Team account</li>
                        </ul>
                      </div>
                      <div class="price-button">
                        <a class="btn price-btn active" href="#">Get Started Now</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="price-shape">
                      <div class="price-titel">
                        <h4>Primary</h4>
                      </div>
                      <div class="price-rate">
                        <h2>$100<span class="sel">/</span><span>yr</span></h2>
                      </div>
                      <div class="price-list">
                        <ul>
                          <li>1GB storage</li>
                          <li>1 project limit</li>
                          <li>2 contributors limit</li>
                          <li> Unlimited viewers</li>
                          <li>Team account</li>
                        </ul>
                      </div>
                      <div class="price-button">
                        <a class="btn price-btn" href="#">Get Started Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="testimonial-area">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
            <div class="test-titil text-center">
              <h2>Testimonial</h2>
            </div>
            <div class="testimonial-active text-center">
              <div class="testimonial-item">
                <p> <i> Appri enables you to define cross-channel profiles and improve audience segmentation based on
                    rules and triggers to enable perfectly timed.</i></p>
                <span><b> Freelancer daud </b> - CEO. Marker</span>
              </div>
              <div class="testimonial-item">
                <p> <i> Appri enables you to define cross-channel profiles and improve audience segmentation based on
                    rules and triggers to enable perfectly timed.</i></p>
                <span><b> MD ABU DAUD </b> - CEO. Marker</span>
              </div>
              <div class="testimonial-item">
                <p> <i> Appri enables you to define cross-channel profiles and improve audience segmentation based on
                    rules and triggers to enable perfectly timed.</i></p>
                <span><b> DEDAR MOLLA </b> - CEO. Marker</span>
              </div>
              <div class="testimonial-item">
                <p> <i> Appri enables you to define cross-channel profiles and improve audience segmentation based on
                    rules and triggers to enable perfectly timed.</i></p>
                <span><b> DEDAR MOLLA </b> - CEO. Marker</span>
              </div>
              <div class="testimonial-item">
                <p> <i> Appri enables you to define cross-channel profiles and improve audience segmentation based on
                    rules and triggers to enable perfectly timed.</i></p>
                <span><b> DEDAR MOLLA </b> - CEO. Marker</span>
              </div>
              <div class="testimonial-item">
                <p> <i> Appri enables you to define cross-channel profiles and improve audience segmentation based on
                    rules and triggers to enable perfectly timed.</i></p>
                <span><b> DEDAR MOLLA </b> - CEO. Marker</span>
              </div>
              <div class="testimonial-item">
                <p> <i> Appri enables you to define cross-channel profiles and improve audience segmentation based on
                    rules and triggers to enable perfectly timed.</i></p>
                <span><b> DEDAR MOLLA </b> - CEO. Marker</span>
              </div>
            </div>
            <div class="testimonial-img-active text-center  ">
            <div class="test-item"><img src="<?php echo get_template_directory_uri();?>/img/testimonial-img/dedarnolla.png" alt=""></div>
              <div class="test-item"><img src="<?php echo get_template_directory_uri();?>/img/testimonial-img/jabir.png" alt=""></div>
              <div class="test-item"><img src="<?php echo get_template_directory_uri();?>/img/testimonial-img/dedarnolla71.png" alt=""></div>
              <div class="test-item"><img src="<?php echo get_template_directory_uri();?>/img/testimonial-img/dedarnolla13.png" alt=""></div>
              <div class="test-item"><img src="<?php echo get_template_directory_uri();?>/img/testimonial-img/dedarnolla51.png" alt=""></div>
              <div class="test-item"><img src="<?php echo get_template_directory_uri();?>/img/testimonial-img/dedarnolla1.png" alt=""></div>
              <div class="test-item"><img src="<?php echo get_template_directory_uri();?>/img/testimonial-img/dedarnolla21.png" alt=""></div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <section class="text-area-2">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12">
            <div class="text-content text-center">
              <h3><?php echo $appritheme['App-Screenshot-title'];?></h3>
              <p><?php echo $appritheme['App-Screenshot-subtitle'];?></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="onely-img">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12">
            <img src="<?php echo $appritheme['App-Screenshot-image']['url'];?>" alt="">
          </div>
        </div>
      </div>
    </section>
    <section class="text-area-2">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12">
            <div class="text-content text-center">
              <h3><?php echo $appritheme['FAQS-title'];?></h3>
              <p><?php echo $appritheme['FAQS-subtitle'];?></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="faqs-area">
      <div class="container">
        <div class="row">
          <div class="col-xl-5 col-lg-5  pd-reight">

            <img src="<?php echo $appritheme['FAQS-image']['url'];?>"alt="">

          </div>
          <div class="col-xl-7 col-lg-7">
            <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                      aria-controls="collapseOne">
                      <?php echo $appritheme['How-to-Buy-This-title'];?>
                    </a>
                  </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                  data-parent="#accordionExample">
                  <div class="card-body">
                  <?php echo $appritheme['How-to-Buy-This-subtitle'];?>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                    <a data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                      aria-controls="collapseTwo">
                      <?php echo $appritheme['refundable-title'];?>
                    </a>
                  </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                  <?php echo $appritheme['refundable-subtitle'];?>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <a data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                      aria-controls="collapseThree">
                      <?php echo $appritheme['free-title'];?>
                    </a>
                  </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                  <?php echo $appritheme['free-subtitle'];?>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </section>
    <section class="text-area-3">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 ">
            <div class="text-content text-center item-content">
              <h3><?php echo $appritheme['Trusted-title'];?></h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="item-area-slider">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12">
            <div class="owl-carousel owl-theme">
              <div class="item selder-opacity"><img src="<?php echo get_template_directory_uri();?>/img/item-selder/APPRI.png" alt=""></div>
              <div class="item selder-opacity"><img src="<?php echo get_template_directory_uri();?>/img/item-selder/envata.png" alt=""></div>
              <div class="item selder-opacity"><img src="<?php echo get_template_directory_uri();?>/img/item-selder/graphicriver.png" alt=""></div>
              <div class="item selder-opacity"><img src="<?php echo get_template_directory_uri();?>/img/item-selder/videohive.png" alt=""></div>

            </div>

          </div>
        </div>
      </div>
    </section>
    <section class="latest-news-area">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12">
            <div class="text-content text-center latest-news">
              <h2><?php echo $appritheme['Latest-News-title'];?></h2>
              <p><?php echo $appritheme['Latest-News-subtitle'];?></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="blog-post">
      <div class="container">
        <div class="row">

        <?php 
             $querybp = new wp_Query(array(

                'post_type' => 'blog_post',
                'post_per_page'=> '-1',
                'order'     => 'DSC'
              ));

            if($querybp -> have_posts()){
                while($querybp -> have_posts()) : $querybp -> the_post();
                ?>
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 blog-post-mb">
            <div class="blog-post-img">
            <?php the_post_thumbnail();?>
            </div>
            <div class="blog-post-text">
              <div class="bg-color">
                  <a href="#"><span > <i class="fas fa-user-shield"></i> <?php the_author();?></span></a>  <span><i class="far fa-calendar-alt i-colors"></i> <?php echo get_the_date('d-M-Y');?></span>
                <h4><?php the_title();?></h4>
              </div>
            </div>
          </div>

          <?php 
              endwhile;

            }

            ?>
        </div>
      </div>
    </section>
    

    <section class="subscript-area">
      <div class="container">
        <div class="bag">
          <div class="row">
              <div class="col-xl-3 col-lg-3 col-md-12">
                <div class="subscript-title">
                  <h4>Subscribe Newsletter</h4>
                </div>
              </div>
              <div class="col-xl-9 col-lg-9 col-md-12">
                <form action="">
                  <input type="email" name="" id="" placeholder="E-mail">
                  <button class="btn">SUBSCRIPT NOW</button>
                </form>

                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
    </main>
  <!-- main End -->

    <?php get_footer();?>
