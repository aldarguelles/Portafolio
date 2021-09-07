<?php
if (isset($_POST['enviar'])) {
	if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['mensaje'])) {
		$destinatario = "aldanielarguelles@gmail.com";
		$nombre = $_POST['nombre'];
		$asunto = "Mensaje del portafolio";
		$email = $_POST['email'];
		$mensaje = $_POST['mensaje'];
		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
		$mensajeCompleto = $mensaje . "\nNombre: " . $nombre ."\nCorreo: " . $email;
		$enviar = mail($destinatario, $asunto, $mensajeCompleto, $headers);
		if ($enviar) {
			echo "<script>alert('Mensaje enviado exitosamente')</script>";
			echo "<script>window.location='https://young-dawn-01019.herokuapp.com/';</script>";
		}
	}
}
?>