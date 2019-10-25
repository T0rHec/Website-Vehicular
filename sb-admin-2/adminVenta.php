<?php

$date = $_POST["date"];
$importe = $_POST["importe"];
$clienteId = $_POST["clienteId"];
$productoId = $_POST["productoId"];
$paqueteriaId = $_POST["paqueteriaId"];
$boton = $_POST['boton'];

require ('validation.php');
$newConn = new dbconn();

switch ($boton) {
	case 'insertar':

		$sql = "INSERT INTO venta(Fecha,Importe,ClientesId,ProductoId,PaqueteriaId) VALUES('" . $date . "','" . $importe . "','" . $clienteId . "','" . $productoId . "','" . $paqueteriaId . "')";

		header('Location: venta.html');

    break;

    case 'actualizar':

		$ventaId = $_POST["ventaId"];

		$sql = "UPDATE venta SET Fecha = '$date' , Importe = $importe, ClientesId = $clienteId, ProductoId = $productoId, PaqueteriaId = $paqueteriaId WHERE VentaId = $ventaId; ";

		header('Location: venta.html');

    break;



    case 'borrar':

		$ventaId = $_POST["ventaId"];

		$sql = "DELETE FROM venta WHERE VentaId = $ventaId; ";

		header('Location: venta.html');

    break;

        default:
		# code...
		break;
}

$newConn->openconn();
$newConn->exequery($sql);
$newConn->closeconn();

?>

