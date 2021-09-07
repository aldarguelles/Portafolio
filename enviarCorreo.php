<?php
$nombreCliente = $_POST['nombreCliente'];
$emailCliente  = $_POST['emailCliente'];
$msjCliente    = $_POST['msjCliente'];


$paraCliente    = "aldanielarguelles@gmail.com";
$tituloCliente  = "Mi Formulario de Contacto..";
$mensajeCliente = $msjCliente . "\nNombre: " . $nombreCliente . "\nCorreo: " . $emailCliente;

$cabecerasCliente  = 'MIME-Version: 1.0' . "\r\n";
$cabecerasCliente .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabecerasCliente .= 'From: Portafolio<arguellesdaniel@hotmail.com>';
$enviadoCliente   = mail($paraCliente, $tituloCliente, $mensajeCliente, $cabecerasCliente);


echo "<script>
    alert('Listo');
</script>";

?>