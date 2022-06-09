<?php
  $to_email = "hammadhero23112000@gmail.com";
  $subject = "Test Email";
  $body = "Hi this is a test email send by a php script";
  $headers = "From: hammadhero23112000@gmail.com";
  if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email ...";
  } 
  else {
    echo "Email sending failed...";
  }
?>