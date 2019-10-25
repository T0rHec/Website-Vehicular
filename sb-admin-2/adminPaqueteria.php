<?php

$name = $_POST["name"];
$address = $_POST["address"];
$boton = $_POST['boton'];

require ('validation.php');
$newConn = new dbconn();

switch ($boton) {
	case 'insertar':

		$sql = "INSERT INTO paqueteria(Nombre,Domicilio) VALUES('" . $name . "','" . $address . "')";

		header('Location: paqueteria.html');

    break;

    case 'actualizar':

		$paqueteriaId = $_POST["paqueteriaId"];

		$sql = "UPDATE paqueteria SET Nombre = '$name' , Domicilio = '$address' WHERE PaqueteriaId = $paqueteriaId; ";

		header('Location: paqueteria.html');

    break;



    case 'borrar':

		$paqueteriaId = $_POST["paqueteriaId"];

		$sql = "DELETE FROM paqueteria WHERE PaqueteriaId = $paqueteriaId; ";

		header('Location: paqueteria.html');

    break;

        default:
		# code...
		break;
}

$newConn->openconn();
$newConn->exequery($sql);
$newConn->closeconn();

?>

