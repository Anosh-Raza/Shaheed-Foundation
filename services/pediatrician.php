<?php 
$is_subpage = true;
$page_title = "Pediatrician - Al Shaheed Hospital";
include(__DIR__ . '/../includes/header.php');
?>

<!-- Service Page: Pediatrician -->
<section class="service-hero">
    <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=1200&h=400&fit=crop" alt="Pediatrician"
        class="hero-bg">
    <div class="hero-overlay">
        <h1>Pediatrician</h1>
        <p>Comprehensive care for children's health and wellness.</p>
    </div>
</section>

<section class="service-detail-section">
    <div class="container">
        <div class="breadcrumb">
            <a href="../index.php">Home</a> » <a href="../services.php">Services</a> » <span>Pediatrician</span>
        </div>

        <div class="service-content">
            <div class="service-text">
                <h2>PEDIATRICIAN</h2>
                <p>
                    Our Pediatric Department provides compassionate and expert care for infants, children, and
                    adolescents.
                    With experienced physicians and modern diagnostic facilities, we ensure the best care for every
                    young patient.
                </p>
                <p>We offer a comprehensive range of pediatric treatments including:</p>

                <ul>
                    <li>Newborn and infant care</li>
                    <li>Vaccination and immunization</li>
                    <li>Growth and development assessment</li>
                    <li>Common infections and allergies</li>
                    <li>Respiratory and digestive disorders</li>
                    <li>Adolescent health management</li>
                    <li>Nutrition counseling</li>
                </ul>
            </div>

            <div class="service-image">
                <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=500&h=400&fit=crop"
                    alt="Pediatrician Service">
            </div>
        </div>

        <div class="doctors-section">
            <h3>Pediatric Consultants</h3>
            <div class="doctors-grid">

                <!-- Dr. Murtuza Kazmi -->
                <div class="doctor-card">
  <a href="../consultants/consultant-single.php" target="_blank">
    <img src="../assets/images/murtaza.jpg" alt="Dr. Murtuza Kazmi">
    <h4>Dr. Murtuza Kazmi</h4>
    <p>Family Physician (M.B.B.S)</p>
    <span class="experience">10+ Years Experience</span>
  </a>
</div>



                <!-- Dr. Sarah Ahmed -->
                <div class="doctor-card">
                    <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=200&h=200&fit=crop&crop=face"
                        alt="Dr. Sarah Ahmed">
                    <h4>Dr. Sarah Ahmed</h4>
                    <p>MBBS, FCPS (General Medicine)</p>
                    <span class="experience">15+ Years Experience</span>
                </div>

                <!-- Dr. Mohammad Hassan -->
                <div class="doctor-card">
                    <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=200&h=200&fit=crop&crop=face"
                        alt="Dr. Mohammad Hassan">
                    <h4>Dr. Mohammad Hassan</h4>
                    <p>MBBS, MD (Internal Medicine)</p>
                    <span class="experience">12+ Years Experience</span>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include '../includes/footer.php'; ?>