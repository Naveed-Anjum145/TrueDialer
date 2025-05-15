<header id="header" class="header d-flex align-items-center fixed-top">

  <!-- Embedded Style Tag -->
  <style>
    .logo-img {
      width: 120px;
      height: 90px;
      transition: all 0.3s ease-in-out;
    }

    @media (max-width: 1200px) {
      .logo-img {
        width: 80px;
        height: 60px;
      }
    }


    @media (max-width: 768px) {
       .sitename {
      font-size: 24px;
      font-family: 'Times New Roman', Times, serif;
    }
    }
  </style>

  <div class="container-fluid container-xl position-relative d-flex align-items-center">

   <img class="img-fluid logo-img" src="assets/img/td.png" alt="True Dialer Logo">
    <a href="index.php" class="logo d-flex align-items-center me-auto">
      <h1 class="sitename">True Dialer</h1>
    </a>

    <?php
  $currentPage = basename($_SERVER['PHP_SELF']);
  $isHome = $currentPage === 'index.php';
?>

<nav id="navmenu" class="navmenu">
  <ul>
    <li><a href="index.php" class="<?= $isHome ? 'active' : '' ?>">Home</a></li>
    <li><a href="<?= $isHome ? '#about' : 'index.php#about' ?>">About</a></li>
    <li><a href="<?= $isHome ? '#services' : 'index.php#services' ?>">Services</a></li>
    <li><a href="<?= $isHome ? '#team' : 'index.php#team' ?>">Team</a></li>
    <li><a href="termsservice.php" class="<?= $currentPage === 'termsservice.php' ? 'active' : '' ?>">Terms of service</a></li>
    <li><a href="privacypolicy.php" class="<?= $currentPage === 'privacypolicy.php' ? 'active' : '' ?>">Privacy policy</a></li>
  </ul>
  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>


  </div>
</header>
