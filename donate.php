<?php 
$page_title = "Donate - Al Shaheed Hospital ";
include "includes/header.php"; 
?>

<!-- HERO SECTION -->
<section class="donate-hero">

  <div class="container">
    <div class="hero-text">
      <h1>Support Healthcare for All</h1>
      <p>Your generous donations empower us to provide free and affordable medical services to those in need across Pakistan.</p>
      <a href="#donate-ways" class="btn-donate-now">See Ways to Donate</a>
    </div>
  </div>
</section>

<!-- WAYS TO DONATE -->
<section class="donate-ways" id="donate-ways">
  <div class="container">
    <h2>Ways to Donate</h2>

    <div class="donate-methods">
      <div class="donate-card">
        <i class="fa-solid fa-university"></i>
        <h3>Bank Transfer</h3>
        <p><strong>Bank:</strong> Bank Al Habib Limited</p>
        <p><strong>Account Title:</strong> SHAHEED FOUNDATION PAKISTAN</p>
        <p><strong>Branch Code:</strong> 1016</p>
        <p><strong>Account #:</strong> 1016-0081-003466-01-0</p>
        <p><strong>IBAN:</strong> PK72 BAHL 1016 0081 0034 6601</p>
      </div>
    </div>

    <div class="other-ways">
      <h3>Other Ways to Donate</h3>
      <p>
        You can also visit the <strong>Shaheed Foundation Pakistan Office</strong> or 
        <strong>Al Shaheed Hospital</strong> to submit your donations in person and receive an official receipt.
      </p>
      <p class="whatsapp-note">
        After making your online donation, kindly notify us on WhatsApp at <strong>0344-7424333</strong>.
      </p>
    </div>
  </div>
</section>

<!-- WHY DONATE SECTION -->
<section class="why-donate">
  <div class="container">
    <h2>How Your Donation Helps</h2>
    <div class="help-grid">
      <div class="help-card">
        <i class="fa-solid fa-heart-pulse"></i>
        <h3>Medical Equipment</h3>
        <p>Help us acquire modern medical technology and life-saving machines.</p>
      </div>
      <div class="help-card">
        <i class="fa-solid fa-user-doctor"></i>
        <h3>Support Medical Staff</h3>
        <p>Empower our doctors, nurses, and healthcare professionals with better resources.</p>
      </div>
      <div class="help-card">
        <i class="fa-solid fa-pills"></i>
        <h3>Free Medicines</h3>
        <p>Provide free or subsidized medicines to low-income patients every day.</p>
      </div>
      <div class="help-card">
        <i class="fa-solid fa-hospital"></i>
        <h3>Facility Upgrades</h3>
        <p>Contribute to expanding and improving hospital facilities and services.</p>
      </div>
    </div>
  </div>
</section>


<style>
/* ======================================
   Donate Page Styling
====================================== */

/* HERO */
.donate-hero {
  position: relative;
  background: linear-gradient(to right, var(--primary-color) , var(--primary-dark));
  color: #fff;
  text-align: center;
  padding: 100px 20px;
  overflow: hidden;
}

.donate-hero .overlay {
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  background: rgba(237, 27, 36, 0.7);
}

.hero-text {
  position: relative;
  max-width: 700px;
  margin: auto;
  z-index: 2;
}

.hero-text h1 {
  font-size: 3rem;
  font-weight: 700;
  margin-bottom: 15px;
}

.hero-text p {
  font-size: 1.1rem;
  line-height: 1.7;
  margin-bottom: 30px;
}

.btn-donate-now {
  background: var(--primary-color);
  color: var(--white);
  padding: 12px 30px;
  border-radius: 6px;
  font-weight: lighter;
  transition: all 0.3s ease;
  box-shadow: 5px 5px 1px 0 var(--white);
}

.btn-donate-now:hover {
  color: #fff;
  box-shadow: 1px 1px 1px 0 var(--white);
}

/* WHY DONATE */
.why-donate {
  background: #fff;
  padding: 80px 20px;
  text-align: center;
}

.why-donate h2 {
  color: var(--primary-color);
  font-size: 2.2rem;
  margin-bottom: 50px;
  font-weight: 700;
}

.help-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
  gap: 30px;
}

.help-card {
  background: var(--light);
  padding: 35px 25px;
  border-radius: 15px;
  transition: all 0.3s ease;
  box-shadow: 0 8px 20px rgba(0,0,0,0.05);
}

.help-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 12px 30px rgba(237,27,36,0.2);
}

.help-card i {
  font-size: 3rem;
  color: var(--primary-color);
  margin-bottom: 15px;
}

.help-card h3 {
  color: var(--secondary-color);
  font-size: 1.3rem;
  margin-bottom: 10px;
  font-weight: 100;
}

/* VIDEO SECTION */
.donate-video {
  background: var(--light);
  padding: 80px 0;
  text-align: center;
}

.video-wrapper {
  max-width: 900px;
  margin: 0 auto;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

/* WAYS TO DONATE */
.donate-ways {
  background: #fff;
  padding: 100px 20px;
  text-align: center;
}

.donate-ways h2 {
  color: var(--primary-color);
  font-size: 2.2rem;
  font-weight: 700;
  margin-bottom: 40px;
}

.donate-methods {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 30px;
  margin-bottom: 60px;
}

.donate-card {
  background: #fff;
  border: 2px solid var(--primary-color);
  border-radius: 15px;
  padding: 35px 25px;
  width: 100%;
  transition: all 0.3s ease;
  box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}

.donate-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(237,27,36,0.2);
}

.donate-card i {
  font-size: 2.5rem;
  color: var(--primary-color);
  margin-bottom: 15px;
}

.donate-card h3 {
  font-size: 1.4rem;
  color: var(--primary-color);
  margin-bottom: 15px;
}

.donate-card p {
  font-size: 0.95rem;
  color: #333;
  margin: 5px 0;
  line-height: 1.6;
}

.other-ways {
  max-width: 100%;
  margin: 0 auto;
  background: var(--light);
  padding: 30px;
  border-left: 5px solid var(--primary-color);
  border-right: 5px solid var(--primary-color);
  border-radius: 6px;
  box-shadow: 0 8px 25px rgba(0,0,0,0.05);
}
.help-card p {
    font-size: 12px;
    font-weight: lighter;
    line-height: 1.2em;
    color: #8c8c8c;
}

.help-card svg {
    height: 2em;
    padding-bottom: 1em;
    color: var(--primary-color);
}
 

.other-ways h3 {
  color: var(--primary-color);
  margin-bottom: 10px;
  font-size: 1.3rem;
}

.whatsapp-note {
  color: var(--primary-color);
  font-weight: 600;
  margin-top: 10px;
}

/* RESPONSIVE */
@media (max-width: 768px) {
  .hero-text h1 {
    font-size: 2.2rem;
  }
  .donate-card {
    width: 100%;
  }
}
</style>

<?php include "includes/footer.php"; ?>
