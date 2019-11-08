<?php
	$destino = "PVehicular007@gmail.com";
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$tema = $_POST["tema"];
	$mensaje = $_POST["mensaje"];
	$contenido = "Nombre: ".$nombre ."\nCorreo: ".$correo ."\nTema: " .$tema ."\nMensaje: " .$mensaje ;
	mail($destino, $tema, $contenido);
	header("Location: contact.html");

?>