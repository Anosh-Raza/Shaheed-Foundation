<?php 
$page_title = "Contact - Shaheed Foundation Hospital";
include "includes/header.php"; 
?>

<section class="contact-section">
  <div class="container">
    <div class="contact-wrapper">
      
      <!-- Left Column: Heading + Info -->
      <div class="contact-info">
        <h1 class="contact-title">Get in Touch</h1>
        <p class="contact-text">
          We’re here to help you with any inquiries, appointments, or feedback.
          Reach out to us and we’ll respond as soon as possible.
        </p>

        <ul class="contact-details">
          <li><i class="fa-solid fa-phone"></i> <a href="tel:+923332180641">+92 333 2180641</a></li>
          <li><i class="fa-solid fa-envelope"></i> <a href="mailto:info@shaheedfoundation.org">info@shaheedfoundation.org</a></li>
          <li><i class="fa-solid fa-location-dot"></i>  ST-1/C,Block 6,FB Area,<br>Shahra e Pakistan, Karachi, Pakistan</li>
        </ul>
      </div>

      <!-- Right Column: Form -->
      <div class="contact-form-container">
        <form action="contact_process.php" method="post" class="contact-form">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required placeholder="Your full name">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required placeholder="your@email.com">
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required placeholder="Type your message..."></textarea>
          </div>
          <button type="submit" class="btn-primary">Send Message</button>
        </form>
      </div>

    </div>
  </div>
</section>

<?php include "includes/footer.php"; ?>


