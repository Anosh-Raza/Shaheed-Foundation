<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= $page_title ?? "Shaheed Foundation Hospital" ?></title>

    <?php
  // Automatically detect base URL for localhost or live
  $is_local = strpos($_SERVER['HTTP_HOST'], 'localhost') !== false;
$base_url = $is_local 
    ? "http://" . $_SERVER['HTTP_HOST'] . "/shaheed" 
    : "https://" . $_SERVER['HTTP_HOST'];

  // Dynamic logo path
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
                    <p>Located at Ayesha Manzil </p>
                    <p>24/7 Emergency Services Available</p>
                    <p>Modern Equipment & Experienced Staff</p>
                    <p>Book Your Appointment Today!</p>
                </div>
            </div>

            <div class="announcement-right">
                <a href="https://www.google.com/maps/place/Shaheed+Foundation+Pakistan/@24.945846,67.080188,15z/data=!4m6!3m5!1s0x3eb33f5843d6f82b:0xad7487d793da34a5!8m2!3d24.9458458!4d67.0801884!16s%2Fg%2F1twyx__n?hl=en&entry=ttu&g_ep=EgoyMDI1MTAxNC4wIKXMDSoASAFQAw%3D%3D"><i class="fa-solid fa-location-dot"></i> Find our location</a>
                <div class="social-icons" style="margin-top: 0;">
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
                    <img src="<?= $logo_path; ?>" alt="Shaheed Foundation Hospital">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="main-nav">
                <ul>
                    <li><a href="<?= $base_url; ?>/index.php">Home</a></li>
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
                    <li><a href="<?= $base_url; ?>/about.php">About</a></li>
                    <li><a href="<?= $base_url; ?>/contact.php">Contact</a></li>
                </ul>
            </nav>

            <!-- Donate Button -->
            <div class="donate-btn">
                <a href="<?= $base_url; ?>/donate.php" class="btn-donate">Donate</a>
            </div>

            <!-- Hamburger (Mobile Only) -->
            <div class="hamburger">
                <i class="fa-solid fa-bars open-icon"></i>
                <i class="fa-solid fa-xmark close-icon"></i>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <nav class="mobile-nav">
            <div class="logo" style="margin-top: 2.5em;">
                <a href="<?= $base_url; ?>/index.php">
                    <img style="max-height: 80px;" src="<?= $logo_path; ?>" alt="Shaheed Foundation Hospital">
                </a>
            </div>
            <ul>
                <li><a href="<?= $base_url; ?>/index.php">Home</a></li>

                <li class="mobile-dropdown">
                    <a href="<?= $base_url; ?>/services.php" class="mobile-dropdown-toggle">
                        Services <i class="fa-solid fa-chevron-down"></i>
                    </a>
                    <ul class="mobile-submenu">
                        <li><a href="<?= $base_url; ?>/services/gastroenterology.php">Gastroenterology</a></li>
                        <li><a href="<?= $base_url; ?>/services.php#ent">ENT</a></li>
                    </ul>
                </li>

                <li><a href="<?= $base_url; ?>/blog/index.php">Blog</a></li>
                <li><a href="<?= $base_url; ?>/about.php">About</a></li>
                <li><a href="<?= $base_url; ?>/contact.php">Contact</a></li>
                <li><a href="<?= $base_url; ?>/donate.php" class="btn-donate">Donate</a></li>
            </ul>
        </nav>
    </header>

    <!-- Sticky Header -->
    <script>
    window.addEventListener("scroll", function() {
        const header = document.getElementById("mainHeader");
        if (window.scrollY > 80) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    });

  </script>

 <!-- Mobile Menu + Dropdown JS -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const hamburger = document.querySelector(".hamburger");
      const mobileNav = document.querySelector(".mobile-nav");
      const openIcon = document.querySelector(".open-icon");
      const closeIcon = document.querySelector(".close-icon");

      // Toggle mobile menu
      hamburger.addEventListener("click", function () {
        mobileNav.classList.toggle("active");
        const isActive = mobileNav.classList.contains("active");
        openIcon.style.display = isActive ? "none" : "inline-block";
        closeIcon.style.display = isActive ? "inline-block" : "none";
      });

      // Close when clicking a link
      mobileNav.querySelectorAll("a").forEach(link => {
        link.addEventListener("click", () => {
          mobileNav.classList.remove("active");
          openIcon.style.display = "inline-block";
          closeIcon.style.display = "none";
        });
      });

      // Handle mobile dropdown toggle
      const dropdowns = document.querySelectorAll(".mobile-dropdown");
      dropdowns.forEach(drop => {
        const toggle = drop.querySelector(".mobile-dropdown-toggle");
        const submenu = drop.querySelector(".mobile-submenu");
        if (!toggle || !submenu) return;

        toggle.addEventListener("click", function (e) {
          if (window.innerWidth <= 992) {
            e.preventDefault();
            e.stopPropagation();
            drop.classList.toggle("open");
            submenu.classList.toggle("open");
          }
        });
      });
    });
  </script>

</body>

</html>