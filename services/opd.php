<?php 
$is_subpage = true;
$page_title = "OPD - Al Shaheed Hospital ";
// include($_SERVER['DOCUMENT_ROOT'] . '/shaheed/includes/header.php');
include(__DIR__ . '/../includes/header.php');
?>


<!-- Service Page: OPD -->
<section class="service-hero">
  <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=1200&h=400&fit=crop" alt="OPD" class="hero-bg">
  <div class="hero-overlay">
    <h1>OPD</h1>
    <p>Comprehensive care for digestive health and wellness.</p>
  </div>
</section>

<section class="service-detail-section">
  <div class="container">
    <div class="breadcrumb">
      <a href="../index.php">Home</a> » <a href="../services.php">Services</a> » <span>OPD</span>
    </div>

    <div class="service-content">
      <div class="service-text">
        <h2>OPD</h2>
        <p>
          With experienced physicians and leading-edge diagnostic technology, we have helped numerous patients in our community overcome digestive problems and lead healthier lives.
          Shaheed Memorial Hospital offers a state-of-the-art endoscopy suite dedicated to providing quality and optimal patient care.
        </p>
        <p>We offer a comprehensive range of treatments for:</p>

        <ul>
          <li>Digestive tract bleeding</li>
          <li>Inflammatory bowel disease</li>
          <li>Irritable bowel syndrome</li>
          <li>Celiac disease</li>
          <li>Viral Hepatitis (Hepatitis B & C)</li>
          <li>Acute and chronic malabsorption</li>
          <li>Colitis</li>
          <li>Colon polyps</li>
          <li>Gallstone</li>
        </ul>
      </div>

      <div class="service-image">
        <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=500&h=400&fit=crop" alt="OPD Service">
      </div>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>