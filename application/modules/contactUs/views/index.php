        <!-- ========== Page Title ========== -->

        <header class="page-title pt-large pt-dark  pt-plax-lg-dark-contact" data-stellar-background-ratio="0.4">
          <div class="container">
              <div class="row">

                <div class="col-sm-6">
                  <h1>Contact</h1>
                  <span class="subheading"></span>
                </div>
                <ol class="col-sm-6 text-right breadcrumb">
                  <li><a href="<?php echo base_url(); ?>">Home</a></li>
                  <li class="active">Contact</li>
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
                    <h2>Contact</h2>
                    <p>Tel: 0819195901</p>
                    <p>Email: Sales@baanpuripuri.com</p>
                  </div>

                  <form class="form-minimal contact-form">

                    <!-- Name -->
                    <div class="form-group">
                      <label for="name-contact-3">Name *</label>
                      <input type="text" name="name" id="name-contact-3" class="form-control validate-locally" placeholder="Enter your name">
                      <span class="pull-right alert-error"></span>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                      <label for="email-contact-3">Email *</label>
                      <input type="email" name="email" id="email-contact-3" class="form-control validate-locally" placeholder="Enter your email">
                      <span class="pull-right alert-error"></span>
                    </div>

                    <!-- Phone -->
                    <div class="form-group">
                      <label for="email-contact-3">Phone</label>
                      <input type="tel" name="phone" id="phone-contact-3" maxlength="11" class="form-control allownumericwithoutdecimal" placeholder="Enter your phone">
                    </div>

                    <!-- Message -->
                    <div class="form-group">
                      <label for="message-contact-1">Message *</label>
                      <textarea class="form-control" name="message" id="message-contact-1" rows="5" placeholder="Put your message here"></textarea>
                    </div>

                    <input type="submit" class="btn-text" value="Send Message">

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
