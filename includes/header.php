<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?= $page_title ?? "Al Shaheed Hospital " ?></title>

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="favicon.png">

  <?php
    // Auto-detect base URL for localhost/live
    $is_local = strpos($_SERVER['HTTP_HOST'], 'localhost') !== false;
    $base_url = $is_local 
        ? "http://" . $_SERVER['HTTP_HOST'] . "/shaheed" 
        : "https://" . $_SERVER['HTTP_HOST'];

    $logo_path = $base_url . "/assets/images/shaheed-hospital-logo.png";
  ?>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?= $base_url; ?>/assets/css/main.css">
  <link rel="stylesheet" href="<?= $base_url; ?>/assets/css/header.css">
  <link rel="stylesheet" href="<?= $base_url; ?>/assets/css/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>

<body>
  <!-- Announcement Bar -->
  <div class="announcement-bar">
    <div class="container announcement-container">
      <div class="announcement-slider">
        <div class="slider-track">
          <p>Located at Ayesha Manzil</p>
          <p>24/7 Emergency Services Available</p>
          <p>Modern Equipment & Experienced Staff</p>
          <p>Book Your Appointment Today!</p>
        </div>
      </div>

      <div class="announcement-right">
        <a href="https://www.google.com/maps/place/Shaheed+Foundation+Pakistan/">
          <i class="fa-solid fa-location-dot"></i> Find our location
        </a>
        <div class="social-icons">
          <a href="https://www.facebook.com/alshaheedhosp"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/alshaheedhosp"><i class="fa-brands fa-instagram"></i></a>
          <a href="https://www.youtube.com/@AlShaheedHosp"><i class="fa-brands fa-youtube"></i></a>
        </div>
        <div class="uan-number"><a href="tel:+923332180641">+92 333 2180641</a></div>
      </div>
    </div>
  </div>

  <!-- Header -->
  <header class="site-header" id="mainHeader">
    <div class="container header-grid">
      <!-- Logo -->
      <div class="logo">
        <a href="<?= $base_url; ?>/index.php">
          <img src="<?= $logo_path; ?>" alt="Al Shaheed Hospital ">
        </a>
      </div>

      <!-- Desktop Navigation -->
      <nav class="main-nav">
        <ul>
          <li><a href="<?= $base_url; ?>/index.php">Home</a></li>
          <li class="has-dropdown">
            <a href="<?= $base_url; ?>/about.php">About <i class="fa-solid fa-angle-down"></i></a>
            <ul class="dropdown">
              <li><a href="<?= $base_url; ?>/consultants.php">Consultants</a></li>
            </ul>
          </li>
          <li class="has-dropdown">
            <a href="<?= $base_url; ?>/services.php">Services <i class="fa-solid fa-angle-down"></i></a>
            <ul class="dropdown">
              <li><a href="<?= $base_url; ?>/services/pediatrician.php">Pediatrician</a></li>
              <li><a href="<?= $base_url; ?>/services/orthopedic.php">Orthopedic</a></li>
              <li><a href="<?= $base_url; ?>/services/opd.php">OPD</a></li>
              <li><a href="<?= $base_url; ?>/services/general-opd.php">General OPD</a></li>
              <li><a href="<?= $base_url; ?>/services/ent.php">ENT</a></li>
              <li><a href="<?= $base_url; ?>/services/endocrinologist.php">Endocrinologist</a></li>
            </ul>
          </li>
          <li><a href="<?= $base_url; ?>/blog/blog.php">Blog</a></li>
          <li><a href="<?= $base_url; ?>/contact.php">Contact</a></li>
        </ul>
      </nav>

      <!-- Donate Button -->
      <div class="donate-btn">
        <a href="<?= $base_url; ?>/donate.php" class="btn-donate">Donate</a>
      </div>

      <!-- Hamburger -->
      <div class="hamburger">
        <i class="fa-solid fa-bars open-icon"></i>
        <i class="fa-solid fa-xmark close-icon"></i>
      </div>
    </div>

    <!-- Mobile Navigation -->
    <nav class="mobile-nav">
      <div class="logo" style="margin-top: 2.5em;">
        <a href="<?= $base_url; ?>/index.php">
          <img style="max-height: 80px;" src="<?= $logo_path; ?>" alt="Al Shaheed Hospital ">
        </a>
      </div>

      <ul>
        <li><a href="<?= $base_url; ?>/index.php">Home</a></li>
        <li class="mobile-dropdown">
          <a href="#" class="mobile-dropdown-toggle">Services <i class="fa-solid fa-chevron-right"></i></a>
        </li>
        <li><a href="<?= $base_url; ?>/blog/index.php">Blog</a></li>
        <li><a href="<?= $base_url; ?>/about.php">About</a></li>
        <li><a href="<?= $base_url; ?>/consultants.php">Consultants</a></li>
        <li><a href="<?= $base_url; ?>/contact.php">Contact</a></li>
        <li><a href="<?= $base_url; ?>/donate.php" class="btn-donate">Donate</a></li>
      </ul>
    </nav>
  </header>

  <!-- Submenu Drawer -->
  <div class="submenu-drawer" id="submenuDrawer">
    <div class="submenu-header">
      <button class="close-submenu">&larr; Back</button>
      <h3>Our Services</h3>
    </div>
    <ul class="submenu-list">
      <li><a href="<?= $base_url; ?>/services/pediatrician.php">Pediatrician</a></li>
      <li><a href="<?= $base_url; ?>/services/orthopedic.php">Orthopedic</a></li>
      <li><a href="<?= $base_url; ?>/services/opd.php">OPD</a></li>
      <li><a href="<?= $base_url; ?>/services/general-opd.php">General OPD</a></li>
      <li><a href="<?= $base_url; ?>/services/ent.php">ENT</a></li>
      <li><a href="<?= $base_url; ?>/services/endocrinologist.php">Endocrinologist</a></li>
    </ul>
  </div>
  <div class="drawer-overlay" id="drawerOverlay"></div>

  <!-- Sticky Header -->
  <script>
    window.addEventListener("scroll", function() {
      const header = document.getElementById("mainHeader");
      header.classList.toggle("sticky", window.scrollY > 80);
    });
  </script>

  <!-- Mobile Navigation Logic -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const hamburger = document.querySelector(".hamburger");
      const mobileNav = document.querySelector(".mobile-nav");
      const openIcon = document.querySelector(".open-icon");
      const closeIcon = document.querySelector(".close-icon");

      hamburger.addEventListener("click", () => {
        mobileNav.classList.toggle("active");
        const isActive = mobileNav.classList.contains("active");
        openIcon.style.display = isActive ? "none" : "inline-block";
        closeIcon.style.display = isActive ? "inline-block" : "none";
      });

      // Drawer submenu
      const dropdownToggle = document.querySelector(".mobile-dropdown-toggle");
      const submenuDrawer = document.getElementById("submenuDrawer");
      const overlay = document.getElementById("drawerOverlay");
      const closeBtn = document.querySelector(".close-submenu");

      dropdownToggle.addEventListener("click", (e) => {
        e.preventDefault();
        mobileNav.classList.remove("active");
        submenuDrawer.classList.add("open");
        overlay.classList.add("active");
      });

      closeBtn.addEventListener("click", () => {
        submenuDrawer.classList.remove("open");
        overlay.classList.remove("active");
        setTimeout(() => {
          mobileNav.classList.add("active");
        }, 200);
      });

      overlay.addEventListener("click", () => {
        submenuDrawer.classList.remove("open");
        overlay.classList.remove("active");
        mobileNav.classList.remove("active");
      });
    });
  </script>

  <!-- Drawer Styles -->
  <style>
    .submenu-drawer {
      position: fixed;
      top: 0;
      left: -100%;
      width: 100%;
      max-width: 350px;
      height: 100%;
      background: #fff;
      z-index: 9999;
      box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
      transition: left 0.3s ease;
      display: flex;
      flex-direction: column;
    }
    .has-dropdown svg {
    height: 0.8em;
}
    .submenu-drawer.open { left: 0; }
    .drawer-overlay {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.3);
      opacity: 0; visibility: hidden;
      transition: all 0.3s ease;
      z-index: 9998;
    }
    .drawer-overlay.active {
      opacity: 1; visibility: visible;
    }
    .submenu-header {
      background: var(--primary-color);
      color: #fff;
      padding: 15px 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .submenu-header h3 {
      font-size: 1.2rem;
      margin: 0;
    }
    .close-submenu {
      background: none;
      border: none;
      color: #fff;
      font-size: 1rem;
      cursor: pointer;
    }
    .submenu-list {
      list-style: none;
      padding: 20px;
      margin: 0;
    }
    .submenu-list li {
      border-bottom: 1px solid #eee;
    }
    .submenu-list a {
      display: block;
      padding: 12px 0;
      color: #333;
      font-weight: 500;
      text-decoration: none;
      transition: color 0.3s ease;
    }
    .submenu-list a:hover {
      color: var(--primary-color);
    }
  </style>
</body>
</html>
