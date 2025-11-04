<?php 
$is_subpage = true;
$page_title = "Careers - Al Shaheed Hospital";
include "includes/header.php"; 
?>

<!-- Hero Section -->
<section class="career-hero">
  <img src="../assets/images/career-hero.jpg" alt="Join Our Team" class="hero-bg">
  <div class="hero-overlay">
    <h1>Join Our Team</h1>
    <p>Be part of a compassionate team committed to quality healthcare and community service.</p>
  </div>
</section>

<!-- Careers Section -->
<section class="career-section">
  <div class="container">
    <div class="career-intro">
      <h2>Career Opportunities</h2>
      <p>
        At <strong>Al Shaheed Hospital</strong>, we believe that our people are our greatest asset.
        We’re looking for skilled professionals who share our vision of delivering quality healthcare with compassion.
      </p>
      <p>Fill out the form below to apply for open positions.</p>
    </div>

    <!-- Application Form -->
    <form class="career-form" action="submit-application.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Full Name <span>*</span></label>
        <input type="text" id="name" name="name" required placeholder="Enter your full name" />
      </div>

      <div class="form-group">
        <label for="email">Email Address <span>*</span></label>
        <input type="email" id="email" name="email" required placeholder="Enter your email" />
      </div>

      <div class="form-group">
        <label for="phone">Contact Number <span>*</span></label>
        <input type="tel" id="phone" name="phone" required placeholder="03XX-XXXXXXX" />
      </div>

      <div class="form-group">
        <label for="position">Position Applying For <span>*</span></label>
        <input type="text" id="position" name="position" required placeholder="e.g. Staff Nurse, Medical Officer" />
      </div>

      <div class="form-group">
        <label for="message">Cover Letter / Message</label>
        <textarea id="message" name="message" rows="4" placeholder="Write a short message or cover letter..."></textarea>
      </div>

      <div class="form-group file-upload">
        <label for="resume">Upload Resume (PDF/DOC) <span>*</span></label>
        <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required />
      </div>

      <div class="form-submit">
        <button type="submit" class="btn-apply">Submit Application</button>
      </div>
    </form>
  </div>
</section>

<?php include "includes/footer.php"; ?>


<style>
    /* Careers Page */
.career-hero {
  position: relative;
  overflow: hidden;
  padding: 100px 20px 60px;
  height: 240px
}

.career-hero .hero-bg {
  width: 100%;
  height: 100%;
  object-fit: cover;
  filter: brightness(60%);
}

.career-hero .hero-overlay {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: var(--white);
  text-align: center;
  width: 100%;
  background: linear-gradient(to right, var(--primary-color), var(--primary-dark))
}

.career-hero h1 {
  font-size: 2.5rem;
  font-weight: 800;
  color: var(--white);
}

.career-hero p {
  font-size: 1.1rem;
  margin-top: 10px;
}

/* Career Section */
.career-section {
  background: var(--white);
  padding: 80px 20px;
  font-family: var(--font-family);
}

.career-intro {
  text-align: center;
  margin-bottom: 40px;
}

.career-intro h2 {
  font-size: 2rem;
  font-weight: 800;
  color: var(--primary-color);
  margin-bottom: 15px;
}

.career-intro p {
  color: var(--black-color);
  font-weight: 500;
  max-width: 700px;
  margin: 0 auto 10px;
  line-height: 1.6;
}

/* Form */
.career-form {
  background: var(--light-gray);
  padding: 40px 30px;
  border-radius: 15px;
  box-shadow: 0 5px 20px rgba(0,0,0,0.05);
  max-width: 700px;
  margin: 0 auto;
}

.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  font-weight: 600;
  color: var(--primary-color);
  margin-bottom: 8px;
}

.form-group span {
  color: var(--secondary-color);
}

.career-form input,
.career-form textarea {
  width: 100%;
  padding: 12px 15px;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 15px;
  transition: border-color 0.3s ease;
}

.career-form input:focus,
.career-form textarea:focus {
  border-color: var(--primary-color);
  outline: none;
}

.file-upload input {
  border: 1px dashed var(--primary-color);
  background: var(--white);
  padding: 15px;
  cursor: pointer;
}

.btn-apply {
  background: var(--primary-color);
  color: var(--white);
  padding: 12px 30px;
  font-size: 1rem;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  font-weight: 600;
  transition: background 0.3s ease;
}

.btn-apply:hover {
  background: var(--secondary-color);
}

/* Responsive */
@media (max-width: 768px) {
  .career-hero {
    height: 300px;
  }

  .career-hero h1 {
    font-size: 1.8rem;
  }

  .career-form {
    padding: 25px 20px;
  }
}

</style>