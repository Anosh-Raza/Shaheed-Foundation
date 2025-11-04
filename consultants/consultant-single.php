<?php
// Dynamic Consultant Data
$consultant = [
  'name' => 'Dr. Murtuza Kazmi',
  'image' => '../assets/images/murtaza.jpg',
  'qualification' => 'Family Physician (M.B.B.S)',
  'department' => 'Family Medicine',
  'bio' => 'Dr. Murtuza Kazmi has years of experience in family medicine, providing comprehensive care for patients of all ages. He is dedicated to patient-centered care and preventive health, ensuring that every patient receives the best possible attention.',
  'education' => [
    'MBBS – Karachi Medical and Dental College',
    'Residency – Family Medicine, Civil Hospital Karachi'
  ],
  'timings' => [
    'Monday to Saturday' => '5:00 PM – 10:00 PM'
  ]
];
?>

<?php include('../includes/header.php'); ?>

<!-- Consultant Profile Section -->
<section class="consultant-profile">
  <div class="container consultant-container">

    <!-- Consultant Image -->
    <div class="consultant-image">
      <img src="<?php echo $consultant['image']; ?>" 
           alt="<?php echo $consultant['name']; ?>" />
    </div>

    <!-- Consultant Details -->
    <div class="consultant-details">
      <h2 class="consultant-name"><?php echo $consultant['name']; ?></h2>
      <p class="consultant-designation">
        <?php echo $consultant['qualification']; ?>
      </p>
      <p class="consultant-department">
        <?php echo $consultant['department']; ?>
      </p>

      <div class="consultant-bio">
        <p><?php echo $consultant['bio']; ?></p>
      </div>

      <div class="consultant-info">
        <h3>Education & Qualifications</h3>
        <ul>
          <?php foreach ($consultant['education'] as $edu) { echo "<li>$edu</li>"; } ?>
        </ul>
      </div>

      <div class="consultant-timings">
        <h3>Hospital Timings</h3>
        <table>
          <tr>
            <th>Day</th>
            <th>Timings</th>
          </tr>
          <?php foreach ($consultant['timings'] as $day => $time) {
            echo "<tr><td>$day</td><td>$time</td></tr>";
          } ?>
        </table>
      </div>
    </div>
  </div>
</section>

<?php include('../includes/footer.php'); ?>

