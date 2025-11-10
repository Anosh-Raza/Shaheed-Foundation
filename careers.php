<?php 
$page_title = "Careers - Al Shaheed Hospital";
include "includes/header.php"; 
?>

<!-- Hero Section -->
<section class="hero-section careers-hero">
  <div class="container">
    <div class="hero-content">
      <h1>Join Our Mission to Serve Humanity</h1>
      <p>Be a part of Shaheed Foundation Hospital’s compassionate team dedicated to providing quality healthcare and community service.</p>
    </div>
  </div>
</section>

<!-- Open Positions -->
<section class="open-positions">
  <div class="container">
    <h2>Current Openings</h2>
    <p>Explore exciting opportunities to join our medical, nursing, and administrative teams.</p>

    <div class="job-list">
      <div class="job-card">
        <h4>Registered Nurse (General Ward)</h4>
        <p><strong>Location:</strong> Karachi</p>
        <p><strong>Experience:</strong> 2+ Years</p>
        <a href="apply-now.php" class="btn-apply">Apply Now</a>
      </div>

      <div class="job-card">
        <h4>Lab Technician</h4>
        <p><strong>Location:</strong> Karachi</p>
        <p><strong>Experience:</strong> 1–3 Years</p>
        <a href="apply-now.php" class="btn-apply">Apply Now</a>
      </div>

      <div class="job-card">
        <h4>Medical Officer (OPD)</h4>
        <p><strong>Location:</strong> Karachi</p>
        <p><strong>Experience:</strong> 3+ Years</p>
        <a href="apply-now.php" class="btn-apply">Apply Now</a>
      </div>
    </div>
  </div>
</section>

<!-- Careers Introduction -->
<section class="careers-intro">
  <div class="container">
    <h2>Why Work With Us?</h2>
    <p>
      At Shaheed Foundation Hospital, we believe our staff are our greatest asset.
      We offer a nurturing and professional environment that values teamwork, continuous learning, and compassion.
    </p>

    <div class="benefits-grid">
      <div class="benefit-box">
        <i class="fa-solid fa-heart-pulse"></i>
        <h4>Meaningful Work</h4>
        <p>Contribute to saving lives and improving healthcare access for all.</p>
      </div>
      <div class="benefit-box">
        <i class="fa-solid fa-users"></i>
        <h4>Team Environment</h4>
        <p>Work with dedicated professionals who share your passion and purpose.</p>
      </div>
      <div class="benefit-box">
        <i class="fa-solid fa-stethoscope"></i>
        <h4>Continuous Growth</h4>
        <p>We encourage training, development, and medical education opportunities.</p>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="careers-cta">
  <div class="container">
    <h2>Didn’t Find a Suitable Role?</h2>
    <p>We’re always looking for talented individuals. Send us your CV and we’ll reach out when a suitable opportunity opens up.</p>
    <a href="apply-now.php" class="btn-apply">Send Your Resume</a>
  </div>
</section>

<?php include "includes/footer.php"; ?>

<style>
    /* Hero Section */
.careers-hero {
 background: linear-gradient(to right, var(--primary-color), var(--primary-dark));
color: var(--white);
  text-align: center;
  padding: 100px 20px 60px;
}

.careers-hero h1 {
  font-size: 2.5rem;
  font-weight: 800;
  margin-bottom: 15px;
}

.careers-hero p {
  font-size: 1.1rem;
  max-width: 800px;
  margin: 0 auto;
}

/* Careers Intro */
.careers-intro {
  padding: 80px 20px;
  text-align: center;
  background: var(--white);
}

.careers-intro h2 {
  font-size: 2rem;
  font-weight: 800;
  color: var(--primary-color);
  margin-bottom: 20px;
}

.careers-intro p {
  color: var(--text-color);
  max-width: 800px;
  margin: 0 auto 50px;
}

.benefits-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 30px;
}

.benefit-box {
  background: #fafafa;
  border-radius: 12px;
  padding: 40px 20px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.05);
}

.benefit-box h4 {
    font-weight: normal;
    font-size: 1.6rem;
    margin: 15px 0;
    font-size: 1.2rem;
}

.benefit-box i {
  font-size: 2rem;
  color: var(--primary-color);
  margin-bottom: 15px;
}

/* Open Positions */
.open-positions {
  background: #f9f9f9;
  padding: 80px 20px;
  text-align: center;
  border-bottom: 6px solid var(--primary-color);
}

.open-positions h2 {
  font-size: 2rem;
  font-weight: 800;
  color: var(--primary-color);
  margin-bottom: 15px;
}

.job-list {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 25px;
  margin-top: 40px;
}

.job-card {
  background: var(--white);
  border-radius: 12px;
  padding: 30px;
  text-align: left;
  box-shadow: 0 4px 10px rgba(0,0,0,0.05);
}

.job-card h4 {
  font-size: 1.2rem;
  color: var(--black-color);
  margin-bottom: 10px;
    font-weight: lighter;
}

.job-card p {
  font-size: 0.95rem;
  color: var(--text-color);
  margin-bottom: 8px;
}

.btn-apply {
  display: inline-block;
  margin-top: 10px;
  background: var(--primary-color);
  color: var(--white);
  padding: 10px 25px;
  border-radius: 25px;
  text-decoration: none;
  font-weight: 600;
  transition: all 0.3s ease;
}

.btn-apply:hover {
  background: #b51b1b;
}

/* CTA Section */
.careers-cta {
  background: var(--primary-color);
  color: var(--white);
  text-align: center;
  padding: 80px 20px;
  border-bottom: 6px solid var(--white);
}

.careers-cta h2 {
  font-size: 2rem;
  font-weight: 800;
  margin-bottom: 15px;
}

.careers-cta p {
  max-width: 700px;
  margin: 0 auto 30px;
}

.careers-cta .btn-apply {
  background: var(--white);
  color: var(--primary-color);
}

.careers-cta .btn-apply:hover {
  background: #f4f4f4;
}

/* Responsive */
@media (max-width: 992px) {
  .benefits-grid {
    grid-template-columns: 1fr 1fr;
  }
}

@media (max-width: 768px) {
  .benefits-grid {
    grid-template-columns: 1fr;
  }

  .careers-hero h1 {
    font-size: 2rem;
  }
}

</style>