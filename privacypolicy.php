<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Privacy Policy - True Dialer</title>
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
      <h2>Privacy Policy</h2>
      <p>Welcome to True Dialer. We value your trust and are committed to protecting your privacy. This Privacy Policy explains how we collect, use, and safeguard your information when you use our mobile app and related services.</p>
    </div>

    <div class="second_header" data-aos="fade-right">
      <h3>Information We Collect</h3>
      <p>We collect information to provide better services and improve your experience with True Dialer.</p>
      
    </div>

    <div class="third_header" data-aos="fade-left">
      <h3>How We Use Your Information</h3>
      <p>We use the collected information for purposes such as:</p>
      <p>Identifying unknown callers and detecting spam or fraud calls.</p>
      <p>Improving call accuracy and database reliability.</p>
      <p>Managing user preferences and block lists.</p>
      <p>Providing customer support and responding to inquiries.</p>
      <p>Enhancing app performance, security, and functionality.</p>
    </div>


    <div class="fourth_header" data-aos="fade-up">
      <h3>Data Security</h3>
      <p>We use industry-standard security measures (encryption, secure servers, etc.) to protect your information. However, no method of transmission over the internet is 100% secure, so we cannot guarantee absolute security.</p>
    </div>


    <div class="fifth_header" data-aos="fade-up">
      <h3>Children’s Privacy</h3>
      <P>True Dialer is not intended for use by anyone under the age of 13. We do not knowingly collect personal data from children.</P>
    </div>


    <div class="sixth_header" data-aos="fade-right">
      <h3>Changes to This Privacy Policy</h3>
     <P>We may update this policy from time to time. If we make significant changes, we will notify you via the app or our website. Continued use of the service means you accept the updated policy.</P>
    </div>
  </main>
  <?php include './components/footer.php'; ?>


  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="assets/js/main.js"></script>
</body>

</html>