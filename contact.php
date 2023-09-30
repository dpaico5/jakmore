<?php

$nombre = $_POST¨("name");
$mail = $_POST¨("email");
$asunto = $_POST¨("asunto");
$mensaje = $_POST¨("mensaje");

$header = "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por" . $nombre . "./r/n";
$mensaje = "su email es" . $mail . "/r/n";
$mensaje = "Mensaje" . $_POST("mensaje") . "/r/n";
$mensaje = "Enviado el" . date("d/m/Y" . time());

$para = "herminiadetiza@gmail.com";
$asunto = "Mensaje de BLACKJAK";

mail($para, $asunto, $mensaje, $header);

header("location:#index.html");



