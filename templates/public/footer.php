
    <!--====== FOOTER PART START ======-->
<?php foreach($setting as $setting){} 
foreach($data as $data){}
?>
   
    <footer id="footer" class="footer-area">
        <div class="footer-widget pt-130 pb-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="footer-content text-center">
                            <a href="index.html">
                                <img src="<?php echo base_url()."assets/images/".$setting->slogo; ?>" alt="Logo">
                            </a>
                            
                           



                            <ul>
                                <li><a href=" <?php echo $data->fb; ?>"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="<?php echo $data->twitter; ?>"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="<?php echo $data->instgram; ?>"><i class="lni-instagram-filled"></i></a></li>
                                <li><a href="<?php echo $data->linkedlist; ?>"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div> <!-- footer content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        <div class="footer-copyright pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text text-center pt-20">
                            <p>Design By Shoaib Ghulam </p>
                        </div> <!-- copyright text -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->







    <!--====== jquery js ======-->
    <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Parallax js ======-->
    <script src="<?php echo base_url(); ?>assets/js/parallax.min.js"></script>

    <!--====== Counter Up js ======-->
    <script src="<?php echo base_url(); ?>assets/js/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.counterup.min.js"></script>


    <!--====== Appear js ======-->
    <script src="<?php echo base_url(); ?>assets/js/jquery.appear.min.js"></script>

    <!--====== Scrolling js ======-->
    <script src="<?php echo base_url(); ?>assets/js/scrolling-nav.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.easing.min.js"></script>


    <!--====== Main js ======-->
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

</body>

</html>
