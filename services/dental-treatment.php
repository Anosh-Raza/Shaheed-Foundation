<?php 
$is_subpage = true;
$page_title = "Dental Treatment - Al Shaheed Hospital ";
// include($_SERVER['DOCUMENT_ROOT'] . '/shaheed/includes/header.php');
include(__DIR__ . '/../includes/header.php');
?>


<!-- Service Page: Dental Treatment -->
<section class="service-hero">
  <img src="../assets/images/service/dentist.jpg" alt="Dental Treatment" class="hero-bg">
  <div class="hero-overlay">
    <h1>Dental Treatment</h1>
    <p>Professional dental care for healthy teeth and a confident smile.</p>
  </div>
</section>

<section class="service-detail-section">
  <div class="container">
    <div class="breadcrumb">
      <a href="../index.php">Home</a> » <a href="../services.php">Services</a> » <span>Dental Treatment</span>
    </div>

    <div class="service-content">
      <div class="service-text">
        <h2>Dental Treatment</h2>
        <p>
          Our experienced dental specialists use advanced diagnostic tools and modern treatment techniques to provide complete oral care.  
          At Shaheed Memorial Hospital, we ensure high-quality, safe, and comfortable dental procedures for patients of all ages.
        </p>
        <p>We offer a comprehensive range of dental treatments including:</p>

        <ul>
          <li>Teeth Cleaning & Polishing</li>
          <li>Tooth Extraction</li>
          <li>Root Canal Treatment (RCT)</li>
          <li>Dental Fillings</li>
          <li>Scaling & Gum Treatment</li>
          <li>Crowns & Bridges</li>
          <li>Dental Implants</li>
          <li>Orthodontic Treatment (Braces)</li>
          <li>Cosmetic Dentistry</li>
        </ul>
      </div>

      <div class="service-image">
       <img src="../assets/images/service/dentist.jpg" alt="Dental Service">
      </div>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
