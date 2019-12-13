<!-- Footer Section Start -->
<?php
// Get options
$options = get_option('freelancerdaud_theme'); // unique id of the framework
$contacttitle = $options['CONTACT_title'];  // id of the field
$contactsubtitle = $options['CONTACT_subtitle'];  // id of the field
?>

<footer>
      <!-- Contract Section Start -->
      <section class="contract_area mb-60">
        <div class="container">
          <div class="contract_title_subtitle mb-40">
            <h1><?php echo $contacttitle;?></h1>
            <p><?php echo $contactsubtitle;?></p>
            <hr>
          </div>
          <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-sx-12">
              <div class="contract_us">
                <form action="">
                  <input type="text" placeholder="First Name">
                  <input type="text" name="lastname" placeholder="Last Name">
                  <input type="email" placeholder="E-Mail">
                  <textarea name="" id="" placeholder="Message" cols="72" rows="5"></textarea>
                  <input class="submit_contract" type="submit" value="SUBMIT">
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Contract Section End -->
      <section class="copyright_area">
        <div class="container">
          <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-sx-12">
              <div class="footer_icon">
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-linkedin"></i></a>
                <a href=""><i class="fab fa-twitter-square"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-youtube"></i></a>
                <a href=""><i class="fab fa-pinterest"></i></a>
                  
              </div>

                </div>
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-sx-12">
              <div class="copyright_text">
                <p>Copyright © 2019 FREELANCER DAUD | All Rights Reserved. Privacy Policy</p>
              </div>
            </div>
          </div>
        </div>

      </section>

    

    </footer>
    <!-- Footer Section End -->

   
    

    <?php wp_footer();?>
  </body>

  </html>




