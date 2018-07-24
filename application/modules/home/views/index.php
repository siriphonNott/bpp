        <!-- ========== Slide ========== -->

        <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto;
            top: 0px; left: 0px; width: 1500px; height: 700px; overflow: hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
                </div>

                <!-- Slides Container -->
                <div data-u="slides" style="position: absolute; left: 0px; top: 0px; width: 1500px; height: 700px; overflow: hidden;">
                    <div>
                        <img data-u="image" src="<?php echo config_item('assets'); ?>images/bg/slides/slide01.jpg" />
                    </div>
                    <div>
                        <img data-u="image" src="<?php echo config_item('assets'); ?>images/bg/slides/slide02.jpg" />
                    </div>
                    <div>
                        <img data-u="image" src="<?php echo config_item('assets'); ?>images/bg/slides/slide03.jpg" />
                    </div>
                    <div>
                        <img data-u="image" src="<?php echo config_item('assets'); ?>images/bg/slides/slide04.jpg" />
                    </div>
                </div>

                <!--#region Bullet Navigator Skin Begin -->
                <!-- Help: https://www.jssor.com/development/slider-with-bullet-navigator.html -->
                <style>
                    .jssorb031 {position:absolute;}
                    .jssorb031 .i {position:absolute;cursor:pointer;}
                    .jssorb031 .i .b {fill:#000;fill-opacity:0.5;stroke:#fff;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.3;}
                    .jssorb031 .i:hover .b {fill:#fff;fill-opacity:.7;stroke:#000;stroke-opacity:.5;}
                    .jssorb031 .iav .b {fill:#fff;stroke:#000;fill-opacity:1;}
                    .jssorb031 .i.idn {opacity:.3;}
                </style>
                <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                    <div data-u="prototype" class="i" style="width:16px;height:16px;">
                        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                        </svg>
                    </div>
                </div>
                <!--#endregion Bullet Navigator Skin End -->

                <!--#region Arrow Navigator Skin Begin -->
                <!-- Help: https://www.jssor.com/development/slider-with-arrow-navigator.html -->
                <style>
                    .jssora051 {display:block;position:absolute;cursor:pointer;}
                    .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
                    .jssora051:hover {opacity:.8;}
                    .jssora051.jssora051dn {opacity:.5;}
                    .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
                </style>
                <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                    <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                    </svg>
                </div>
                <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                    <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                    </svg>
                </div>
                <!--#endregion Arrow Navigator Skin End -->
            </div>
            <!-- Jssor Slider End -->
        </div>

        <!-- ========== Information ========== -->

         <div class="gray-bg info">
          <section class="container section ft-cards-2" style="padding-bottom: 20px;">

            <header class="sec-heading">
              <h1>พบกับโครงการใหม่ล่าสุดของเรา baan puripuri ลาดพร้าว 41<br>ราคาเริ่มต้น 9.7 ล้านบาท*</h1>
              <span class="subheading">
                  ด้วยความความคิด private garden อันโดดเด่นกับสวนตัวหลัวบ้านทุกหลัง<br>
                  รูปแบบบ้านและขนาดจะเหมือนกับโครงการที่แล้วของเรา baan puripuri สตรีวิทยา 2
              </span><br>
              <p>จำนวน 15 หลัง</p>
              <p>
                 ขนาดที่ดิน: เริ่ม 25 ตารางวา<br>
                 พื้นที่ใช้สอย: 233 ตารางเมตร<br>
                3 ห้องนอน / 4 ห้องน้ำ / 2 ที่จอดรถ
              </p>
            </header>

            <div class="row" style="padding-top: 25px;">
              <div class="col-md-6">
                <!-- Item 1 -->
                <div class="ft-card-item wow fadeInUp" data-wow-duration="1.2s">
                  <img src="<?php echo config_item('assets'); ?>images/bg/banner/service01.jpg" alt="service 01">
                  <div class="ft-content">
                    <!-- <h5>Service One</h5> -->
                    <p>ขนาดที่ดิน :  1 - 2 - 43 ไร่ </p>
                    <p>จำนวน unit :  15 หลัง </p>
                    <p>Facilities : Security, ไฟฟ้าใต้ดิน, ถนนในโครงการกว้าง 8 เมตร</p>
                    <p>พื้นที่ใช้สอย : 233 ตารางเมตร</p>
                  </div>
                </div><!-- / .ft-card-item -->
              </div>
              <div class="col-md-6">
                <!-- Item 2 -->
                <div class="ft-card-item wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.2s">
                  <img src="<?php echo config_item('assets'); ?>images/bg/banner/service02.jpg" alt="plan">
                  <div class="ft-content">
                    <!-- <h5>Service Three</h5> -->
                    <p>จำนวนชั้น : 3 ชั้นครึ่ง</p>
                    <p>หน้ากว้าง : 5.35 เมตร</p>
                    <p>ที่จอดรถ  : 2 คัน</p>
                    <p>ห้องนอน  : 3 ห้อง</p>
                  </div>
                </div><!-- / .ft-card-item -->
              </div><!-- / .col-md-6 -->
            </div><!-- / .row -->
                <div class="row">
                    <div class="col-md-12">
                        <img src="<?php echo config_item('assets'); ?>images/bg/plan/plan.png" width="100%" alt="Feature Image">
                    </div>
                </div>
          </section><!-- / .container -->
        </div><!-- / .gray-bg -->

        <section class="container ft-steps-numbers">
            <div class="row section">

              <header class="sec-heading ws-s">
                <h2>Concept</h2>
                <!-- <span class="subheading"></span> -->
              </header>

              <!-- Step 1 -->
              <div class="col-lg-4 col-md-6 mb-sm-100 ft-item wow fadeIn" data-wow-duration="1s">
                <span class="ft-nbr"></span>
                <h4>Concept 1</h4>
                <p>Lariatur, excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est</p>
              </div>

              <!-- Step 2 -->
              <div class="col-lg-4 col-md-6 mb-sm-100 ft-item wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
                <span class="ft-nbr"></span>
                <h4>Concept 2</h4>
                <p>Lariatur, excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est</p>
              </div>

              <!-- Step 3 -->
              <div class="col-lg-4 col-md-6 ft-item wow fadeIn" data-wow-duration="1s" data-wow-delay=".6s">
                <span class="ft-nbr"></span>
                <h4>Concept 3</h4>
                <p>Lariatur, excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est</p>
              </div>

            </div><!-- / .row -->

        </section><!-- / .container -->

        <!-- ========== Cricle Counters - Parallax ========== -->

        <div id="skillsCircles" class="circles-counters">
          <div class="container">
            <div id="counters" class="row count-wrapper">

              <!-- Item 1 -->
              <div class="col-sm-6 col-lg-3 circle-item wow zoomIn" data-wow-duration=".3s" data-wow-delay=".2s">
                <div class="" data-percent="75"><span class=""></span></div>
                <span class="circle-text"></span>
              </div>


            </div><!-- / .row -->
          </div><!-- / .container -->
        </div><!-- / .circles-counters -->

        <!-- ========== Portfolio ========== -->

        <section id="portfolio" class="container-fluid portfolio-layout portfolio-columns-fw">
          <div class="row">
            <header class="sec-heading">
            <h1 style="font-size:40px;">gallery</h1>
              <span class="subheading">
                  Gallery ด้านล่างเป็นบ้านโครงการ baan puripuri ที่สตรีวิทยา 2<br>
                  โครงการใหม่ของเราที่ลาดพร้าว 41 จะเป็นแบบเดียวกัน ขนาดเท่ากันครับ
            </span>
            </header>
          </div><!-- / .row -->

          <!-- Filters -->
          <div class="row">
            <ul id="pfolio-filters" class="portfolio-filters">
              <li class="active"><a href="#" data-filter="*">EXTERIOR</a></li>
              <li><a href="#" data-filter=".livingroom">KITCHEN & DINING</a></li>
              <li><a href="#" data-filter=".bedroom">MASTER BEDROOM</a></li>
              <li><a href="#" data-filter=".bathroom">MASTER BATHROOM</a></li>
              <li><a href="#" data-filter=".relaxroom">PRIVATE GARDEN</a></li>
            </ul>
          </div>


          <div class="row">
            <div id="pfolio">

              <!-- Item 1 -->
              <div class="col-md-4 portfolio-item livingroom">
                <div class="p-wrapper hover-default">
                  <img src="<?php echo config_item('assets'); ?>images/bg/project/project20.jpg" alt="project20">
                  <div class="p-hover">
                    <div class="p-content">
                      <!-- <h4>Project Name</h4> -->
                      <!-- <h6 class="subheading">Sub heading for the project</h6> -->
                    </div>
                  </div>
                  <a href="<?php echo config_item('assets'); ?>images/bg/project/project20.jpg" class="open-btn open-gallery"><i class="fa fa-expand"></i></a>
                </div>
              </div><!-- / .portfolio-item -->

              <!-- Item 2 -->
              <div class="col-md-4 portfolio-item livingroom">
                <div class="p-wrapper hover-default">
                  <img src="<?php echo config_item('assets'); ?>images/bg/project/project21.jpg" alt="project21">
                  <div class="p-hover">
                    <div class="p-content">
                      <!-- <h4>Project Name</h4> -->
                      <!-- <h6 class="subheading">Sub heading for the project</h6> -->
                    </div>
                  </div>
                  <a href="<?php echo config_item('assets'); ?>images/bg/project/project21.jpg" class="open-btn open-gallery"><i class="fa fa-expand"></i></a>
                </div>
              </div><!-- / .portfolio-item -->

              <!-- Item 3 -->
              <div class="col-md-4 portfolio-item bedroom">
                <div class="p-wrapper hover-default">
                  <img src="<?php echo config_item('assets'); ?>images/bg/project/project40.jpg" alt="project40">
                  <div class="p-hover">
                    <div class="p-content">
                      <!-- <h4>Project Name</h4> -->
                      <!-- <h6 class="subheading">Sub heading for the project</h6> -->
                    </div>
                  </div>
                  <a href="<?php echo config_item('assets'); ?>images/bg/project/project40.jpg" class="open-btn open-gallery"><i class="fa fa-expand"></i></a>
                </div>
              </div><!-- / .portfolio-item -->

              <!-- Item 4 -->
              <div class="col-md-4 portfolio-item bathroom">
                <div class="p-wrapper hover-default">
                  <img src="<?php echo config_item('assets'); ?>images/bg/project/project50.jpg" alt="project50">
                  <div class="p-hover">
                    <div class="p-content">
                      <!-- <h4>Project Name</h4> -->
                      <!-- <h6 class="subheading">Sub heading for the project</h6> -->
                    </div>
                  </div>
                  <a href="<?php echo config_item('assets'); ?>images/bg/project/project50.jpg" class="open-btn open-gallery"><i class="fa fa-expand"></i></a>
                </div>
              </div><!-- / .portfolio-item -->

              <!-- Item 5 -->
              <div class="col-md-4 portfolio-item relaxroom">
                <div class="p-wrapper hover-default">
                  <img src="<?php echo config_item('assets'); ?>images/bg/project/project30.jpg" alt="project30">
                  <div class="p-hover">
                    <div class="p-content">
                      <!-- <h4>Project Name</h4> -->
                      <!-- <h6 class="subheading">Sub heading for the project</h6> -->
                    </div>
                  </div>
                  <a href="<?php echo config_item('assets'); ?>images/bg/project/project30.jpg" class="open-btn open-gallery"><i class="fa fa-expand"></i></a>
                </div>
              </div><!-- / .portfolio-item -->

              <!-- Item 6 -->
              <div class="col-md-4 portfolio-item relaxroom">
                <div class="p-wrapper hover-default">
                  <img src="<?php echo config_item('assets'); ?>images/bg/project/project32.jpg" alt="project32">
                  <div class="p-hover">
                    <div class="p-content">
                      <!-- <h4>Project Name</h4> -->
                      <!-- <h6 class="subheading">Sub heading for the project</h6> -->
                    </div>
                  </div>
                  <a href="<?php echo config_item('assets'); ?>images/bg/project/project32.jpg" class="open-btn open-gallery"><i class="fa fa-expand"></i></a>
                </div>
              </div><!-- / .portfolio-item -->

                <!-- Item 7 -->
                <div class="col-md-4 portfolio-item relaxroom">
                <div class="p-wrapper hover-default">
                  <img src="<?php echo config_item('assets'); ?>images/bg/project/project33.jpg" alt="project33">
                  <div class="p-hover">
                    <div class="p-content">
                      <!-- <h4>Project Name</h4> -->
                      <!-- <h6 class="subheading">Sub heading for the project</h6> -->
                    </div>
                  </div>
                  <a href="<?php echo config_item('assets'); ?>images/bg/project/project33.jpg" class="open-btn open-gallery"><i class="fa fa-expand"></i></a>
                </div>
              </div><!-- / .portfolio-item -->

                <!-- Item 8 -->
                <div class="col-md-4 portfolio-item bedroom">
                <div class="p-wrapper hover-default">
                  <img src="<?php echo config_item('assets'); ?>images/bg/project/project42.jpg" alt="project42">
                  <div class="p-hover">
                    <div class="p-content">
                      <!-- <h4>Project Name</h4> -->
                      <!-- <h6 class="subheading">Sub heading for the project</h6> -->
                    </div>
                  </div>
                  <a href="<?php echo config_item('assets'); ?>images/bg/project/project42.jpg" class="open-btn open-gallery"><i class="fa fa-expand"></i></a>
                </div>
              </div><!-- / .portfolio-item -->

                <!-- Item 9 -->
                <div class="col-md-4 portfolio-item livingroom">
                <div class="p-wrapper hover-default">
                  <img src="<?php echo config_item('assets'); ?>images/bg/project/project22.jpg" alt="project22">
                  <div class="p-hover">
                    <div class="p-content">
                      <!-- <h4>Project Name</h4> -->
                      <!-- <h6 class="subheading">Sub heading for the project</h6> -->
                    </div>
                  </div>
                  <a href="<?php echo config_item('assets'); ?>images/bg/project/project22.jpg" class="open-btn open-gallery"><i class="fa fa-expand"></i></a>
                </div>
              </div><!-- / .portfolio-item -->

            </div><!-- / #pfolio -->
          </div><!-- / .row -->
        </section><!-- / .portfolio-columns-fw -->


        <!-- ========== Testimonials ========== -->

        <div class="testimonials-parallax">
          <div class="bg-overlay">

            <div class="t-wrapper t-slider">

              <!-- Testimonial 1 -->
              <blockquote>
                ห้องดีมาก บริการดีครับ
                <span class="et-quote t-type"></span>
                <footer>
                  <cite>
                    <h5 class="h-alt">John Smith</h5>
                    <!-- <h5>John Smith</h5> -->
                  </cite>
                </footer>
              </blockquote>

              <!-- Testimonial 2 -->
              <blockquote>
                ดีไซด์ ดูทันสมัย หรูหรา ถูกใจมากๆ
                <span class="et-quote t-type"></span>
                <footer>
                  <cite>
                    <h5 class="h-alt">Susan Cavin</h5>
                    <!-- <h5>Susan</h5> -->
                  </cite>
                </footer>
              </blockquote>

              <!-- Testimonial 3 -->
              <blockquote>
                 บริการดีมากครับ
                <span class="et-quote t-type"></span>
                <footer>
                  <cite>
                    <h5 class="h-alt">Sunida</h5>
                    <!-- <h5>CEO - Company Name</h5> -->
                  </cite>
                </footer>
              </blockquote>

            </div><!-- / .t-wrapper -->

          </div><!-- / .bg-overlay -->
        </div><!-- / .testimonials-parallax -->


          <!-- ========== Footer Contact ========== -->

        <footer id="contact" class="footer-contact">
          <div class="container-fluid">
            <div class="row">

                <!-- location -->
              <div class="col-lg-6  section location">
                  <img src="<?php echo config_item('assets'); ?>/images/bg/map/map.jpg" width="100%" alt="">
              </div><!-- / .col-lg-6 -->

              <!-- Map and address -->
              <div class="col-lg-6 no-gap contact-info">

                <!-- Show Info Button -->
                <a href="#" class="show-info-link"><i class="fa fa-info"></i>Show info</a>

                <div id="map-canvas" class="footer-map"></div>

                <address class="contact-info-wrapper">
                  <ul>
                    <!-- Address -->
                    <li class="contact-group">
                      <span class="adr-heading">Address</span>
                      <span class="adr-info">ซอย ลาดพร้าว 41 (ภาวนา) แยก 6-7</span>
                    </li>
                    <!-- Address -->
                    <li class="contact-group">
                      <!-- <span class="adr-heading"></span> -->
                      <span class="adr-info">ระยะห่างจากปากซอยลาดพร้าว 41: 1.2 กม.</span>
                      <span class="adr-info">ระยะห่างจากปากซอยลาดพร้าว 35: 1.5 กม.</span>
                    </li>
                    <!-- Email -->
                    <li class="contact-group">
                      <span class="adr-heading">Email</span>
                      <span class="adr-info">sales@baanpuripuri.com</span>
                    </li>
                    <!-- Phone -->
                    <li class="contact-group">
                      <span class="adr-heading">PHONE</span>
                      <span class="adr-info">081 9195901</span>
                    </li>
                  </ul>

                  <a href="#" class="show-map"><span class="linea-basic-geolocalize-05"></span>GOOGLE MAP</a>
                </address>

              </div><!-- / .col-lg-6 -->

            </div><!-- / .row -->
          </div><!-- / .container-fluid -->


          <!-- Social Links -->
          <div class="dark-bg">
            <div class="container footer-social-links">
              <div class="row">

                <ul>
                  <li><a target="_blank" href="http://www.facebook.com/baanpuripuri">facebook</a></li>
                  <li><a href="#">Youtube</a></li>
                </ul>

              </div>
            </div><!-- / .container -->
          </div><!-- / .dark-bg -->
