<?php
	$destino= "info@vpnbrokerone.com";
	$mensaje= $_POST["mensaje"];
	$contenido= "Mensaje: " . $mensaje;

	mail($destino, "Contacto", $contenido);
	header("Location:gracias.html");
?>





















































// $nombre = isset( $_POST['nombre'] ) ? $_POST['nombre'] : '';
// $nombre = isset( $_POST['asunto'] ) ? $_POST['asunto'] : '';
// $nombre = isset( $_POST['email'] ) ? $_POST['email'] : '';
// $nombre = isset( $_POST['mensaje'] ) ? $_POST['mensaje'] : '';
// $contenido = '
// 				</<!DOCTYPE html>
// 				<html>
// 				<head>
// 					<title></title>
// 				</head>
// 				<body>
// 					<h2>Haz recibido un mensaje a traves de la pagina</h2>
// 					<p>' .$nombre. ' te ha enviado el siguiente mensaje:</p>
// 					<p>' .$mensaje. ' <br><br> Puedes ponerte en contacto con la persona al email: '$email '</p>
// 				</body>
// 				</html>';

// // Configuracion de los encabezados
// $headers = 'MIME-Version: 1.0' . "\r\n";
// $headers = "Content-type: text/html; charset=UTF-8\r\n";

// // Enviar correo
// $envio = mail('contacto@vpnbrokerone.com', $asunto, $contenido, $headers);


// if($envio) {
// 	$miresultado = '<h4>El correo ha sido enviado! Gracias por ponerse en contacto con nosotros</h4>';
// } else{

// 	$miresultado = '<h4>No se envio el correo.</h4>';
// }

// echo $miresultado;