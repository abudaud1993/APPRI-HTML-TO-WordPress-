<?php global $appritheme;?>
  

   <!-- footer start  -->
   <footer>
    <section class="now-available-area text-center">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12">
            <h1><?php echo $appritheme['Available-title'];?></h1>

          </div>
        </div>
      </div>
    </section>
<section class="">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
        <div class="">
          <img src="<?php echo $appritheme['Available-Apps-image']['url'];?>" alt="">

        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
          <div class="">
            <img src="<?php echo $appritheme['Available-Apps-image0']['url'];?>" alt="">
            
          </div>
        </div>
    </div>
  </div>
</section>
<div class="container">
  <hr>
</div>
<section class="copyright-area">
  <div class="container">
    <div class="row">

          <div class="col-xl-4  col-lg-4 ">

    <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-1') ) : ?>

              <p class="copy"> <strong>Copy Right By</strong>:- FREELANCER DAUD</p>

            <?php endif; ?>

            </div>

            <div class="col-xl-4  col-lg-4 ">
    <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-2') ) : ?>

              <p class="copy"> <strong>Copy Right By</strong>:- FREELANCER DAUD</p>

            <?php endif; ?>

            </div>

            <div class="col-xl-4  col-lg-4 ">

    <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-3') ) : ?>

              <p class="copy"> <strong>Copy Right By</strong>:- FREELANCER DAUD</p>

            <?php endif; ?>

            </div>

    </div>
  </div>
</section>
  </footer>
  <!-- footer End  -->
  
  
        <script src="<?php echo get_template_directory_uri();?>js/jquery-3.4.1.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/jquery.ajax-libs.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/_popper.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/_bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/jquery.waypoints.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/fontawesome.all.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/jquery.counterup.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/slick.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/jquery.meanmenu.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/jdb_popup.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>

 <?php wp_footer(); ?>

</body>

</html>