<?php

$name = $_POST["name"];
$pais = $_POST["pais"];
$boton = $_POST['boton'];

require ('validation.php');
$newConn = new dbconn();

switch ($boton) {
	case 'insertar':

		$sql = "INSERT INTO marca(Nombre,Pais) VALUES('" . $name . "','" . $pais . "')";

		header('Location: marca.php');

    break;

    case 'actualizar':

		$marcaId = $_POST["marcaId"];

		$sql = "UPDATE marca SET Nombre = '$name' , Pais = '$pais' WHERE MarcaId = $marcaId; ";

		header('Location: marca.php');

    break;



    case 'borrar':

		$marcaId = $_POST["marcaId"];

		$sql = "DELETE FROM marca WHERE MarcaId = $marcaId; ";

		header('Location: marca.php');

    break;

        default:
		# code...
		break;
}

$newConn->openconn();
$newConn->exequery($sql);
$newConn->closeconn();

?>

