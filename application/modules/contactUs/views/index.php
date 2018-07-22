        <!-- ========== Page Title ========== -->

        <header class="page-title pt-large pt-dark  pt-plax-lg-dark-contact" data-stellar-background-ratio="0.4">
          <div class="container">
              <div class="row">

                <div class="col-sm-6">
                  <h1>Contact</h1>
                  <span class="subheading">Love to hear from you</span>
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

                  <form action="../assets/contact-form/contact-form.php" method="POST" class="form-minimal form-ajax">

                    <!-- Name -->
                    <div class="form-group">
                      <input type="text" name="name" id="name-contact-3" class="form-control validate-locally">
                      <label for="name-contact-3">Name *</label>
                      <span class="pull-right alert-error"></span>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                      <input type="email" name="email" id="email-contact-3" class="form-control validate-locally">
                      <label for="email-contact-3">Email *</label>
                      <span class="pull-right alert-error"></span>
                    </div>

                    <!-- Phone -->
                    <div class="form-group ws-s">
                      <input type="tel" name="phone" id="phone-contact-3" class="form-control">
                      <label for="email-contact-3">Phone</label>
                    </div>

                    <!-- Message -->
                    <div class="form-group">
                      <p>Just say hello, or tell me about your project</p>
                      <textarea class="form-control" name="message" id="message-contact-1" rows="5"></textarea>
                      <label for="message-contact-1">Message *</label>
                    </div>

                    <input type="submit" class="btn-text" value="Send Message">

                    <!-- Ajax Message -->
                    <div class="ajax-message"></div>

                  </form>
                </div>
              </div>

            </div>
          </div><!-- / .container -->
        </section><!-- / .contact-3 -->
