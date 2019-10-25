<?php

$name = $_POST["name"];
$address = $_POST["address"];
$tel = $_POST["tel"];
$boton = $_POST['boton'];

require ('validation.php');
$newConn = new dbconn();

switch ($boton) {
	case 'insertar':

		$sql = "INSERT INTO proveedor(Nombre,Domicilio,Telefono) VALUES('" . $name . "','" . $address . "','" . $tel . "')";

		header('Location: proveedor.html');

    break;

    case 'actualizar':

		$proveedorId = $_POST["proveedorId"];

		$sql = "UPDATE proveedor SET Nombre = '$name' , Domicilio = '$address', Telefono = $tel WHERE ProveedorId = $proveedorId; ";

		header('Location: proveedor.html');

    break;



    case 'borrar':

		$proveedorId = $_POST["proveedorId"];

		$sql = "DELETE FROM proveedor WHERE ProveedorId = $proveedorId; ";

		header('Location: proveedor.html');

    break;

        default:
		# code...
		break;
}

$newConn->openconn();
$newConn->exequery($sql);
$newConn->closeconn();

?>

