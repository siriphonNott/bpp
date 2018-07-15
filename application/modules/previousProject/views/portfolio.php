
        <!-- ========== Page Title ========== -->

        <header class="page-title pt-large pt-dark pt-parallax pt-plax-lg-dark-portfolio" data-stellar-background-ratio="0.4">
          <div class="container">
              <div class="row">
                <div class="col-sm-6">
                  <h1>Portfolio</h1>
                  <span class="subheading">Some of our work</span>
                </div>
                <ol class="col-sm-6 text-right breadcrumb">
                  <li><a href="<?php echo base_url(); ?>">Home</a></li>
                  <li><a href="<?php echo base_url('previous-project'); ?>"><?php echo $baseConfig['subTitle']; ?></a></li>
                  <li class="active"><?php echo $baseConfig['project']; ?></li>
                </ol>
              </div>
            </div>
        </header>

        <!-- ========== Portfolio Single ========== -->

        <section class="section container pfolio-single">
          <div class="row ws-m">

             <header class="sec-heading">
              <h2><?php echo ($baseConfig['project']); ?></h2>
              <span class="subheading">The beat of Townhome</span>
            </header>

            <!-- Project Info -->
            <div class="col-md-3 mb-sm-50 project-info">
              <h5>Cavalier Collective Co</h5>
              <ul>
                <li><h6>Date:</h6><span>15/07/15</span></li>
                <li><h6>Link:</h6><a href="#">http://projectdomain.com</a></li>
                <li><h6>Type:</h6><span>Branding, Identity, Webdesign, Strategy, Logo design</span></li>
              </ul>
            </div>

            <!-- Challenge -->
            <div class="col-md-offset-1 col-md-4 mb-sm-50">
              <h5 class="h-alt">The challenge</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
            </div>

            <!-- Solution -->
            <div class="col-md-4">
              <h5 class="h-alt">The solution</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

          </div><!-- / .row -->

          <!-- Slider -->
          <div class="row">
            <div class="col-md-12">
              <ul class="single-img-slider">
                <li><img src="http://placehold.it/1140x470" alt="Project Image"></li>
                <li><img src="http://placehold.it/1140x470/ccc/999" alt="Project Image"></li>
              </ul>
            </div>
          </div><!-- / .row -->

        </section><!-- / .container -->



        <!-- ========== Project Nav ========== -->

        <div class="gray-bg project-nav">
          <div class="container">
            <div class="row">

              <nav>
                <ul class="nav-btns">
                  <li class="prev"><a href="#"><span class="nav-icon linea-arrows-slim-left"></span>  prev project</a></li>
                  <!-- <li class="all"><a href="portfolio-fw-3col.html"><span class="nav-icon linea-arrows-squares"></span></a></li> -->
                  <li class="next"><a href="#">next project <span class="nav-icon linea-arrows-slim-right"></span></a></li>
                </ul>
              </nav>

            </div>
          </div>
        </div><!-- / .project-nav -->
