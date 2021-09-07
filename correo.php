<?php

if (isset(&$_POST['enviar'])) {
	if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['mensaje'])) {
	
		$destinatario = "aldanielarguelles@gmail.com";
		$nombre = $_POST['nombre'];
		$asunto = "Mensaje del portafolio";
		$email = $_POST['email'];
		$mensaje = $_POST['mensaje'];

		$header = "Enviado desde mi portafolio";
		$mensajeCompleto = $mensaje "\nNombre: " . $nombre "\nCorreo: " . $email;

		mail($destinatario, $asunto, $mensajeCompleto, $header);
		echo "<script>alert('Mensaje enviado exitosamente')</script>";
	}
}

?>