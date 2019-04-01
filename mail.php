<?php
    
    // $to = 'destinosquilla@gmail.com';
    $to = $_POST['EMAIL'];
    // $name = $_POST["name"];
    // $email= $_POST["email"];
    // $text= $_POST["message"];
    // $subject= $_POST["subject"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $to . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<p style="width:100%">
        
        Gracias por subscribirte te enviaremos mas información sobre nuevas actializaciones de la pagina y nuevos destinos
      
        
    </p>';

    if (@mail( $to, $headers))
    {
        echo 'Your message has been sent.';
    }else{
        echo 'failed';
    }

?>
