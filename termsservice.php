<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Terms of Service - True Dialer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f9fa;
      color: #343a40;
      margin: 0;
      padding-top: 60px;
    }

    main {
      max-width: 900px;
      margin: auto;
      padding: 20px;
      background-color: #ffffff;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
      border-radius: 10px;
    }

    /* Prevent horizontal overflow */
    html,
    body {
      max-width: 100%;
      overflow-x: hidden;
    }


    h2,
    h3 {
      color: #0d6efd;
      margin-bottom: 15px;
    }

    .first_header,
    .second_header,
    .third_header,
    .fourth_header,
    .fifth_header,
    .sixth_header,
    .seventh_header,
    .eighth_header {
      margin-bottom: 40px;
    }

    .first_top h2 {
      margin-top: 150px;
      text-align: center;
      margin-bottom: 40px;
      color: rgb(59, 112, 133);
    }

    .third_header .spannn {
      color: black;
      font-weight: 500;
    }

    .sixth_header .not_tobe {
      color: rgb(172, 86, 153);
      font-weight: 600;
    }

    p {
      line-height: 1.6;
    }

    @media (max-width: 768px) {
      main {
        padding: 15px;
      }

      h2 {
        font-size: 1.75rem;
      }

      h3 {
        font-size: 1.25rem;
      }
    }
  </style>
</head>

<body>
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 800,
      once: true,
    });
  </script>

  <?php include './components/header.php'; ?>
  <main>
    <div class="first_header first_top" data-aos="fade-up">
      <h2>Terms of Service</h2>
      <p>Welcome to True Dialer! These Terms of Service govern your use of our website, mobile application, and related services provided by True Dialer. By accessing or using our Service, you agree to be bound by these Terms. If you do not agree, please do not use our Service.</p>
    </div>

    <div class="second_header" data-aos="fade-right">
      <h3>Use of Our Service</h3>
      <p>You must be at least 13 years old (or the minimum age in your country that allows for consent) to use True Dialer. By using our Service, you affirm that you meet this age requirement.
        You agree to use the Service only for lawful purposes and in accordance with these Terms. You are responsible for all activities conducted through your account.</p>
    </div>

    <div class="third_header" data-aos="fade-left">
      <h3>Features Provided</h3>
      <p>True Dialer offers several helpful tools to enhance your mobile communication experience, including:</p>
      <p><span class="spannn">Caller ID</span>: Identify incoming calls from known and unknown numbers.</p>
      <p><span class="spannn">Spam Call Blocking</span>: Automatically detect and block unwanted or fraudulent calls.</p>
      <p><span class="spannn">Custom Block Lists</span>: Add numbers you wish to personally block.</p>
      <p><span class="spannn">Call Logs & Lookup</span>: View call history and search unknown numbers.</p>
      <p>Please note: The accuracy of caller identification may vary depending on location, data sources, and network conditions.</p>
    </div>


    <div class="fourth_header" data-aos="fade-up">
      <h3>User Accounts</h3>
      <p>To access certain features, you may need to register for an account. You agree to provide accurate and complete information during registration and to keep it updated.
        You are responsible for maintaining the confidentiality of your account and password and for all activities that occur under your account.</p>
    </div>


    <div class="fifth_header" data-aos="fade-up">
      <h3>Privacy and Data</h3>
      <p>We are committed to protecting your privacy. Our [Privacy Policy] explains how we collect, use, and share your data. By using our Service, you agree to the terms of our Privacy Policy.

        We may collect data such as call logs, blocked numbers, and phone identifiers to improve service performance, detect spam, and personalize features.

      </p>
    </div>


    <div class="sixth_header" data-aos="fade-right">
      <h3>Prohibited Conduct</h3>
      <p class="not_tobe">You agree not to:</p>
      <p>Use the Service to harass, abuse, or harm others.</p>
      <p>Reverse engineer, modify, or attempt to extract source code from the Service.</p>
      <p>Use automated means to access or use the Service (e.g., bots or scrapers).</p>
      <p>Interfere with the integrity or performance of the Service.</p>
      <p>We reserve the right to suspend or terminate your access if you engage in prohibited behavior.</p>
    </div>


    <div class="seventh_header" data-aos="fade-left">
      <h3>Disclaimer of Warranties</h3>
      <p>True Dialer is provided "as is" and "as available." While we strive to offer accurate and uninterrupted service, we do not guarantee that the Service will be error-free or always available.

        We are not liable for any damages resulting from your use of the Service, including failed call identifications or missed spam detections.</p>
    </div>


    <div class="eighth_header" data-aos="fade-up">
      <h3>Changes to These Terms</h3>
      <p>We may update these Terms occasionally to reflect changes in our services, legal requirements, or business practices. When we do, we will notify you via the app or website. Your continued use of the Service constitutes acceptance of the updated Terms.</p>
    </div>
  </main>
  <?php include './components/footer.php'; ?>


  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="assets/js/main.js"></script>
</body>

</html>