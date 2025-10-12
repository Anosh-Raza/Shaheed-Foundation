<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?= $page_title ?? "Shaheed Foundation Hospital" ?></title>
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" href="assets/css/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>
<header class="site-header">
  <div class="container header-grid">
    
    <!-- Logo -->
    <div class="logo">
      <a href="index.php"> 
        <img src="assets/images/logo-dark.png" alt="Shaheed Foundation Hospital">
      </a>
    </div>

    <!-- Desktop Navigation -->
    <nav class="main-nav">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li class="has-dropdown">
          <a href="services.php">Services <i class="fa-solid fa-angle-down"></i></a>
          <ul class="dropdown">
            <li><a href="services.php#general">General Clinic</a></li> 
            <li><a href="services.php#ent">ENT</a></li>
            <li><a href="services.php#orthopedic">Orthopedic</a></li>
            <li><a href="services.php#paediatric">Paediatric</a></li>
          </ul>
        </li>
        <li><a href="blog/index.php">Blog</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>

    <!-- Donate Button (Desktop Only) -->
    <div class="donate-btn">
      <a href="donate.php" class="btn-donate">Donate</a>
    </div>

    <!-- Hamburger (Mobile Only) -->
    <div class="hamburger">
      <i class="fa-solid fa-bars open-icon"></i>
      <i class="fa-solid fa-xmark close-icon"></i>
    </div>
  </div>

  <!-- Fullscreen Mobile Navigation -->
  <nav class="mobile-nav">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="blog/index.php">Blog</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="donate.php" class="btn-donate">Donate</a></li>
    </ul>
  </nav>
</header>
