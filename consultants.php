<?php 
$page_title = "Consultants - Al Shaheed Hospital";
include "includes/header.php"; 
?>

<!-- HERO SECTION -->
<section class="consultants-hero">
    <div class="container">
        <h1>Doctors & Consultants</h1>
        <p>Meet our highly qualified and experienced medical consultants serving at Al Shaheed Hospital.</p>
    </div>
</section>

<?php include 'data/doctors.php'; ?>

<!-- CONSULTANTS SECTION -->
<section class="consultants-section">
    <div class="container">
        <div class="doctors-grid">
            <?php foreach ($doctors as $doctor) {
        include 'components/doctor-card.php';
    } ?>
        </div>
    </div>
</section>



<?php include "includes/footer.php"; ?>