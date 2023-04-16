<?php
$nombre = $_POST["name"];
$mail = $_POST["email"];
$asunto = $_POST["as"];
$mens = $_POST["message"];


$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es " . $mail . "\r\n";
$mensaje .= "El asunto es " . $asunto . "\r\n";
$mensaje .= "Mensaje: " . $_POST ["message"] . "\r\n";
$mensaje .= "Enviado el " . date("d/m/Y");

$para = "francismcastillo2706@gmail.com";
$asunto = "Mensaje de mi sitio web";

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>