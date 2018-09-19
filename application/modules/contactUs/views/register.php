        <!-- ========== Page Title ========== -->

        <header class="page-title pt-large pt-dark  pt-plax-lg-dark-register" data-stellar-background-ratio="0.4">
          <div class="container">
              <div class="row">

                <div class="col-sm-6">
                  <h1>Register</h1>
                  <span class="subheading"></span>
                </div>
                <ol class="col-sm-6 text-right breadcrumb">
                  <li><a href="<?php echo base_url(); ?>">Home</a></li>
                  <li class="active">Register</li>
                </ol>

              </div>
            </div>
        </header>

        <!-- ========== Contact ========== -->

        <section id="contact" class="contact-3">
          <div class="container">
            <div class="row contact">
              <div class="col-md-12 col-lg-offset-2 col-lg-8">
                <div class="form-wrapper">
                  <div class="from-header">
                    <h2>ลงทะเบียนเยี่ยมชมโครงการ</h2>
                    <p>โครงการใหม่ล่าสุดของเรา baan puripuri ลาดพร้าว 41</p>
                    <p>ราคาเริ่มต้น 9.5 ล้านบาท*</p>
                  </div>

                  <form class="form-minimal register-form">

                    <!-- Name -->
                    <div class="row form-register ">
                        <div class="col-md-6">
                            <label for="name-contact-3">First Name *</label>
                            <input type="text" name="firstname" id="fisrtname" class="form-control validate-locally" placeholder="Enter your firstname">
                        </div>
                        <div class="col-md-6">
                            <label for="name-contact-3">Last Name *</label>
                            <input type="text" name="lastname" id="lastname" class="form-control validate-locally" placeholder="Enter your lastname">
                        </div>
                    </div>

                    <!-- Tel & Email -->
                    <div class="row form-register">
                        <div class="col-md-6">
                            <label for="name-contact-3">Tel *</label>
                            <input type="text" name="tel" id="tel" class="form-control validate-locally allownumericwithoutdecimal" placeholder="Enter your tel">
                        </div>
                        <div class="col-md-6">
                            <label for="name-contact-3">Email</label>
                            <input type="text" name="email" id="email" class="form-control validate-locally" placeholder="Enter your email">
                        </div>
                    </div>

                    <div class="row form-register">
                        <div class="col-md-6">
                            <label for="name-contact-3">Line ID</label>
                            <input type="text" name="lineID" id="=lineID" class="form-control validate-locally" placeholder="Enter your Line ID">
                        </div>
                        <div class="col-md-6">
                            <label for="name-contact-3">วันที่นัดหมาย</label>
                            <div class="ui calendar" id="appointmentDate">
                                <div class="ui input left icon" style="width: 100%;">
                                    <i class="calendar icon"></i>
                                    <input type="text" class="form-control"  placeholder="Date">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row form-register">
                         <div class="col-md-6">
                            <label for="name-contact-3">งบประมาณในการซื้อ</label>
                            <select name="budget" id="budget" class="form-control ui selection dropdown">
                                <option value="">กรุณาเลือกรายการ</option>
                                <option value="ต่ำกว่า 5 ล้าน">ต่ำกว่า 5 ล้าน</option>
                                <option value="5 - 8 ล้าน">5 - 8 ล้าน</option>
                                <option value="8- 10 ล้าน">8- 10 ล้าน</option>
                                <option value="10-15 ล้าน">10-15 ล้าน</option>
                                <option value="15-20 ล้าน">15-20 ล้าน</option>
                                <option value="20 ล้านขึ้นไป">20 ล้านขึ้นไป</option>
                            </select>
                        </div>

                         <div class="col-md-6">
                            <label for="name-contact-3">ท่านมีความต้องการเข้าอาศัยช่วงใด</label>
                            <select name="liveIn" id="liveIn" class="form-control ui selection dropdown">
                                <option value="">กรุณาเลือกรายการ</option>
                                <option value="ภายใน 1 เดือน">ภายใน 1 เดือน</option>
                                <option value="ภายใน 6 เดือน">ภายใน 6 เดือน</option>
                                <option value="ภายใน 1 ปี">ภายใน 1 ปี</option>
                                <option value="ภายใน 2 ปี">ภายใน 2 ปี</option>
                            </select>
                        </div>
                    </div>

                     <div class="row form-register">
                         <div class="col-md-6">
                            <label for="name-contact-3">ท่านทราบข้อมูลโครงการจากช่องทางใด</label>
                            <select name="chanel" id="chanel" class="form-control ui selection dropdown">
                                <option value="">กรุณาเลือกรายการ</option>
                                <option value="Facebook">Facebook</option>
                                <option value="เว็บไซต์">เว็บไซต์</option>
                                <option value="อีเมลล์">อีเมลล์</option>
                                <option value="แผ่นป้ายโฆษณา">แผ่นป้ายโฆษณา</option>
                                <option value="เพื่อนบอกต่อ">เพื่อนบอกต่อ</option>
                                <option value="อื่นๆ (โปรดระบุเหตุผล)">อื่นๆ (โปรดระบุเหตุผล)</option>
                            </select>
                        </div>
                        <div class="col-md-6 nobody chanel-reason">
                            <label for="name-contact-3"></label>
                            <input type="text" id="reason" class="form-control validate-locally" placeholder="Enter your reason">
                        </div>
                    </div>

                    <input type="submit" class="btn-text" value="ลงทะเบียน" style="border: 1px solid; margin-top:20px;margin-top: 50px;">

                    <!-- Ajax Message -->
                    <div class="ajax-message alert alert-danger alert-dismissible wow fadeInUp nobody" role="alert">
                        <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
                        <div id="ajax-message"></div>
                    </div>

                  </form>
                </div>
              </div>

            </div>
          </div><!-- / .container -->
        </section><!-- / .contact-3 -->

        <div class="ui tiny modal" style="position: static!important;">
            <div class="header" id="headerAlerting">WARNING</div>
            <div class="content" id="alertingContent">
            </div>
            <div class="actions">
                <div class="ui cancel button">Close</div>
            </div>
        </div>
     
