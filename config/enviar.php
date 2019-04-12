<?php
    function validar_campo($campo)
    {
        $campo = trim($campo);
        $campo = stripcslashes($campo);
        $campo = htmlspecialchars($campo);

        return $campo;
    } 
    header('Content-type: application/json');
    if(isset($_POST['name']) && !empty($_POST['name']) && 
    isset($_POST['telefono']) && !empty($_POST['telefono']) &&
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['message']) && !empty($_POST['message'])){
       
        $destino = "info@destinosquillabamba.com";
        $asunto = "Paquete de Semana Santa";
        $nombre = validar_campo($_POST['name']);
        $telefono = validar_campo($_POST['telefono']);
        $email = validar_campo($_POST['email']);
        $message = validar_campo($_POST['message']);

        $contenido = "Nombre: " . $nombre."\n Teléfono: " . $telefono;
        $contenido .= "\n Correo: " . $email;
        $contenido .= "\n Mensaje: " . $message;


        mail($destino,$asunto,$contenido);
        return print(json_encode('ok, enviado'));
    }
    return print(json_encode('no enviado'));
?>