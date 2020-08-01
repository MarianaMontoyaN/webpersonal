<?php

require 'vendor/autoload.php';

$addressee = 'mariana.montoyan@udea.edu.co';
$name = $_POST['nombre'];
$email = $_POST['email'];
$subject = $_POST['asunto'];
$message = $_POST['mensaje'];

$letter = "De: $name \n";
$letter .= "Email: $email \n";
$letter .= "Mensaje: $message";


$from = new SendGrid\Email(null, $email);
$to = new SendGrid\Email(null, $addressee);
$content = new SendGrid\Content("text/plain", $letter);
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();

?>
