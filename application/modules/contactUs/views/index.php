<!-- ========== Page Title ========== -->

        <header class="page-title pt-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <h1>Contact</h1>
                <span class="subheading">Love to hear from you</span>
              </div>
              <ol class="col-sm-6 text-right breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Elements</a></li>
                <li class="active">Contact</li>
              </ol>
            </div>
          </div>
        </header>

        <!-- ========== Contact ========== -->

        <section id="contact" class="section contact-2">

          <header class="sec-heading">
            <h2>Say Hello</h2>
            <span class="subheading">We love to discuss your idea</span>
          </header>

          <!-- Map -->
          <div id="map-canvas" class="gmap map-wide"></div>

          <div class="footer-litle ws-m">
            <div class="gray-bg">

              <!-- Contact Info -->
              <address>
                <ul>
                  <!-- Address -->
                  <li>
                    <span class="linea-basic-map adr-icon"></span>
                    <div class="adr-group">
                      <span class="adr-heading">Address</span>
                      <span class="adr-info">100 Street, Il, Us</span>
                    </div>
                  </li>

                  <!-- Email -->
                  <li>
                    <span class="linea-basic-paperplane adr-icon"></span>
                    <div class="adr-group">
                      <span class="adr-heading">Email</span>
                      <span class="adr-info">sayhello@email.com</span>
                    </div>
                  </li>

                  <!-- Phone -->
                  <li>
                    <span class="linea-basic-smartphone adr-icon"></span>
                    <div class="adr-group">
                      <span class="adr-heading">Phone</span>
                      <span class="adr-info">+ 123 4567 890</span>
                    </div>
                  </li>
                </ul>
              </address>
            </div><!-- / .gray-bg -->
          </div>

          <div class="container">

            <!-- Contact Form -->
            <div class="row">
              <form action="../assets/contact-form/contact-form.php" method="POST" id="contact-form-1" class="form-ajax">
                  <div class="col-md-offset-2 col-md-4 wow fadeInUp" data-wow-duration="1s">

                    <!-- Name -->
                    <div class="form-group">
                      <input type="text" name="name" id="name-contact-1" class="form-control validate-locally" placeholder="Enter your name">
                      <label for="name-contact-1">Name</label>
                      <span class="pull-right alert-error"></span>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                      <input type="email" name="email" id="email-contact-1" class="form-control validate-locally" placeholder="Enter your email">
                      <label for="email-contact-1">Email</label>
                      <span class="pull-right alert-error"></span>
                    </div>

                  </div>

                  <div class="col-md-4 wow fadeInUp" data-wow-duration="1s">

                    <!-- Message -->
                    <div class="form-group">
                      <textarea name="message" id="message-contact-1" class="form-control" rows="5" placeholder="Your Message"></textarea>
                      <label for="message-contact-1">Message</label>
                    </div>
                    <div>
                      <input type="submit" class="btn pull-right" value="Send Message">
                    </div>

                    <!-- Ajax Message -->
                    <div class="ajax-message col-md-12 no-gap"></div>

                  </div><!-- / .col-md-4 -->

                </form>
            </div><!-- / .row -->
          </div><!-- / .container -->
        </section><!-- / .contact-1 -->
