<?php 
$base_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/';
?>

<?php if (!empty($doctor)): ?>
<div class="doctor-card">
    <a href="<?php echo $base_url . 'consultant.php?id=' . $doctor['id']; ?>">

        <?php if (!empty($doctor['image'])): ?>
            <img src="<?php echo $doctor['image']; ?>" alt="<?php echo $doctor['name']; ?>">
        <?php endif; ?>

        <?php if (!empty($doctor['name'])): ?>
            <h4><?php echo $doctor['name']; ?></h4>
        <?php endif; ?>

        <?php if (!empty($doctor['card-title'])): ?>
            <p><?php echo $doctor['card-title']; ?></p>
        <?php endif; ?>

        <!-- Timings → show only if value exists -->
        <?php if (!empty($doctor['timings'])): ?>
            <span class="timings"><h5>Timings -</h5><?php echo $doctor['timings']; ?></span><br>
        <?php endif; ?>

        <?php if (!empty($doctor['timings1'])): ?>
            <span class="timings"><h5>Slot 1 -</h5><?php echo $doctor['timings1']; ?></span><br>
        <?php endif; ?>

        <?php if (!empty($doctor['timings2'])): ?>
            <span class="timings"><h5>Slot 2 -</h5><?php echo $doctor['timings2']; ?></span><br>
        <?php endif; ?>

        <!-- Days -->
        <?php if (!empty($doctor['days'])): ?>
            <span class="days"><h5>Days -</h5><?php echo $doctor['days']; ?></span>
        <?php endif; ?>

    </a>
</div>
<?php endif; ?>
