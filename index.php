<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>True Dialer</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/td.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    .our_mission {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: left;
    }

    .trueafter {
      width: 600px;
      height: 70vh;
    }

    .spamcall_img {
      height: 70vh;
    }

    @media (max-width: 1200px) {
      .trueafter {
      width: 700px;
      height: 60vh;
    }
    }

  </style>
</head>

<body class="index-page">

  <!-- header -->
  <?php include './components/header.php'; ?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Stay protected from fraudulent, annoying, and unwanted calls.</h1>
            <p data-aos="fade-up" data-aos-delay="100">Enjoy peace of mind with True Dialer — your smart solution for spam protection and caller ID. Block unwanted calls, avoid scams, and stay focused with effortless call filtering. Experience clean, secure, and hassle-free communication..</p> 
          </div>
          <div class="col-lg-6 order-1 order-lg-4 hero-img" data-aos="zoom-out">
            <img src="assets/img/aftertrue.png" class="img-fluid rounded trueafter" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 our_mission" data-aos="fade-up" data-aos-delay="200">
            <div class="content our_content">
              <h2>Our Mission</h2>
              <h4>Our mission is to provide a safer and smarter calling experience by protecting users from spam, fraud, and unwanted calls. With advanced caller ID, real-time spam detection, and contact management tools, True Dialer helps users communicate confidently and stay organized.</h4>
              <p>
                Our goal is to enhance user privacy and security with advanced True Dialer features and smart spam protection — ensuring every call is safe, trusted, and interruption-free.
              </p>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center justify-content-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/spamcallllll.png" class="img-fluid spamcall_img rounded" alt="">
          </div>

        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Alt Features Section -->
   <section id="alt-features" class="alt-features section">

  <div class="container">

    <div class="row gy-5">

      <div class="col-xl-7 d-flex order-2 order-xl-1" data-aos="fade-up" data-aos-delay="200">

        <div class="row align-self-center gy-5">

          <div class="col-md-6 icon-box">
            <i class="bi bi-telephone-inbound"></i>
            <div>
              <h4>Smart Caller ID</h4>
              <p>Instantly identify incoming calls with accurate and real-time caller information.</p>
            </div>
          </div>

          <div class="col-md-6 icon-box">
            <i class="bi bi-shield-check"></i>
            <div>
              <h4>Spam Call Protection</h4>
              <p>Block spam, robocalls, and fraud attempts before they reach you.</p>
            </div>
          </div>

          <div class="col-md-6 icon-box">
            <i class="bi bi-journal-check"></i>
            <div>
              <h4>Verified Numbers</h4>
              <p>Know which numbers are trusted with our verified badge system for safe communication.</p>
            </div>
          </div>

          <div class="col-md-6 icon-box">
            <i class="bi bi-database-lock"></i>
            <div>
              <h4>Privacy First</h4>
              <p>Your data stays secure. We prioritize your privacy with end-to-end protection.</p>
            </div>
          </div>

          <div class="col-md-6 icon-box">
            <i class="bi bi-lightning"></i>
            <div>
              <h4>Fast Caller Lookup</h4>
              <p>Quickly search unknown numbers and get caller info in seconds.</p>
            </div>
          </div>

          <div class="col-md-6 icon-box">
            <i class="bi bi-person-lines-fill"></i>
            <div>
              <h4>Organized Contacts</h4>
              <p>Keep your contacts neat and synced, making it easy to manage and connect.</p>
            </div>
          </div>

        </div>

      </div>

      <div class="col-xl-5 d-flex align-items-center order-1 order-xl-2" data-aos="fade-up" data-aos-delay="100">
        <img src="assets/img/hackers.jpg" class="img-fluid" alt="True Dialer Features">
      </div>

    </div>

  </div>

</section>
<!-- /Alt Features Section -->

    <!-- Services Section -->
   <section id="services" class="services section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Services</h2>
    <p>Explore What True Dialer Offers</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item item-cyan position-relative">
          <i class="bi bi-person-badge icon"></i>
          <h3>Caller Identification</h3>
          <p>Identify unknown callers instantly with real-time data to know who’s calling before you pick up.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item item-orange position-relative">
          <i class="bi bi-shield-slash icon"></i>
          <h3>Spam Blocking</h3>
          <p>Automatically block spam and robocalls using our continuously updated global spam list.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item item-teal position-relative">
          <i class="bi bi-patch-check-fill icon"></i>
          <h3>Verified Numbers</h3>
          <p>Trust who you’re talking to with our verified caller badge that helps you avoid scams and frauds.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item item-red position-relative">
          <i class="bi bi-journal-code icon"></i>
          <h3>Call Log Management</h3>
          <p>Get detailed call histories and organize them with tags, filters, and notes for easy follow-ups.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item item-indigo position-relative">
          <i class="bi bi-lock icon"></i>
          <h3>Privacy Control</h3>
          <p>We value your privacy. Customize what you share and manage permissions with full control.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item item-pink position-relative">
          <i class="bi bi-cloud-download icon"></i>
          <h3>Cloud Backup</h3>
          <p>Securely back up your contacts and call logs to the cloud for easy restore on any device.</p>
        </div>
      </div><!-- End Service Item -->

    </div>

  </div>

</section>
<!-- /Services Section -->

    <!-- Faq Section -->
   <section id="faq" class="faq section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>F.A.Q</h2>
    <p>Frequently Asked Questions</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row">

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

        <div class="faq-container">

          <div class="faq-item faq-active">
            <h3>How does True Dialer identify unknown callers?</h3>
            <div class="faq-content">
              <p>True Dialer uses a real-time database of global phone numbers to provide accurate caller ID. When you receive a call, we instantly fetch the most relevant information to show who’s calling.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>

          <div class="faq-item">
            <h3>Will True Dialer block important calls by mistake?</h3>
            <div class="faq-content">
              <p>Our spam detection system is smart and constantly learning. While rare, if a call is wrongly flagged, you can mark it as safe and it won’t be blocked again. We also allow you to whitelist trusted numbers.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>

          <div class="faq-item">
            <h3>Is my personal data safe with True Dialer?</h3>
            <div class="faq-content">
              <p>Absolutely. Your data is encrypted and never shared without your consent. We strictly follow data privacy laws to ensure your information stays protected and private.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>

        </div>

      </div><!-- End Faq Column -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">

        <div class="faq-container">

          <div class="faq-item">
            <h3>Do I need an internet connection for True Dialer to work?</h3>
            <div class="faq-content">
              <p>Yes, an internet connection is required to fetch live caller information and update our spam list. However, basic call and contact functions still work offline.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>

          <div class="faq-item">
            <h3>Can I back up my contacts and call history?</h3>
            <div class="faq-content">
              <p>Yes! True Dialer offers cloud backup options so your contacts and call logs are securely saved and easily restored when needed.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>

          <div class="faq-item">
            <h3>How can I report a spam or fraud number?</h3>
            <div class="faq-content">
              <p>You can report numbers directly from your call history or caller details screen. This helps improve protection for the entire True Dialer community.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>

        </div>

      </div><!-- End Faq Column -->

    </div>

  </div>

</section>
<!-- /Faq Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Our hard working team</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>Block # 5, 2nd Floor, Time Square Commercial</p>
                  <p>Phase 7 Bahria Town, Islamabad</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+92 (51) 2000637</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p> hr@zoobiapps.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="500">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday</p>
                  <p>9:00AM - 06:00PM</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

 <!-- footer here below -->
<?php include './components/footer.php'; ?>
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
