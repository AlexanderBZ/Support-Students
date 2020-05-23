<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];

  $email_from = 'alexander.atlvibes@gmail.com';
  $email_subject = "New Sign Up";
  $email_body = "Name: $name.\n".
                  "Email: $visitor_email.\n";

  $to = "atlvibesnow@gmail.com";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To": $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("Location: index.html");
?>
