  </main>

  <!-- Footer Section -->
  <footer class="site-footer">
      <div class="container">
          <div class="footer-row">

              <!-- Column 1 -->
              <div class="footer-col">
                  <h3 class="footer-title">Quick Links</h3>
                  <ul class="footer-links">
                      <li><a href="<?= $base_url; ?>/about.php">About</a></li>
                      <li><a href="<?= $base_url; ?>/consultants.php">Consultants</a></li>
                      <li><a href="<?= $base_url; ?>/careers.php">Careers</a></li>
                  </ul>
              </div>


              <!-- Column 3 -->
              <div class="footer-col">
                  <h3 class="footer-title">Contact Info</h3>
                  <p>Address<br>
                  <p class="footer-contact">
                      Plot ST-1C, F.B Area Block 6,<br>
                      Gulberg Town, Karachi
                  </p>
                  <p>Phone:<br>
                      <a class="footer-contact" href="tel:+923332180641">+92 333 2180641</a>
                  </p>
                  <p>Email:<br>
                      <a class="footer-contact" href="mailto:info@shaheedfoundation.org">info@shaheedfoundation.org</a>
                  </p>
              </div>

              <!-- Column 4 -->
              <div class="footer-col">
                  <h3 class="footer-title">Find Us</h3>
                  <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.1496788289505!2d67.062921!3d24.926970399999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f0048d4ef05%3A0x8d10754a5a3c086a!2sAl%20Shaheed%20Hospital!5e0!3m2!1sen!2s!4v1762230448429!5m2!1sen!2s"
                      width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy">
                  </iframe>
              </div>
          </div>

          <div class="footer-bottom">
              <!-- <p>© 2025 Al Shaheed Hospital . All Rights Reserved.</p> -->
              <div class="social-icons">
                  <a href="https://www.facebook.com/alshaheedhosp" target="_blank"><i
                          class="fa-brands fa-facebook-f"></i></a>
                  <a href="https://www.instagram.com/alshaheedhosp/" target="_blank"><i
                          class="fa-brands fa-instagram"></i></a>
                  <a href="https://www.youtube.com/@AlShaheedHosp" target="_blank"><i
                          class="fa-brands fa-youtube"></i></a>
              </div>
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
window.addEventListener("scroll", function() {
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