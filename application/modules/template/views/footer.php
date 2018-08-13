    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <small>&copy; 2018 baan puripuri All Rights Reserved.</small>
                </div>

                <div class="col-md-6">
                    <small>
                        <a href="#page-top" class="pull-right to-the-top">TO THE TOP
                            <i class="fa fa-angle-up"></i>
                        </a>
                    </small>
                </div>

            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
    </div>
    <!-- / .copyright -->
    </footer>
    <!-- / .footer-contact -->

    <!-- ========== Scripts ========== -->

    <script src="<?php echo config_item('assets'); ?>js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo config_item('assets'); ?>js/vendor/google-fonts.js"></script>
    <script src="<?php echo config_item('assets'); ?>js/vendor/jquery.easing.js"></script>
    <script src="<?php echo config_item('assets'); ?>js/vendor/jquery.waypoints.min.js"></script>
    <script src="<?php echo config_item('assets'); ?>js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo config_item('assets'); ?>js/vendor/bootstrap-hover-dropdown.min.js"></script>
    <script src="<?php echo config_item('assets'); ?>js/vendor/smoothscroll.js"></script>
    <script src="<?php echo config_item('assets'); ?>js/vendor/jquery.localScroll.min.js"></script>
    <script src="<?php echo config_item('assets'); ?>js/vendor/jquery.scrollTo.min.js"></script>
    <script src="<?php echo config_item('assets'); ?>js/vendor/jquery.stellar.min.js"></script>
    <script src="<?php echo config_item('assets'); ?>js/vendor/jquery.parallax.js"></script>
    <script src="<?php echo config_item('assets'); ?>js/vendor/slick.min.js"></script>
    <script src="<?php echo config_item('assets'); ?>js/vendor/jquery.easypiechart.min.js"></script>
    <script src="<?php echo config_item('assets'); ?>js/vendor/countup.min.js"></script>
    <script src="<?php echo config_item('assets'); ?>js/vendor/isotope.min.js"></script>
    <script src="<?php echo config_item('assets'); ?>js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo config_item('assets'); ?>js/vendor/wow.min.js"></script>
    <script src="<?php echo config_item('assets'); ?>js/vendor/jquery.ajaxchimp.js"></script>
    <script src="<?php echo config_item('assets'); ?>js/vendor/kenburns.js"></script>
    <script src="<?php echo config_item('assets'); ?>js/vendor/jquery.mb.YTPlayer.min.js"></script>
    <script src="<?php echo config_item('assets'); ?>js/jssor.slider.min.js"></script>
    <!-- Definity JS -->
    <script src="<?php echo config_item('assets'); ?>js/main.js"></script>
    <!-- Additional JS -->
    <?php
foreach ($linksJavascript as $value) {
    echo '<script src="' . $value . '"></script>' . PHP_EOL;
}
?>

    </body>
</html>