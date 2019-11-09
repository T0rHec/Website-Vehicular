<?php

$productoid = $_POST['productoid'];
$model = $_POST['model'];;
$color = $_POST['color'];
$used = $_POST['used'];
$kilometer = $_POST['kilometer'];
$ano = $_POST['ano'];
$price = $_POST['price'];
$type = $_POST['type'];
$marcaId = $_POST['marcaId'];
$compraId = $_POST['compraId'];
$boton = $_POST['boton'];

require ('validation.php');
$newConn = new dbconn();

switch ($boton) {
	case 'insertar':

		$sql = "INSERT INTO vehiculo(ProductoId, Modelo, Color, Usado, Kilometraje, Ano, Precio, Tipo, MarcaId, CompraId) VALUES('V" . $productoid . "','" . $model . "','" . $color . "','" . $used . "'  ,'" . $kilometer . "','" . $ano . "','" . $price . "','" . $type . "','" . $marcaId . "','" . $compraId . "')";

    break;


    case 'actualizar':

		$sql = "UPDATE vehiculo SET Modelo = '$model' , Color = '$color', Usado = '$used', Kilometraje = $kilometer, Ano = $ano, Precio = $price, Tipo = '$type', MarcaId = $marcaId, CompraId = $compraId WHERE ProductoId = 'V$productoid'; ";

    break;



    case 'borrar':

		$sql = "DELETE FROM vehiculo WHERE ProductoId = 'V$productoid'; ";

    break;

        default:
		# code...
		break;
}

$newConn->openconn();
$newConn->exequery($sql);
$newConn->closeconn();

header('Location: vehiculo.php');

?>