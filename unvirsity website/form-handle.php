<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$email_form = 'info@mywebsite.com';
$email_subject = 'New form';
$email_body = "User Name: $name.\n" .
    "User Email: $visitor_email.\n" .
    "Subject: $subject.\n" .
    "User Message: $message.\n";
$to = "website@gmail.com";
$headers = "From: $email_form \r\n  ";
$headers .= "Rebly-To:$visitor_email \r\n";
mail($to, $email_subject, $email_body, $headers);
header("Location: contact.html");
