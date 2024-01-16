<?php
 $to = "graceaaloo@gmail.com";

 //subject
 $subject = "Testing out php";
 //message
 $message = "<h1>Test</h1><p>Lets see if you work</p>";
 //headers
 $headers = "From: The Sender Name <test@test.com>\r\n";
 $headers .= "Reply-To: replyto@test.test.com";
 $headers .= "Content-type: text/html\r\n";

// Set the sendmail_path configuration option
ini_set("sendmail_path", "C:\\xampp\\sendmail\\sendmail.exe -t");

// Set SMTP settings
ini_set("SMTP", "smtp.gmail.com");
ini_set("smtp_port", 587);
ini_set("sendmail_from", "graceaaluoch@gmail.com");

// Enable STARTTLS
ini_set("smtp_tls", "tls");

 //send mail
 mail($to, $subject, $message, $headers);
?>