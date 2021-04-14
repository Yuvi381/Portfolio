<?php 
 $name = $_POSTt['name'];
 $visitor_email = $_POST['email'];
 $message = $_POST['message'];

 $email_from = 'imyuvi381@gmail.com';
 $email_subject = "New Form Submission";
 $email_body = "User Name: $name.\n".
                 "User Email: $visitor_email.\n".
                   "User Meessage: $message.\n";

$to = "yuvisharma381@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");
?>