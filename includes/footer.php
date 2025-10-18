  </main>

  <!-- Footer Section -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-row">

        <!-- Column 1 -->
        <div class="footer-col">
          <h3 class="footer-title">For Health Professionals</h3>
          <ul class="footer-links">
            <li><a href="<?= $base_url; ?>/contact.php">Careers</a></li>
            <li><a href="<?= $base_url; ?>/about.php">Shaheed Foundation</a></li>
            <li><a href="<?= $base_url; ?>/contact.php">Contact Us</a></li>
            <li><a href="<?= $base_url; ?>/blog/index.php">Annual Reports & Newsletters</a></li>
            <li><a href="<?= $base_url; ?>/about.php">About Us</a></li>
          </ul>
        </div>

        <!-- Column 2 -->
        <div class="footer-col">
          <h3 class="footer-title">For Hospital Visitors</h3>
          <ul class="footer-links">
            <li><a href="<?= $base_url; ?>/services.php">Doctors</a></li>
            <li><a href="<?= $base_url; ?>/services.php">Our Specialties</a></li>
            <li><a href="<?= $base_url; ?>/services.php">Services</a></li>
            <li><a href="<?= $base_url; ?>/contact.php">Teleclinics</a></li>
            <li><a href="<?= $base_url; ?>/services.php">Clinical Laboratory</a></li>
            <li><a href="<?= $base_url; ?>/blog/index.php">Blog</a></li>
            <li><a href="<?= $base_url; ?>/about.php">Patient's Rights</a></li>
            <li><a href="<?= $base_url; ?>/contact.php">Feedback</a></li>
          </ul>
        </div>

        <!-- Column 3 -->
        <div class="footer-col">
          <h3 class="footer-title">Contact Info</h3>
          <p><strong>Address</strong><br>
          <p>
            ST-1/C,Block 6,FB Area,<br>
            Shahra e Pakistan, Karachi, Pakistan
          </p>
          <p><strong>Phone:</strong><br>
            <a href="tel:+923332180641">+92 333 2180641</a>
          </p>
          <p><strong>Email:</strong><br>
            <a href="mailto:info@shaheedfoundation.org">info@shaheedfoundation.org</a>
          </p>

          <div class="social-icons">
            <a href="https://facebook.com/shaheedfoundationhospital" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://instagram.com/shaheedfoundationhospital" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://youtube.com/@shaheedfoundationhospital" target="_blank"><i class="fa-brands fa-youtube"></i></a>
          </div>
        </div>

        <!-- Column 4 -->
        <div class="footer-col">
          <h3 class="footer-title">Find Us</h3>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3617.5955130322313!2d67.0801884!3d24.945845799999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f5843d6f82b%3A0xad7487d793da34a5!2sShaheed%20Foundation%20Pakistan!5e0!3m2!1sen!2s!4v1760070314164!5m2!1sen!2s"
            width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy">
          </iframe>
        </div>
      </div>

      <div class="footer-bottom">
        <p>© 2025 Shaheed Foundation Hospital. All Rights Reserved.</p>
      </div>
    </div>
  </footer>

  <!-- FontAwesome -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js"></script>

  <?php
    $is_local = strpos($_SERVER['HTTP_HOST'], 'localhost') !== false;
$base_url = $is_local 
    ? "http://" . $_SERVER['HTTP_HOST'] . "/shaheed" 
    : "https://" . $_SERVER['HTTP_HOST'];
  ?>

  <!-- Main JS -->
  <script src="<?= $base_url; ?>/assets/js/main.js"></script>

  <!-- Sticky Header Script -->
  <script>
    window.addEventListener("scroll", function () {
      const header = document.querySelector(".site-header");
      if (header) {
        if (window.scrollY > 50) {
          header.classList.add("scrolled");
        } else {
          header.classList.remove("scrolled");
        }
      }
    });
  </script>

</body>
</html>
