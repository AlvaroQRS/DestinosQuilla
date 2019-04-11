<?php
    require('recaptcha.php');

    $to = 'info@destinosquillabamba.com';
    $name = $_POST["name"];
    $email= $_POST["email"];
    $text= $_POST["message"];
    $subject= $_POST["telefono"];

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
       Mensaje enviado. Gracias por confiar en nosotros en unos momentos nos ponemos en contacto con Ustede.
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'Mensaje enviado exitosamente';
    }else{
        echo 'Fallo el envio';
    }

?>
