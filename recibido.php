<?php
$name = $_POST["name"];
$mail = $_POST{"mail"};
$phone = $_POST{"phone"};
$message = $_POST{"message"};


$header = "FROM: " . $mail . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$Mensaje = "Este mensaje fue enviado por: " . $name . "\r\n";
$Mensaje .= "Su e-mail es: " . $mail . "\r\n";
$Mensaje .= "Telefono de contacto: " . $phone . "\r\n";
$Mensaje .= "Mensaje: " . $_POST['message'] . "\r\n"; 
$Mensaje .= "Enviado el: " . date('d/m/y', time())

$para = 'juan.turcios2023@grupoq.superate.org.sv';
$asunto = 'formulari';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:Index.html");
?>


