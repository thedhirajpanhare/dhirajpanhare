<?php
$name = $_POST['name'];
$visitors_email = $_POST ['email'];
$message = $_POST ['message'];


$email_from ='dhirajpanhare8302@gmail.com'

$email_subject = "New form submission";

$email_body = "User name": $name.\n.
                    "User Email": $visitors_email.\n.
                    "User message": $message.\n;

$to = "technicalgurudrd@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitors_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");

?>