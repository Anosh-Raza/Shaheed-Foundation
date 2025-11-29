<?php 
$is_subpage = true;
$page_title = "ENT - Al Shaheed Hospital ";
// include($_SERVER['DOCUMENT_ROOT'] . '/shaheed/includes/header.php');
include(__DIR__ . '/../includes/header.php');
?>


<!-- Service Page: ENT -->
<section class="service-hero">
  <img src="../assets/images/service/ent.jpg" alt="ENT" class="hero-bg">
  <div class="hero-overlay">
    <h1>ENT</h1>
    <p>Comprehensive care for ear, nose, and throat health.</p>
  </div>
</section>

<section class="service-detail-section">
  <div class="container">
    <div class="breadcrumb">
      <a href="../index.php">Home</a> » <a href="../services.php">Services</a> » <span>ENT</span>
    </div>

    <div class="service-content">
      <div class="service-text">
        <h2>ENT</h2>
        <p>
          Our ENT Department specializes in the diagnosis and treatment of ear, nose, and throat disorders.  
          At Shaheed Memorial Hospital, we combine advanced technology with experienced care to ensure optimal outcomes for all patients.
        </p>
        <p>We offer a comprehensive range of treatments for:</p>

        <ul>
          <li>Hearing Loss & Ear Infections</li>
          <li>Tonsillitis & Adenoid Problems</li>
          <li>Sinusitis & Nasal Obstructions</li>
          <li>Allergic Rhinitis</li>
          <li>Voice & Speech Disorders</li>
          <li>Sleep Apnea & Snoring</li>
          <li>Head & Neck Tumors</li>
          <li>Dizziness & Balance Disorders</li>
          <li>Throat Pain & Swallowing Disorders</li>
        </ul>
      </div>

      <div class="service-image">
        <img src="../assets/images/service/ent.jpg" alt="ENT Service">
      </div>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
