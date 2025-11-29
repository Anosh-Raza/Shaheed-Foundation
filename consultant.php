<?php 
$page_title = "Consultants - Al Shaheed Hospital";
include "includes/header.php"; 
?>

<?php
include 'data/doctors.php';

$id = $_GET['id'] ?? null;

if (!$id || !isset($doctors[$id])) {
    echo "Doctor not found.";
    exit;
}

$doctor = $doctors[$id];
?>

<div class="container">
<section class="consultant-profile">

    <div class="consultant-container">

        <!-- Doctor Image -->
        <div class="consultant-image">
            <img src="<?php echo $doctor['image']; ?>" alt="<?php echo $doctor['name']; ?>">
        </div>

        <!-- Details -->
        <div class="consultant-details">

            <h2 class="consultant-name"><?php echo $doctor['name']; ?></h2>
            <p class="consultant-designation"><?php echo $doctor['speciality']; ?></p>

            <div class="consultant-info">

                <!-- Education -->
                <?php if (!empty($doctor['education'])): ?>
                    <h3>Education</h3>
                    <p><?php echo $doctor['education']; ?></p>
                <?php endif; ?>

                <!-- Qualification -->
                <?php if (!empty($doctor['qualification'])): ?>
                    <h3>Qualification</h3>
                    <p><?php echo $doctor['qualification']; ?></p>
                <?php endif; ?>

                <!-- Experience -->
                <?php if (!empty($doctor['experience'])): ?>
                    <h3>Experience</h3>
                    <p><?php echo $doctor['experience']; ?></p>
                <?php endif; ?>

                <!-- Bio -->
                <?php if (!empty($doctor['bio'])): ?>
                    <h3>Bio</h3>
                    <p><?php echo $doctor['bio']; ?></p>
                <?php endif; ?>

            </div>

            <!-- Timings Section -->
            <?php if (!empty($doctor['days']) || !empty($doctor['timings'])): ?>
            <div class="consultant-timings">
                <h3>Consultation Timings</h3>

                <table>
                    <thead>
                        <tr>
                            <th>Day</th>
                            <th>Slot 1</th>
                            <th>Slot 2</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- First Row -->
                        <?php if (!empty($doctor['days']) || !empty($doctor['timings']) || !empty($doctor['timings1'])): ?>
                        <tr>
                            <td><?php echo $doctor['days'] ?? "—"; ?></td>
                            <td><?php echo $doctor['timings'] ?? "—"; ?></td>
                            <td><?php echo $doctor['timings1'] ?? "—"; ?></td>
                        </tr>
                        <?php endif; ?>

                        <!-- Second Row -->
                        <?php if (!empty($doctor['timings2'])): ?>
                        <tr>
                            <td><?php echo $doctor['days2'] ?? "Additional Day"; ?></td>
                            <td><?php echo $doctor['timings2']; ?></td>
                            <td><?php echo $doctor['timings3'] ?? "—"; ?></td>
                        </tr>
                        <?php endif; ?>

                    </tbody>
                </table>
            </div>
            <?php endif; ?>

            <!-- <a href="#" class="btn-appointment">Book Appointment</a> -->

        </div>

    </div>

</section>
</div>




<?php 
include "includes/footer.php"; 
?>