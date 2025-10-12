<?php 
$page_title = "Contact - Shaheed Foundation Hospital";
include "includes/header.php"; 
?>
<h1>Contact Us</h1>
<form action="contact_process.php" method="post">
  <label>Name:<input type="text" name="name" required></label><br>
  <label>Email:<input type="email" name="email" required></label><br>
  <label>Message:<textarea name="message" required></textarea></label><br>
  <button type="submit">Send</button>
</form>
<?php include "includes/footer.php"; ?>
