<?php

$date = $_POST["date"];
$cantidad = $_POST["cantidad"];
$proveedorId = $_POST["proveedorId"];
$productoId = $_POST["productoId"];
$boton = $_POST['boton'];

require ('validation.php');
$newConn = new dbconn();

switch ($boton) {
	case 'insertar':

		$sql = "INSERT INTO compra(Fecha,Cantidad,ProveedorId,ProductoId) VALUES('" . $date . "','" . $cantidad . "','" . $proveedorId . "','" . $productoId . "')";

		header('Location: compra.html');

    break;

    case 'actualizar':

		$compraId = $_POST["compraId"];

		$sql = "UPDATE compra SET Fecha = '$date' , Cantidad = $cantidad, ProveedorId = $proveedorId, ProductoId = $productoId WHERE CompraId = $compraId; ";

		header('Location: compra.html');

    break;



    case 'borrar':

		$compraId = $_POST["compraId"];

		$sql = "DELETE FROM compra WHERE CompraId = $compraId; ";

		header('Location: compra.html');

    break;

        default:
		# code...
		break;
}

$newConn->openconn();
$newConn->exequery($sql);
$newConn->closeconn();

?>

