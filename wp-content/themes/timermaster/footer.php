<!--
            ==================================================
            Footer Section Start
            ================================================== -->
            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="copyright">Copyright: <span><script>document.write(new Date().getFullYear())</script></span> Design and Developed by <a href="http://www.Themefisher.com" target="_blank">Themefisher</a>. <br> 
                                Get More 
                                <a href="https://themefisher.com/free-bootstrap-templates/" target="_blank">
                                    Free Bootstrap Templates
                                </a>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <div class="login">
                                <?php 
                                        if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-1') ) :	
                                ?>

                                            <p class="copy"> <strong>Copy Right By</strong>:- FREELANCER DAUD</p>

                                <?php 
                                        endif; 
                                ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <!-- Social Media -->
                            <ul class="social">
                                <li>
                                    <a href="http://wwww.fb.com/themefisher" class="Facebook">
                                        <i class="ion-social-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://wwww.twitter.com/themefisher" class="Twitter">
                                        <i class="ion-social-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="Linkedin">
                                        <i class="ion-social-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://wwww.fb.com/themefisher" class="Google Plus">
                                        <i class="ion-social-googleplus"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer> <!-- /#footer -->
            
        <?php wp_footer(); ?>
 	</body>
</html>