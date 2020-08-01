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

echo "$addressee - $letter";

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom($name, "Example User");
$email->setSubject($subject);
$email->addTo($addressee, "Example User");
$email->addContent("text/plain", $letter);
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);
$sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";

?>
