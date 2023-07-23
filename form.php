<?php

$nombre = $_POST['name'];
$mail = $_POST['email'];
$telefono = $_POST['tel'];
$mensaje = $_POST['coments'];

$header .=  "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . "\r\n";
$mensaje .= "Su email es " . $mail . "\r\n";
$mensaje .= "Su telefono es " . $telefono . "\r\n";
$mensaje .= "Mensaje: " . $_POST['coments'] . "\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'joaquinmezquita@gmail.com';
$asunto = 'Este mail fue enviado desde Energyant';

mail($para, $asunto, utf8_decode($mensaje), $header);
if (mail){
    echo "<h4> ¡Enviado Exitosamente</4>";
}
?>
/* header('Location:index.html'); */