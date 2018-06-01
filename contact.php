<?php
$name = $_POST['name'];
$visitors_email = $_POST['email'];
$message = $_POST['message'];

$email_from = '666.abin007@gmail.com';

$email_subject = " New Form Submission ";

$email_body ="user name: $name\n user email: $visitors_email\n user message: $message\n";

$email_to = "666.abin007@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitors_email \r\n;

mail($email_to,$email_subject,$email_body,$headers);
header("Location. index.html");


?>