<?php 
$page_title = "Home - Al Shaheed Hospital ";
include "includes/header.php"; 
?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-slider">

        <div class="slide active">
            <img src="assets/images/banner1.jpeg" alt="Hospital Front View">
            <div class="slide-content">
                <h1>Welcome to Al Shaheed Hospital </h1>
                <p>Providing affordable healthcare with compassion and dignity.</p>
                <a href="about.php" class="btn-hero">Learn More</a>
            </div>
        </div>

        <div class="slide">
            <img src="assets/images/banner2.jpeg" alt="Doctors Team">
            <div class="slide-content">
                <h1>Our Expert Medical Team</h1>
                <p>Dedicated doctors and specialists serving the community.</p>
                <a href="services.php" class="btn-hero">Our Services</a>
            </div>
        </div>

    </div>

    <!-- Slider controls -->
    <div class="slider-controls">
        <span class="prev"><i class="fa-solid fa-chevron-left"></i></span>
        <span class="next"><i class="fa-solid fa-chevron-right"></i></span>
    </div>

    <!-- Dots -->
    <div class="slider-dots"></div>
</section>

<!-- Youtube Video Section -->
<section class="yt-video-section">
  <div class="yt-container">
    <div class="yt-video-content">
      <div class="yt-video-text">
        <h2>Our Journey to Healing Lives</h2>
        <p>
          At Al Shaheed Hospital , we are dedicated to providing compassionate healthcare with modern
          technology and a human touch.
          Watch our story to learn more about our mission and the people who make it possible.
        </p>
      </div>

      <div class="yt-video-frame">
        <div class="yt-video-wrapper">
          <iframe
            src="https://www.youtube.com/embed/LyJUfSZLNtA?autoplay=1&mute=1&loop=1&playlist=LyJUfSZLNtA&controls=1&modestbranding=1&rel=0"
            title="Al Shaheed Hospital  Video"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen>
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Youtube Video Section End-->

<!-- Info Section -->
<section class="info-section">
    <div class="container">
        <h5 class="subheading">Our Mission</h5>
        <h2 class="main-heading">Delivering Compassionate Healthcare to Everyone</h2>
        <p class="section-text">
            Al Shaheed Hospital  is dedicated to providing affordable and accessible medical
            care to all individuals in need. Our mission is to bridge the healthcare gap in underserved
            communities by offering modern facilities, professional expertise, and a compassionate
            approach. Every patient matters — and every life counts.
        </p>
    </div>
</section>
<!-- Info Section End-->

<section class="gallery-content-section">
    <div class="gallery-content-container container">

        <!-- Left Column: Stacked Gallery -->
        <div class="gallery-column">
            <div class="stacked-container">
                <img src="assets/images/gallery1.jpg" alt="Hospital 1">
                <img src="assets/images/gallery2.jpg" alt="Hospital 2">
                <img src="assets/images/gallery3.jpg" alt="Hospital 3">
                <img src="assets/images/gallery4.jpg" alt="Hospital 4">
                <img src="assets/images/gallery5.jpg" alt="Hospital 5">
            </div>
        </div>

        <!-- Right Column: Text & CTA -->
        <div class="content-column">
            <h2 class="section-heading">Dedicated to Exceptional Healthcare</h2>
            <p class="section-description">
                At Al Shaheed Hospital , we’re committed to providing advanced healthcare
                services with compassion and expertise. Our facilities are equipped with modern
                technology and a team of experienced medical professionals ready to care for you.
            </p>
            <a href="/shaheed/contact.php" class="cta-btn">Book an Appointment</a>
        </div>

    </div>
</section>



<!-- Youtube Section -->
<section class="talk-health">
    <div class="container">
        <h3 class="subheading">Let's Talk Health</h3>
        <p class="description">
            Learn from our experts as they discuss important health issues affecting our local communities.
        </p>

        <div class="video-grid">
            <!-- Video 1 -->
            <a href="https://www.youtube.com/watch?si=au-8A-5Ikx10qraE&v=-KSRYccL8R4&feature=youtu.be" target="_blank"
                class="video-item" data-video-id="-KSRYccL8R4">
                <div class="thumbnail">
                    <img alt="Mental Health Awareness">
                    <div class="overlay">
                        <div class="youtube-button">
                            <i class="fa-brands fa-youtube"></i>
                            <span>Watch on YouTube</span>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Video 2 -->
            <a href="https://www.youtube.com/watch?si=au-8A-5Ikx10qraE&v=-KSRYccL8R4&feature=youtu.be" target="_blank"
                class="video-item" data-video-id="-KSRYccL8R4">
                <div class="thumbnail">
                    <img alt="Healthy Living Tips">
                    <div class="overlay">
                        <div class="youtube-button">
                            <i class="fa-brands fa-youtube"></i>
                            <span>Watch on YouTube</span>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Video 3 -->
            <a href="https://www.youtube.com/watch?si=au-8A-5Ikx10qraE&v=-KSRYccL8R4&feature=youtu.be" target="_blank"
                class="video-item" data-video-id="-KSRYccL8R4">
                <div class="thumbnail">
                    <img alt="Exercise for Health">
                    <div class="overlay">
                        <div class="youtube-button">
                            <i class="fa-brands fa-youtube"></i>
                            <span>Watch on YouTube</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<script>
// Automatically set YouTube thumbnail for each video-item
document.querySelectorAll('.video-item').forEach(item => {
    const videoId = item.getAttribute('data-video-id');
    const img = item.querySelector('img');
    img.src = `https://img.youtube.com/vi/${videoId}/hqdefault.jpg`;
});
</script>



<!-- Spedicalities Section -->
<section class="specialties-section">
    <div class="container">
        <h2 class="section-title">Our Specialties</h2>

        <div class="specialties-grid">
            <div class="specialty-box">
                <a href="services/pediatrician.php">
                    <img src="assets/images/Pediatrician.png" alt="Pediatrician">
                    <p>Pediatrician</p>
                </a>
            </div>

            <div class="specialty-box">
                <a href="services/orthopedic.php">
                    <img src="assets/images/orthopedic.png" alt="General Surgery">
                    <p>Orthopedic</p>
                </a>
            </div>
            <div class="specialty-box">
                <a href="services/opd.php">
                    <img src="assets/images/OPD.png" alt="ENT">
                    <p>OPD</p>
                </a>
            </div>
            <div class="specialty-box">
                <a href="services/general-opd.php">
                    <img src="assets/images/general_opd.png" alt="Nephrology">
                    <p>General OPD</p>
                </a>
            </div>
            <div class="specialty-box">
                <a href="services/ent.php">
                    <img src="assets/images/ent.png" alt="Dentistry">
                    <p>END</p>
                </a>
            </div>
            <div class="specialty-box">
                <a href="services/endocrinologist.php">
                    <img src="assets/images/endocrinologist.png" alt="Internal Medicine">
                    <p>Endocrinologist</p>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Specialities Section End-->


<!-- News Section -->
<section class="news-section">
    <div class="container">
        <h2 class="section-heading">News & Events</h2>

        <div class="news-grid">
            <!-- News Item 1 -->
            <div class="news-item">
                <div class="news-thumb">
                    <img src="https://www.shaheedfoundation.org/assets/images/hospital_advert.jpg" alt="News 1">
                    <span class="badge">NEWS & EVENTS</span>
                </div>
                <div class="news-content">
                    <h4>SHIFA Organizes The 1st Local Pediatric Dysphagia Support Group</h4>
                    <p class="date">May 23, 2023</p>
                </div>
            </div>

            <!-- News Item 2 -->
            <div class="news-item">
                <div class="news-thumb">
                    <img src="https://www.shaheedfoundation.org/assets/images/hospital_advert.jpg" alt="News 2">
                    <span class="badge">NEWS & EVENTS</span>
                </div>
                <div class="news-content">
                    <h4>Congratulations. Shifa Surgery Team and Dr. Ghulam Siddiq Achieved the Milestone of Completing
                        1000 Bariatric Surgeries</h4>
                    <p class="date">April 1, 2024</p>
                </div>
            </div>

            <!-- News Item 3 -->
            <div class="news-item">
                <div class="news-thumb">
                    <img src="https://www.shaheedfoundation.org/assets/images/hospital_advert.jpg" alt="News 3">
                    <span class="badge">NEWS & EVENTS</span>
                </div>
                <div class="news-content">
                    <h4>Over 660 Graduates Awarded Degrees at 10th Convocation of Shifa Tameer-e-Millat University
                        (STMU)</h4>
                    <p class="date">April 1, 2024</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- News Section End-->


<?php include "testimonials.php"; ?>



<!-- Newsletter Donate Section -->
<section class="newsletter-donate">
  <div class="container">
    <div class="content-wrapper">
      <!-- Left Content -->
      <div class="newsletter-content">
        <h2 class="heading">Stay Connected With Us</h2>
        <p class="text">
          Subscribe to our newsletter and receive updates about our medical programs,
          health awareness events, and community initiatives.
        </p>
        <form class="newsletter-form">
          <input type="email" placeholder="Enter your email address" required>
          <button type="submit" class="btn-subscribe">Subscribe</button>
        </form>
      </div>

      <!-- Right Content -->
      <div class="donate-box">
        <h3>Your Support Makes a Difference</h3>
        <p>
          Every donation helps us improve healthcare facilities and serve those in need.
        </p>
        <a href="donate.php" class="news btn-donate">Donate Now</a>
      </div>
    </div>
  </div>
</section>
<!-- Newsletter Donate Section End -->


<?php include "includes/footer.php"; ?>