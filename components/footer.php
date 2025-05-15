<footer id="footer" class="footer">
  <div class="container footer-top">
    <div class="row gy-4 justify-content-center">
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="index.php" class="d-flex align-items-center">
          <img style="height:40px;" src="assets/img/truetechicon.png" alt="">
          <span class="sitename">True Dialer</span>
        </a>
        <div class="footer-contact pt-3">
          <p>Block # 5, 2nd Floor, Time Square Commercial</p>
          <p>Phase 7 Bahria Town, Islamabad</p>
          <p class="mt-3"><strong>Phone:</strong> <span>+92 (51) 2000637</span></p>
          <p><strong>Email:</strong> <span>hr@zoobiapps.com</span></p>
        </div>
      </div>

      <?php
  $currentPage = basename($_SERVER['PHP_SELF']);
  $isHome = $currentPage === 'index.php';
?>
      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Useful Links</h4>
        <ul>
    <li><a href="index.php" class="<?= $isHome ? 'active' : '' ?>">Home</a></li>
    <li><a href="<?= $isHome ? '#about' : 'index.php#about' ?>">About</a></li>
    <li><a href="<?= $isHome ? '#services' : 'index.php#services' ?>">Services</a></li>
    <li><a href="<?= $isHome ? '#team' : 'index.php#team' ?>">Team</a></li>
    <li><a href="termsservice.php" class="<?= $currentPage === 'termsservice.php' ? 'active' : '' ?>">Terms of service</a></li>
    <li><a href="privacypolicy.php" class="<?= $currentPage === 'privacypolicy.php' ? 'active' : '' ?>">Privacy policy</a></li>
  </ul>
      </div>
    </div>
  </div>
 <div class="w-100" style="height: 0.08px; background-color: silver;"></div>
  <div class="container text-center mt-4">
    <p>© Copyright <strong>True Dialer</strong> All Rights Reserved</p>
    <div class="credits">
      Designed by True Dialer</a>
    </div>
  </div>
</footer>
