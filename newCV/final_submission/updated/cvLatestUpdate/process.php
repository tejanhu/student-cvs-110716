<?php

$name = trim(strip_tags($_POST['name']));
$email = trim(strip_tags($_POST['email']));
$message = htmlentities($_POST['message']);

// set here
$subject = "Contact form submitted!";
$to = 'tejanahmedhu@gmail.com';

$body = <<<HTML

$message
HTML;

$headers= "From: $email\r\n";
$headers .= "Content-type: text/html\r\n";

//send the email
mail($to,$subject, $body, $headers);

//redirect afterwards, if needed
header('Location: sample.html');
?>