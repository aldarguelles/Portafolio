<?php

if (isset($_POST['enviar'])) {
	
	
		$destinatario = "aldanielarguelles@gmail.com";
		$nombre = $_POST['nombre'];
		$asunto = "Mensaje del portafolio";
		$email = $_POST['email'];
		$mensaje = $_POST['mensaje'];

		$header = "Enviado desde mi portafolio";
		$mensajeCompleto = $mensaje . "\nNombre: " . $nombre ."\nCorreo: " . $email;

		$enviar = mail($destinatario, $asunto, $mensajeCompleto, $header);

		if ($enviar) {
			echo "<script>alert('Mensaje enviado exitosamente')</script>";
		}
		
	
}

?>