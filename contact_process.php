<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = htmlspecialchars($_POST["name"]);
  $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
  $message = htmlspecialchars($_POST["message"]);

  if($email){
    $to = "yourhospital@email.com";
    $subject = "Website Contact Form";
    $body = "From: $name\nEmail: $email\nMessage:\n$message";

    if(mail($to, $subject, $body)){
      echo "Message sent successfully.";
    } else {
      echo "Failed to send. Try again later.";
    }
  } else {
    echo "Invalid email.";
  }
}
