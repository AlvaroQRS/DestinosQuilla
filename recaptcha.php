<?php
$captcha =  isset( $_POST['g-recaptcha-response'] ) ? $_POST['g-recaptcha-response'] : '';
if (!$captcha) {
   die('Por favor resuelva el captcha');
}

$secret = 'tu_clave_secreta_de_recaptcha';
$response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);

if ($response['success'] === true) {
   // Aqui envías el correo del formulario etc
} else {
   die('Captcha incorrecto, actualice la página pulsando F5');

}
?>