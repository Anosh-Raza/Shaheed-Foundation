<?php 
$page_title = "Donate - Shaheed Foundation Hospital";
include "includes/header.php"; 
?>

<!-- Donation Hero Section -->
<section class="donation-hero">
  <div class="container">
    <div class="hero-content">
      <h1>Support Healthcare for All</h1>
      <p>Your generous donation helps us provide affordable medical care to underserved communities in Pakistan.</p>
    </div>
  </div>
</section>

<!-- Donation Form Section -->
<section class="donation-form-section">
  <div class="container">
    <div class="donation-wrapper">
      <div class="donation-info">
        <h2>How Your Donation Helps</h2>
        <div class="help-items">
          <div class="help-item">
            <i class="fa-solid fa-heart-pulse"></i>
            <h3>Medical Equipment</h3>
            <p>Help us acquire modern medical equipment and technology</p>
          </div>
          <div class="help-item">
            <i class="fa-solid fa-user-doctor"></i>
            <h3>Medical Staff</h3>
            <p>Support our doctors and medical professionals with training and resources</p>
          </div>
          <div class="help-item">
            <i class="fa-solid fa-pills"></i>
            <h3>Medicines & Treatment</h3>
            <p>Provide free or subsidized medicines to patients in need</p>
          </div>
          <div class="help-item">
            <i class="fa-solid fa-building-hospital"></i>
            <h3>Facility Improvement</h3>
            <p>Improve our hospital facilities and infrastructure</p>
          </div>
        </div>
      </div>

      <div class="donation-form-container">
        <form class="donation-form" id="donationForm">
          <h3>Make a Donation</h3>
          
          <div class="form-group">
            <label for="amount">Donation Amount (PKR)</label>
            <div class="amount-buttons">
              <button type="button" class="amount-btn" data-amount="1000">₨1,000</button>
              <button type="button" class="amount-btn" data-amount="2500">₨2,500</button>
              <button type="button" class="amount-btn" data-amount="5000">₨5,000</button>
              <button type="button" class="amount-btn" data-amount="10000">₨10,000</button>
            </div>
            <input type="number" id="customAmount" placeholder="Enter custom amount" min="100">
          </div>

          <div class="form-group">
            <label for="donorName">Full Name *</label>
            <input type="text" id="donorName" required>
          </div>

          <div class="form-group">
            <label for="donorEmail">Email Address *</label>
            <input type="email" id="donorEmail" required>
          </div>

          <div class="form-group">
            <label for="donorPhone">Phone Number</label>
            <input type="tel" id="donorPhone">
          </div>

          <div class="form-group">
            <label for="donationType">Donation Type</label>
            <select id="donationType">
              <option value="general">General Donation</option>
              <option value="medical-equipment">Medical Equipment</option>
              <option value="patient-care">Patient Care</option>
              <option value="facility-upgrade">Facility Upgrade</option>
              <option value="emergency-fund">Emergency Fund</option>
            </select>
          </div>

          <div class="form-group">
            <label>
              <input type="checkbox" id="anonymous"> Make this donation anonymous
            </label>
          </div>

          <div class="form-group">
            <label for="message">Message (Optional)</label>
            <textarea id="message" rows="3" placeholder="Any message you'd like to include..."></textarea>
          </div>

          <button type="submit" class="donate-btn">Donate Now</button>
          
          <p class="donation-note">
            <i class="fa-solid fa-shield-halved"></i>
            Your donation is secure and will be processed through our trusted payment partner.
          </p>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Alternative Donation Methods -->
<section class="alternative-donation">
  <div class="container">
    <h2>Other Ways to Donate</h2>
    <div class="donation-methods">
      <div class="method">
        <i class="fa-solid fa-university"></i>
        <h3>Bank Transfer</h3>
        <p><strong>Account Title:</strong> Shaheed Foundation Hospital</p>
        <p><strong>Account Number:</strong> 1234567890</p>
        <p><strong>Bank:</strong> Allied Bank Limited</p>
        <p><strong>Branch Code:</strong> 0123</p>
      </div>
      <div class="method">
        <i class="fa-solid fa-mobile-alt"></i>
        <h3>Easy Paisa/JazzCash</h3>
        <p><strong>Number:</strong> 021-36366335</p>
        <p>Send amount and mention "Hospital Donation"</p>
      </div>
      <div class="method">
        <i class="fa-solid fa-credit-card"></i>
        <h3>Credit/Debit Card</h3>
        <p>Visit our hospital reception to make a card payment</p>
        <p>Our staff will assist you with the process</p>
      </div>
    </div>
  </div>
</section>

<style>
.donation-hero {
  background: linear-gradient(135deg, var(--primary-color), #d4650a);
  color: var(--white);
  padding: 100px 20px 80px;
  text-align: center;
}

.hero-content h1 {
  font-size: 3rem;
  font-weight: 700;
  margin-bottom: 20px;
}

.hero-content p {
  font-size: 1.2rem;
  max-width: 600px;
  margin: 0 auto;
  line-height: 1.6;
}

.donation-form-section {
  padding: 80px 20px;
  background: var(--light);
}

.donation-wrapper {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 60px;
  align-items: start;
}

.donation-info h2 {
  color: var(--primary-color);
  font-size: 2.2rem;
  margin-bottom: 40px;
}

.help-items {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 30px;
}

.help-item {
  text-align: center;
  padding: 30px 20px;
  background: var(--white);
  border-radius: 15px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.08);
  transition: transform 0.3s ease;
}

.help-item:hover {
  transform: translateY(-5px);
}

.help-item i {
  font-size: 3rem;
  color: var(--primary-color);
  margin-bottom: 15px;
}

.help-item h3 {
  font-size: 1.2rem;
  margin-bottom: 10px;
  color: var(--secondary-color);
}

.help-item p {
  color: #666;
  line-height: 1.5;
}

.donation-form-container {
  background: var(--white);
  padding: 40px;
  border-radius: 15px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.donation-form h3 {
  color: var(--primary-color);
  font-size: 1.8rem;
  margin-bottom: 30px;
  text-align: center;
}

.form-group {
  margin-bottom: 25px;
}

.form-group label {
  display: block;
  margin-bottom: 8px;
  font-weight: 600;
  color: var(--secondary-color);
}

.amount-buttons {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 10px;
  margin-bottom: 15px;
}

.amount-btn {
  padding: 12px 20px;
  border: 2px solid #ddd;
  background: var(--white);
  border-radius: 8px;
  cursor: pointer;
  transition: all 0.3s ease;
  font-weight: 600;
}

.amount-btn:hover,
.amount-btn.active {
  border-color: var(--primary-color);
  background: var(--primary-color);
  color: var(--white);
}

.form-group input,
.form-group select,
.form-group textarea {
  width: 100%;
  padding: 12px 15px;
  border: 2px solid #ddd;
  border-radius: 8px;
  font-size: 1rem;
  transition: border-color 0.3s ease;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
  outline: none;
  border-color: var(--primary-color);
}

.donate-btn {
  width: 100%;
  background: var(--primary-color);
  color: var(--white);
  padding: 15px;
  border: none;
  border-radius: 8px;
  font-size: 1.1rem;
  font-weight: 600;
  cursor: pointer;
  transition: background 0.3s ease;
}

.donate-btn:hover {
  background: #d4650a;
}

.donation-note {
  text-align: center;
  margin-top: 15px;
  color: #666;
  font-size: 0.9rem;
}

.donation-note i {
  color: var(--primary-color);
  margin-right: 5px;
}

.alternative-donation {
  padding: 80px 20px;
  background: var(--white);
}

.alternative-donation h2 {
  text-align: center;
  color: var(--primary-color);
  font-size: 2.2rem;
  margin-bottom: 50px;
}

.donation-methods {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 40px;
}

.method {
  text-align: center;
  padding: 40px 30px;
  background: var(--light);
  border-radius: 15px;
  transition: transform 0.3s ease;
}

.method:hover {
  transform: translateY(-5px);
}

.method i {
  font-size: 3rem;
  color: var(--primary-color);
  margin-bottom: 20px;
}

.method h3 {
  font-size: 1.3rem;
  margin-bottom: 20px;
  color: var(--secondary-color);
}

.method p {
  margin-bottom: 8px;
  color: #666;
  line-height: 1.5;
}

@media (max-width: 992px) {
  .donation-wrapper {
    grid-template-columns: 1fr;
    gap: 40px;
  }
  
  .help-items {
    grid-template-columns: 1fr;
  }
  
  .donation-methods {
    grid-template-columns: 1fr;
  }
}

@media (max-width: 768px) {
  .hero-content h1 {
    font-size: 2rem;
  }
  
  .amount-buttons {
    grid-template-columns: 1fr;
  }
  
  .donation-form-container {
    padding: 30px 20px;
  }
}
</style>

<script>
// Donation form functionality
document.addEventListener('DOMContentLoaded', function() {
    const amountButtons = document.querySelectorAll('.amount-btn');
    const customAmountInput = document.getElementById('customAmount');
    const donationForm = document.getElementById('donationForm');

    // Handle amount button clicks
    amountButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            amountButtons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            customAmountInput.value = this.dataset.amount;
        });
    });

    // Handle custom amount input
    customAmountInput.addEventListener('input', function() {
        amountButtons.forEach(b => b.classList.remove('active'));
    });

    // Handle form submission
    donationForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const amount = customAmountInput.value;
        const name = document.getElementById('donorName').value;
        const email = document.getElementById('donorEmail').value;
        
        if (!amount || !name || !email) {
            alert('Please fill in all required fields.');
            return;
        }
        
        if (amount < 100) {
            alert('Minimum donation amount is ₨100.');
            return;
        }
        
        // Here you would integrate with a payment gateway
        alert('Thank you for your donation! You will be redirected to the payment gateway shortly.');
        
        // For now, just show a success message
        // In a real implementation, you would redirect to payment gateway
    });
});
</script>

<?php include "includes/footer.php"; ?>



