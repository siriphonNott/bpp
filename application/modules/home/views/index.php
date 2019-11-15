<!-- ========== Slide ========== -->
<div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto;
            top: 0px; left: 0px; width: 1500px; height: 700px; overflow: hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg"
        />
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
        <div>
            <img data-u="image" src="<?php echo config_item('assets'); ?>images/bg/slides/slide05.jpg" />
        </div>
    </div>

    <!--#region Bullet Navigator Skin Begin -->
    <!-- Help: https://www.jssor.com/development/slider-with-bullet-navigator.html -->
    <style>
        .jssorb031 {
            position: absolute;
        }

        .jssorb031 .i {
            position: absolute;
            cursor: pointer;
        }

        .jssorb031 .i .b {
            fill: #000;
            fill-opacity: 0.5;
            stroke: #fff;
            stroke-width: 1200;
            stroke-miterlimit: 10;
            stroke-opacity: 0.3;
        }

        .jssorb031 .i:hover .b {
            fill: #fff;
            fill-opacity: .7;
            stroke: #000;
            stroke-opacity: .5;
        }

        .jssorb031 .iav .b {
            fill: #fff;
            stroke: #000;
            fill-opacity: 1;
        }

        .jssorb031 .i.idn {
            opacity: .3;
        }
    </style>
    <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5"
        data-scale-bottom="0.75">
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
        .jssora051 {
            display: block;
            position: absolute;
            cursor: pointer;
        }

        .jssora051 .a {
            fill: none;
            stroke: #fff;
            stroke-width: 360;
            stroke-miterlimit: 10;
        }

        .jssora051:hover {
            opacity: .8;
        }

        .jssora051.jssora051dn {
            opacity: .5;
        }

        .jssora051.jssora051ds {
            opacity: .3;
            pointer-events: none;
        }
    </style>
    <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75"
        data-scale-left="0.75">
        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
        </svg>
    </div>
    <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75"
        data-scale-right="0.75">
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
            <h1>พบกับโครงการใหม่ล่าสุดของเรา baan puripuri ลาดพร้าว 41
                <br>ราคาเริ่มต้น 10.00 ล้านบาท*</h1>
            <span class="subheading">
                ด้วยความความคิด private garden อันโดดเด่นกับส่วนตัวหลังบ้านทุกหลัง
                <br> รูปแบบบ้านและขนาดจะเหมือนกับโครงการที่แล้วของเรา baan puripuri สตรีวิทยา 2
            </span>
            <br>
            <input onclick="location.href='<?php echo base_url('register')?>';"   type="submit" class="btn-text" value="ลงทะเบียน" style="border: 1px solid; margin:20px 0;">
        </header>
        <div class="row" style="padding-top: 25px;">
            <div class="col-md-6">
                <!-- Item 1 -->
                <div class="ft-card-item wow fadeInUp" data-wow-duration="1.2s">
                    <img src="<?php echo config_item('assets'); ?>images/bg/banner/service01.jpg" alt="service 01">
                    <div class="ft-content info-content-left">
                        <!-- <h5>Service One</h5> -->
                        <div>
                            <div class="info-list-item">ขนาดที่ดิน </div>:&nbsp;&nbsp;&nbsp;&nbsp; เริ่ม 25 ตารางวา
                        </div>
                        <div>
                            <div class="info-list-item">จำนวนยูนิต </div>:&nbsp;&nbsp;&nbsp;&nbsp; 15 หลัง
                        </div>
                        <div>
                            <div class="info-list-item">Facilities </div>:&nbsp;&nbsp;&nbsp;&nbsp; Security, ไฟฟ้าใต้ดิน,
                        </div>
                        <div>
                            <div class="info-list-item"> </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ถนนในโครงการ
                        </div>
                        <div>
                            <div class="info-list-item"> </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กว้าง 8 เมตร
                        </div>
                        <div>
                            <div class="info-list-item">พื้นที่ใช้สอย </div>:&nbsp;&nbsp;&nbsp;&nbsp; 233 ตารางเมตร
                        </div>
                    </div>
                </div>
                <!-- / .ft-card-item -->
            </div>
            <div class="col-md-6">
                <!-- Item 2 -->
                <div class="ft-card-item wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.2s">
                    <img src="<?php echo config_item('assets'); ?>images/bg/banner/service02.jpg" alt="plan">
                    <div class="ft-content info-content-right">
                        <!-- <h5>Service Three</h5> -->
                        <div>
                            <div class="info-list-item">จำนวนชั้น</div>:&nbsp;&nbsp;&nbsp;&nbsp; 3 ชั้นครึ่ง</div>
                        <div>
                            <div class="info-list-item">หน้ากว้าง</div>:&nbsp;&nbsp;&nbsp;&nbsp; 5.35 เมตร</div>
                        <div>
                            <div class="info-list-item">ที่จอดรถ</div>:&nbsp;&nbsp;&nbsp;&nbsp; 2 คัน</div>
                        <div>
                            <div class="info-list-item">ห้องนอน</div>:&nbsp;&nbsp;&nbsp;&nbsp; 3 ห้อง</div>
                        <div>
                            <div class="info-list-item">ห้องน้ำ</div>:&nbsp;&nbsp;&nbsp;&nbsp; 4 ห้อง</div>
                    </div>
                </div>
                <!-- / .ft-card-item -->
            </div>
            <!-- / .col-md-6 -->
        </div>
        <!-- / .row -->
    </section>
    <!-- / .container -->
</div>
<!-- / .gray-bg -->

<!-- ========== Concept ========== -->
<section class="container ft-steps-numbers">
    <div class="row section">
        <header class="sec-heading ws-s concept-header">
            <h1>Concept</h1>
            <!-- <span class="subheading"></span> -->
        </header>

        <section id="concept" class="container-fluid portfolio-layout portfolio-columns-fw">
            <div class="row">
                <div id="concept">
                    <!-- Item 1 -->
                    <div class="col-md-4 concept-item renovation  ft-item wow fadeIn" data-wow-duration="1s">
                        <div class="p-wrapper hover-default">
                            <img src="<?php echo config_item('assets'); ?>images/bg/project/concepts/concept01.png" alt="concept01">
                            <div class="p-hover">
                                <div class="p-content">
                                    <!-- <h4>Project Name</h4> -->
                                    <!-- <h6 class="subheading">Sub heading for the project</h6> -->
                                </div>
                            </div>
                            <a href="<?php echo config_item('assets'); ?>images/bg/project/concepts/concept01.jpg" class="open-btn open-gallery-concept">
                                <i class="fa fa-expand"></i>
                            </a>
                        </div>
                        <div class="concept-description">
                            &nbsp;&nbsp;&nbsp;ส่วนย่อมุมด้านหน้าบ้านเป็นทั้งแผงกันแดดให้ร่มเงากับบ้านลดความร้อนที่จะเข้าสู่อาคาร 
                            และยังเป็นแผงบังตาเพื่อให้เกิดความเป็นส่วนตัวให้กับผู้อยู่อาศัย
                        </div>
                    </div>
                    <!-- / .concept-item -->

                    <!-- Item 2 -->
                    <div class="col-md-4 concept-item renovation ft-item wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="p-wrapper hover-default">
                            <img src="<?php echo config_item('assets'); ?>images/bg/project/concepts/concept02.png" alt="concept02">
                            <div class="p-hover">
                                <div class="p-content">
                                    <!-- <h4>Project Name</h4>
                                    <h6 class="subheading">Sub heading for the project</h6> -->
                                </div>
                            </div>
                            <a href="<?php echo config_item('assets'); ?>images/bg/project/concepts/concept02.jpg" class="open-btn open-gallery-concept">
                                <i class="fa fa-expand"></i>
                            </a>
                        </div>
                        <div class="concept-description">
                            &nbsp;&nbsp;&nbsp;ห้องนั่งเล่นที่ไม่ใช่แค่พื้นที่เหมือนกล่องสี่เหลี่ยมภายในบ้าน ด้วยความสูงแบบ double space ทำให้สวนส่วนนั่งเล่นโปร่ง โล่ง 
                            และประตูกระจกขนาดใหญ่สูง 2 ชั้น จรดเพดาน เชื่อมต่อกับชานนอกบ้านด้วยระดับพื้นที่เท่ากัน เป็นพื้นที่นั่งเล่นขนาดใหญ่ต่อเนื่องออกไปยังสวนส่วนตัวด้านหลัง 
                            เสมือนว่าห้องนั่งเล่นอยู่ท่ามกลางพื้นที่สีเขียว ที่รวมกันหนึ่งเดียวกับธรรมชาติภายนอก
                        </div>
                    </div>
                    <!-- / .concept-item -->

                    <!-- Item 3 -->
                    <div class="col-md-4 concept-item renovation ft-item wow fadeIn" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="p-wrapper hover-default">
                            <img src="<?php echo config_item('assets'); ?>images/bg/project/concepts/concept03.png" alt="concept03">
                            <div class="p-hover">
                                <div class="p-content">
                                    <!-- <h4>Project Name</h4> -->
                                    <!-- <h6 class="subheading">Sub heading for the project</h6> -->
                                </div>
                            </div>
                            <a href="<?php echo config_item('assets'); ?>images/bg/project/concepts/concept03.jpg" class="open-btn open-gallery-concept">
                                <i class="fa fa-expand"></i>
                            </a>
                        </div>
                        <div class="concept-description">
                            &nbsp;&nbsp;&nbsp;เริ่มจากอาคารวางในแนวที่ลดพื้นผิวในการรับแดด แต่รับลมธรรมชาติอย่างเต็มที่ส่วนพื้นที่นั่งเล่นในบ้าน นอกบ้าน 
                            และห้องทานอาหารของเราออกแบบให้ลมธรรมชาติพัดผ่านได้แม้จะปิดประตูหน้าบ้าน เพื่อความปลอดภัยและความเป็นส่วนตัว
                        </div>
                    </div>
                    <!-- / .concept-item -->
                </div>
            </div>
    </div>
    </section>
    <!-- / .row -->
    <div class="row">
        <div class="col-md-12">
            <img src="<?php echo config_item('assets'); ?>images/bg/plan/plan.png" width="100%" alt="Feature Image">
        </div>
    </div>
    <div class="concept-footer">
        <h2>UNIT PLAN</h2>
    </div>
</section>
<!-- / .container -->

<!-- ========== Cricle Counters - Parallax ========== -->
<div id="skillsCircles" class="circles-counters">
    <div class="container">
        <div class="row count-wrapper">
            <!-- Item 1 -->
            <div class="col-sm-6 col-lg-3 circle-item wow zoomIn" data-wow-duration=".3s" data-wow-delay=".2s">
                <div class="" data-percent="75">
                    <span class=""></span>
                </div>
                <span class="circle-text"></span>
            </div>
        </div>
        <!-- / .row -->
    </div>
    <!-- / .container -->
</div>
<!-- / .circles-counters -->

<!-- ========== Portfolio ========== -->
<section id="portfolio" class="container-fluid portfolio-layout portfolio-columns-fw">
    <div class="row">
        <header class="sec-heading">
            <h1>Gallery</h1>
            <span class="subheading">
                Gallery ด้านล่างเป็นบ้านโครงการ baan puripuri ที่สตรีวิทยา 2
                <br> โครงการใหม่ของเราที่ลาดพร้าว 41 จะเป็นแบบเดียวกัน ขนาดเท่ากันครับ
            </span>
        </header>
    </div>
    <!-- / .row -->
    <!-- Filters -->
    <div class="row">
        <ul id="pfolio-filters" class="portfolio-filters">
            <li class="">
                <a href="#" data-filter=".exterior">EXTERIOR</a>
            </li>
            <li>
                <a href="#" data-filter=".kitchenDining">KITCHEN & DINING</a>
            </li>
            <li>
                <a href="#" data-filter=".bedroom">MASTER BEDROOM</a>
            </li>
            <li>
                <a href="#" data-filter=".bathroom">MASTER BATHROOM</a>
            </li>
            <li>
                <a href="#" data-filter=".relaxroom">PRIVATE GARDEN</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div id="pfolio">
            <!-- Item 1 -->
            <div class="col-md-4 portfolio-item exterior">
                <div class="p-wrapper hover-default">
                    <img src="<?php echo config_item('assets'); ?>images/bg/project/exterior/01.jpg" alt="project20">
                    <div class="p-hover">
                        <div class="p-content">
                            <!-- <h4>Project Name</h4> -->
                            <!-- <h6 class="subheading">Sub heading for the project</h6> -->
                        </div>
                    </div>
                    <a href="<?php echo config_item('assets'); ?>images/bg/project/exterior/01.jpg" class="open-btn open-gallery">
                        <i class="fa fa-expand"></i>
                    </a>
                </div>
            </div>
            <!-- / .portfolio-item -->
            <!-- Item 2 -->
            <div class="col-md-4 portfolio-item exterior">
                <div class="p-wrapper hover-default">
                    <img src="<?php echo config_item('assets'); ?>images/bg/project/exterior/02.jpg" alt="project21">
                    <div class="p-hover">
                        <div class="p-content">
                            <!-- <h4>Project Name</h4> -->
                            <!-- <h6 class="subheading">Sub heading for the project</h6> -->
                        </div>
                    </div>
                    <a href="<?php echo config_item('assets'); ?>images/bg/project/exterior/02.jpg" class="open-btn open-gallery">
                        <i class="fa fa-expand"></i>
                    </a>
                </div>
            </div>
            <!-- / .portfolio-item -->
            <!-- Item 3 -->
            <div class="col-md-4 portfolio-item exterior">
                <div class="p-wrapper hover-default">
                    <img src="<?php echo config_item('assets'); ?>images/bg/project/exterior/03.jpg" alt="project40">
                    <div class="p-hover">
                        <div class="p-content">
                            <!-- <h4>Project Name</h4> -->
                            <!-- <h6 class="subheading">Sub heading for the project</h6> -->
                        </div>
                    </div>
                    <a href="<?php echo config_item('assets'); ?>images/bg/project/exterior/03.jpg" class="open-btn open-gallery">
                        <i class="fa fa-expand"></i>
                    </a>
                </div>
            </div>
            <!-- / .portfolio-item -->
            <!-- Item 4 -->
            <div class="col-md-4 portfolio-item kitchenDining" style="">
                <div class="p-wrapper hover-default">
                    <img src="<?php echo config_item('assets'); ?>images/bg/project/kitchen-dinner/01.jpg" alt="project50">
                    <div class="p-hover">
                        <div class="p-content">
                            <!-- <h4>Project Name</h4> -->
                            <!-- <h6 class="subheading">Sub heading for the project</h6> -->
                        </div>
                    </div>
                    <a href="<?php echo config_item('assets'); ?>images/bg/project/kitchen-dinner/01.jpg" class="open-btn open-gallery">
                        <i class="fa fa-expand"></i>
                    </a>
                </div>
            </div>
            <!-- / .portfolio-item -->
            <!-- Item 5 -->
            <div class="col-md-4 portfolio-item kitchenDining" style="">
                <div class="p-wrapper hover-default">
                    <img src="<?php echo config_item('assets'); ?>images/bg/project/kitchen-dinner/02.jpg" alt="project30">
                    <div class="p-hover">
                        <div class="p-content">
                            <!-- <h4>Project Name</h4> -->
                            <!-- <h6 class="subheading">Sub heading for the project</h6> -->
                        </div>
                    </div>
                    <a href="<?php echo config_item('assets'); ?>images/bg/project/kitchen-dinner/02.jpg" class="open-btn open-gallery">
                        <i class="fa fa-expand"></i>
                    </a>
                </div>
            </div>
            <!-- / .portfolio-item -->
            <!-- Item 6 -->
            <div class="col-md-4 portfolio-item kitchenDining" style="">
                <div class="p-wrapper hover-default">
                    <img src="<?php echo config_item('assets'); ?>images/bg/project/kitchen-dinner/03.jpg" alt="project32">
                    <div class="p-hover">
                        <div class="p-content">
                            <!-- <h4>Project Name</h4> -->
                            <!-- <h6 class="subheading">Sub heading for the project</h6> -->
                        </div>
                    </div>
                    <a href="<?php echo config_item('assets'); ?>images/bg/project/kitchen-dinner/03.jpg" class="open-btn open-gallery">
                        <i class="fa fa-expand"></i>
                    </a>
                </div>
            </div>
            <!-- / .portfolio-item -->
            <!-- Item 7 -->
            <div class="col-md-4 portfolio-item bedroom" style="">
                <div class="p-wrapper hover-default">
                    <img src="<?php echo config_item('assets'); ?>images/bg/project/master-bedroom/01.jpg" alt="project33">
                    <div class="p-hover">
                        <div class="p-content">
                            <!-- <h4>Project Name</h4> -->
                            <!-- <h6 class="subheading">Sub heading for the project</h6> -->
                        </div>
                    </div>
                    <a href="<?php echo config_item('assets'); ?>images/bg/project/master-bedroom/01.jpg" class="open-btn open-gallery">
                        <i class="fa fa-expand"></i>
                    </a>
                </div>
            </div>
            <!-- / .portfolio-item -->
            <!-- Item 8 -->
            <div class="col-md-4 portfolio-item bedroom" style="">
                <div class="p-wrapper hover-default">
                    <img src="<?php echo config_item('assets'); ?>images/bg/project/master-bedroom/02.jpg" alt="project42">
                    <div class="p-hover">
                        <div class="p-content">
                            <!-- <h4>Project Name</h4> -->
                            <!-- <h6 class="subheading">Sub heading for the project</h6> -->
                        </div>
                    </div>
                    <a href="<?php echo config_item('assets'); ?>images/bg/project/master-bedroom/02.jpg" class="open-btn open-gallery">
                        <i class="fa fa-expand"></i>
                    </a>
                </div>
            </div>
            <!-- / .portfolio-item -->
            <!-- Item 9 -->
            <div class="col-md-4 portfolio-item bedroom" style="">
                <div class="p-wrapper hover-default">
                    <img src="<?php echo config_item('assets'); ?>images/bg/project/master-bedroom/03.jpg" alt="project22">
                    <div class="p-hover">
                        <div class="p-content">
                            <!-- <h4>Project Name</h4> -->
                            <!-- <h6 class="subheading">Sub heading for the project</h6> -->
                        </div>
                    </div>
                    <a href="<?php echo config_item('assets'); ?>images/bg/project/master-bedroom/03.jpg" class="open-btn open-gallery">
                        <i class="fa fa-expand"></i>
                    </a>
                </div>
            </div>
            <!-- / .portfolio-item -->
            <!-- Item 10 -->
            <div class="col-md-4 portfolio-item bathroom" style="">
                <div class="p-wrapper hover-default">
                    <img src="<?php echo config_item('assets'); ?>images/bg/project/master-bathroom/01.jpg" alt="project22">
                    <div class="p-hover">
                        <div class="p-content">
                            <!-- <h4>Project Name</h4> -->
                            <!-- <h6 class="subheading">Sub heading for the project</h6> -->
                        </div>
                    </div>
                    <a href="<?php echo config_item('assets'); ?>images/bg/project/master-bedroom/01.jpg" class="open-btn open-gallery">
                        <i class="fa fa-expand"></i>
                    </a>
                </div>
            </div>
            <!-- / .portfolio-item -->
            <!-- Item 11 -->
            <div class="col-md-4 portfolio-item relaxroom" style="">
                <div class="p-wrapper hover-default">
                    <img src="<?php echo config_item('assets'); ?>images/bg/project/private-garden/01.jpg" alt="project22">
                    <div class="p-hover">
                        <div class="p-content">
                            <!-- <h4>Project Name</h4> -->
                            <!-- <h6 class="subheading">Sub heading for the project</h6> -->
                        </div>
                    </div>
                    <a href="<?php echo config_item('assets'); ?>images/bg/project/private-garden/01.jpg" class="open-btn open-gallery">
                        <i class="fa fa-expand"></i>
                    </a>
                </div>
            </div>
            <!-- / .portfolio-item -->
            <!-- Item 12 -->
            <div class="col-md-4 portfolio-item relaxroom" style="">
                <div class="p-wrapper hover-default">
                    <img src="<?php echo config_item('assets'); ?>images/bg/project/private-garden/02.jpg" alt="project22">
                    <div class="p-hover">
                        <div class="p-content">
                            <!-- <h4>Project Name</h4> -->
                            <!-- <h6 class="subheading">Sub heading for the project</h6> -->
                        </div>
                    </div>
                    <a href="<?php echo config_item('assets'); ?>images/bg/project/private-garden/02.jpg" class="open-btn open-gallery">
                        <i class="fa fa-expand"></i>
                    </a>
                </div>
            </div>
            <!-- / .portfolio-item -->
            <!-- Item 13 -->
            <div class="col-md-4 portfolio-item relaxroom" style="">
                <div class="p-wrapper hover-default">
                    <img src="<?php echo config_item('assets'); ?>images/bg/project/private-garden/03.jpg" alt="project22">
                    <div class="p-hover">
                        <div class="p-content">
                            <!-- <h4>Project Name</h4> -->
                            <!-- <h6 class="subheading">Sub heading for the project</h6> -->
                        </div>
                    </div>
                    <a href="<?php echo config_item('assets'); ?>images/bg/project/private-garden/03.jpg" class="open-btn open-gallery">
                        <i class="fa fa-expand"></i>
                    </a>
                </div>
            </div>
            <!-- / .portfolio-item -->
            <!-- Item 14 -->
            <div class="col-md-4 portfolio-item relaxroom" style="">
                <div class="p-wrapper hover-default">
                    <img src="<?php echo config_item('assets'); ?>images/bg/project/private-garden/04.jpg" alt="project22">
                    <div class="p-hover">
                        <div class="p-content">
                            <!-- <h4>Project Name</h4> -->
                            <!-- <h6 class="subheading">Sub heading for the project</h6> -->
                        </div>
                    </div>
                    <a href="<?php echo config_item('assets'); ?>images/bg/project/private-garden/04.jpg" class="open-btn open-gallery">
                        <i class="fa fa-expand"></i>
                    </a>
                </div>
            </div>
            <!-- / .portfolio-item -->
            <!-- Item 15 -->
            <div class="col-md-4 portfolio-item relaxroom" style="">
                <div class="p-wrapper hover-default">
                    <img src="<?php echo config_item('assets'); ?>images/bg/project/private-garden/05.jpg" alt="project22">
                    <div class="p-hover">
                        <div class="p-content">
                            <!-- <h4>Project Name</h4> -->
                            <!-- <h6 class="subheading">Sub heading for the project</h6> -->
                        </div>
                    </div>
                    <a href="<?php echo config_item('assets'); ?>images/bg/project/private-garden/05.jpg" class="open-btn open-gallery">
                        <i class="fa fa-expand"></i>
                    </a>
                </div>
            </div>
            <!-- / .portfolio-item -->

        </div>
        <!-- / #pfolio -->
    </div>
    <!-- / .row -->
</section>
<!-- / .portfolio-columns-fw -->

<!-- ========== Testimonials ========== -->
<div class="testimonials-parallax">
    <div class="bg-overlay">
        <!-- Publication -->
        <section class="container-fluid portfolio-layout portfolio-columns-fw section-review">
            <header class="sec-heading review-header">
                <h1>Review</h1>
                <span class="subheading"></span>
            </header>
            <div class="row">
                <div class="col-md-4 col-sm-12 item-vdo">
                    <div class="video-responsive">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/mCu-sTBKqBE" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="description-video">
                        <p>"ครัวชั้น 2 ของทาวน์โฮม"</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 item-vdo">
                    <div class="video-responsive">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/QnVfh1NeGdw" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="description-video">
                        <p>"Private Backyard"</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 item-vdo">
                    <div class="video-responsive">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/vU3b9PMAm-E" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="description-video">
                        <p>"Master Bedroom ในทาวน์โฮม"</p>
                    </div>
                </div>
            </div>
            <!-- / .row -->
            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-4 col-sm-12 item-vdo">
                    <div class="video-responsive">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/0kxjCjrYwgQ" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="description-video">
                        <p>"รออกแบบห้องน้ำไว้หน้าบ้าน"</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 item-vdo">
                    <div class="video-responsive">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/MJgNJiaXaCI" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="description-video">
                        <p>"จัดการกับงานระบบ"</p>
                    </div>
                </div>
                <div class="col-md-4 col-md-4 col-sm-12 item-vdo">
                    <div class="video-responsive">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/ew9NUrRojlg" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="description-video">
                        <p>"รีวิวทาวน์โฮม บ้านภูริปุรี สตรีวิทยา 2"</p>
                    </div>
                </div>
            </div>
            <!-- / .row -->
        </section>
        <!-- / .container -->
    </div>
    <!-- / .bg-overlay -->
</div>
<!-- / .testimonials-parallax -->


<!-- ========== Footer Contact ========== -->

<footer id="contact" class="footer-contact">
    <div class="container-fluid">
        <div class="row">
            <!-- location -->
            <div class="col-lg-6  section location" style="padding-top:9%;">
                <img src="<?php echo config_item('assets'); ?>/images/bg/map/map.jpg" width="100%" alt="">
            </div>
            <!-- / .col-lg-6 -->

            <!-- Map and address -->
            <div class="col-lg-6 no-gap contact-info">
                <!-- Show Info Button -->
                <a href="#" class="show-info-link">
                    <i class="fa fa-info"></i>Show info</a>

                <div class="google-maps footer-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.515534996632!2d100.58638651422457!3d13.808053287030855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29dae770858f9%3A0x671d89bdbe77fc02!2zYmFhbiBwdXJpcHVyaSA6IOC4peC4suC4lOC4nuC4o-C5ieC4suC4pyA0MQ!5e0!3m2!1sen!2sth!4v1534064008981"
                        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
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
                            <span class="adr-heading">CALL CENTER</span>
                            <span class="adr-info">02 168 0000</span>
                        </li>
                    </ul>
                    <a href="#" class="show-map">
                        <span class="linea-basic-geolocalize-05"></span>GOOGLE MAP</a>
                </address>
            </div>
            <!-- / .col-lg-6 -->
        </div>
        <!-- / .row -->
    </div>
    <!-- / .container-fluid -->

    <!-- Social Links -->
    <div class="dark-bg">
        <div class="container footer-social-links">
            <div class="row">

                <ul>
                    <li>
                        <a target="_blank" href="http://www.facebook.com/baanpuripuri">facebook</a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.youtube.com/watch?v=ew9NUrRojlg">Youtube</a>
                    </li>
                </ul>

            </div>
        </div>
        <!-- / .container -->
    </div>
    <!-- / .dark-bg -->