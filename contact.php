<?php

 $to_email = "asad2101f@aptechsite.net";
 $name = $_POST['yname'];
 $email = $_POST['email'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];
 $headers = "From: Portfolio Contact Form";

 if (mail($to_email, $subject, "$name,\n$message\n,$email", $headers)) {
   echo "Email successfully sent to $to_email...";
 } else {
   echo "Email sending failed...";
 }

?>