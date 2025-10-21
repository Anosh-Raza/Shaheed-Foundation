<?php 
$page_title = "Consultants - Al Shaheed Hospital";
include "includes/header.php"; 
?>

<!-- HERO SECTION -->
<section class="consultants-hero">
    <div class="container">
        <h1>Our Consultants</h1>
        <p>Meet our highly qualified and experienced medical consultants serving at Al Shaheed Hospital.</p>
    </div>
</section>

<!-- CONSULTANTS SECTION -->
<section class="consultants-section">
    <div class="container">
        <div class="consultant-grid">

            <!-- DR MURTUZA KAZMI -->
            <div class="consultant-card">
                <h3>Dr. Murtuza Kazmi</h3>
                <p class="specialty">Family Physician (M.B.B.S)</p>
                <p><strong>Days:</strong> Monday to Saturday</p>
                <p><strong>Timing:</strong> 5:00 PM to 10:00 PM</p>
                <p><strong>Location:</strong> Al-Shaheed Polyclinic</p>
            </div>

            <!-- DR MARYAM ALI -->
            <div class="consultant-card">
                <h3>Dr. Maryam Ali</h3>
                <p class="specialty">Family Physician (M.B.B.S)</p>
                <p><strong>Days:</strong> Monday to Friday</p>
                <p><strong>Timing:</strong> 5:00 PM to 8:00 PM</p>
                <p><strong>Location:</strong> Al-Shaheed Polyclinic</p>
            </div>

            <!-- DR ZUBAIR AHMAD HASHMI -->
            <div class="consultant-card">
                <h3>Dr. Zubair Ahmad Hashmi</h3>
                <p class="specialty">ENT Specialist (M.B.B.S, D.L.O)</p>
                <p><strong>Days:</strong> Wednesday & Friday</p>
                <p><strong>Timing:</strong> 6:00 PM to 8:00 PM</p>
            </div>

            <!-- DR JAH MIRZA MOHSIN -->
            <div class="consultant-card">
                <h3>Dr. Jah Mirza Mohsin</h3>
                <p class="specialty">Orthopaedic Surgeon (M.B.B.S, FCPS, FRCS)</p>
                <p><strong>Days:</strong> Tuesday & Friday</p>
                <p><strong>Timing:</strong> 5:00 PM to 6:00 PM</p>
            </div>

            <!-- DR KASHIF ABBAS -->
            <div class="consultant-card">
                <h3>Dr. Kashif Abbas</h3>
                <p class="specialty">Paediatric Consultant (M.B.B.S, FCPS - Paediatric Medicine)</p>
                <p><strong>Days:</strong> Tuesday, Thursday & Saturday</p>
                <p><strong>Timing:</strong> 5:30 PM to 6:30 PM</p>
            </div>

            <!-- DR BAREEN KAMRAN -->
            <div class="consultant-card">
                <h3>Dr. Bareen Kamran</h3>
                <p class="specialty">Consultant Physiotherapist (MSPT - LNH, BSPT, DPT - JPMC)</p>
                <p><strong>Days:</strong> Monday to Saturday</p>
                <p><strong>Timing:</strong> 5:00 PM to 7:00 PM</p>
            </div>

            <!-- DR SAIMA ASKARI -->
            <div class="consultant-card">
                <h3>Dr. Saima Askari</h3>
                <p class="specialty">Consultant Endocrinologist (FCPS Medicine, FCPS Endo)</p>
                <p><strong>Day:</strong> Thursday</p>
                <p><strong>Timing:</strong> 5:00 PM to 6:00 PM</p>
            </div>

        </div>
    </div>
</section>

<style>
/* ===========================
   CONSULTANTS PAGE STYLING
=========================== */

:root {
    --primary-color: #ed1b24;
    --light-bg: #f9f9f9;
    --text-dark: #333;
}

.consultants-hero {
    background: linear-gradient(to right, var(--primary-color), var(--primary-dark));
    color: #fff;
    text-align: center;
    padding: 100px 20px 60px;
}

.consultants-hero h1 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 10px;
}

.consultants-hero p {
    font-size: 1.1rem;
    opacity: 0.9;
}

.consultants-section {
    background: var(--light-bg);
    padding: 80px 20px;
}

.consultant-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
}

.consultant-card {
    background: #fff;
    border-radius: 15px;
    padding: 25px 20px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    border-top: 5px solid var(--primary-color);
    transition: transform 1000ms ease;
}

.consultant-card:hover {
    border-bottom: 5px solid var(--primary-color);
    border-top: none;
    transition: transform 1000ms ease;
}

.consultant-card h3 {
    color: var(--primary-color);
    font-size: 1.3rem;
    font-weight: 700;
    margin-bottom: 8px;
}

.consultant-card .specialty {
    color: #555;
    font-weight: 600;
    margin-bottom: 12px;
}

.consultant-card p {
    color: var(--text-dark);
    font-size: 0.95rem;
    margin: 5px 0;
}

@media (max-width: 768px) {
    .consultants-hero h1 {
        font-size: 2rem;
    }

    .consultants-section {
        padding: 60px 15px;
    }
}
</style>

<?php include "includes/footer.php"; ?>