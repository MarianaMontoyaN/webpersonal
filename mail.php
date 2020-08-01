<?php

    $addressee = 'mariana.montoyan@udea.edu.co';
    $name = $_POST['nombre'];
    $email = $_POST['email'];
    $subject = $_POST['asunto'];
    $message = $_POST['mensaje'];

    $letter = "De: $name \n";
    $letter .= "Email: $email \n";
    $letter .= "Mensaje: $message";

    mail($addressee, $subject, $letter);

    echo "YA ENTRE";
    echo "$addressee -- $subject -- $letter";
    header("index.php");

?>