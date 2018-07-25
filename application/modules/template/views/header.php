<?php
$navbar_top = '';
$nav_home = '';
$contentPath = get_defined_vars()['contentPath'];
//Check Home , Coming soon and 404
//|| strpos($contentPath, 'comingsoon') !== false || strpos($contentPath, 'error/404') !== false
$navbar_top = 'navbar navbar-default ';
if ($this->router->fetch_class() === 'home' || $this->router->fetch_class() === 'townhome') {
    $navbar_top .= 'navbar-static-top nav-home';
    $nav_home = 'nav-home';
} else {
    $navbar_top .= 'navbar-fixed-top navbar-trans';
}

?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>baan puripuri</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo config_item('assets'); ?>styles/vendor/bootstrap.min.css">
        <!-- Fonts -->
        <link rel="stylesheet" href="<?php echo config_item('assets'); ?>fonts/et-lineicons/css/style.css">
        <link rel="stylesheet" href="<?php echo config_item('assets'); ?>fonts/linea-font/css/linea-font.css">
        <link rel="stylesheet" href="<?php echo config_item('assets'); ?>fonts/fontawesome/css/font-awesome.min.css">
        <!-- Slider -->
        <link rel="stylesheet" href="<?php echo config_item('assets'); ?>styles/vendor/slick.css">
        <!-- Lightbox -->
        <link rel="stylesheet" href="<?php echo config_item('assets'); ?>styles/vendor/magnific-popup.css">
        <!-- Animate.css -->
        <link rel="stylesheet" href="<?php echo config_item('assets'); ?>styles/vendor/animate.css">


        <!-- Definity CSS -->
        <link rel="stylesheet" href="<?php echo config_item('assets'); ?>styles/main.css">
        <link rel="stylesheet" href="<?php echo config_item('assets'); ?>styles/responsive.css">
        <!-- Font -->
        <link rel="stylesheet" href="<?php echo config_item('assets'); ?>styles/fonts/sukhumvitSet/stylesheet.css">

        <!-- JS -->
        <script src="<?php echo config_item('assets'); ?>js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body id="page-top">

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- ========== Preloader ========== -->
        <div class="preloader">
          <img src="<?php echo config_item('assets'); ?>images/loader.svg" alt="Loading...">
        </div>


        <!-- ========== Navigation ========== -->
        <nav class="<?php echo $navbar_top; ?>">
          <div class="container">
            <div class="navbar-header <?php echo $nav_home; ?>" >
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <!-- Logo -->
              <a class="navbar-brand" href="<?php echo base_url(); ?>"><img class="navbar-logo" src="<?php echo config_item('assets'); ?>images/logo.png" alt="bpp Logo" width="50%" ></a>
            </div><!-- / .navbar-header -->

            <!-- Navbar Links -->
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav <?php echo $nav_home; ?>">

                <!-- TOWNHOME -->
                <li class="dropdown mega-fw">
                  <a href="<?php echo base_url('townhome'); ?>">TOWNHOME</span></a>
                </li><!-- / Home -->

                <!-- HOME OFFICE -->
                <li class="dropdown">
                  <a href="<?php echo base_url('home-office'); ?>">HOME OFFICE </span></a>
                </li><!-- / Elements -->

                <!-- ABOUT US -->
                <li class="dropdown mega-fw">
                  <a href="<?php echo base_url('about-us'); ?>">ABOUT US </span></a>
                </li><!-- / Pages -->

                <!-- PREVIOUS PROJECT -->
                <li class="dropdown mega-fw">
                  <a href="<?php echo base_url('previous-project'); ?>">PREVIOUS PROJECT </span></a>
                </li><!-- / Portfolio -->

                <!-- CONTACT US -->
                <li class="dropdown">
                  <a href="<?php echo base_url('contact-us'); ?>">CONTACT US </span></a>
                </li><!-- / Blog -->

                <!-- JOIN US -->
                <li class="dropdown">
                  <a href="<?php echo base_url('join-us'); ?>">JOIN US </span></a>
                </li><!-- / Blog -->
              </ul><!-- / .nav .navbar-nav -->

              </ul><!-- / .nav .navbar-nav .navbar-right -->

            </div><!--/.navbar-collapse -->
          </div><!-- / .container -->
        </nav><!-- / .navbar -->

        <?php $this->load->view('template/sidebar');?>

