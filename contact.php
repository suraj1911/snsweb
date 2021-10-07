<?php include('header.php') ?>
  <main id="main">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h1 data-aos="fade-up text-center">Contact</h1>
          <p data-aos="fade-up">Get in touch with us</p>
        </div>

        <div class="row justify-content-center">

          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>
                Oppsite Podar international School, 
                Ambegaon, Pune, 411046
                Maharashatra,
                India</p>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>info@snsinnovation.in<br>contact@snsinnovation.in</p>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+91 9970 618321 <br>+91 9011 878209</p>
              
            </div>
          </div>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
          <div class="col-xl-9 col-lg-12 mt-4">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">

        <div class="clients-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/5.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/6.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/5.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/6.jpg" class="img-fluid" alt=""></div>
            
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

  </main><!-- End #main -->
  <?php include('footer.php') ?>