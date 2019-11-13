<?php

$productoid = $_POST['productoid'];
$name = $_POST['name'];;
$price = $_POST['price'];
$color = $_POST['color'];
$marcaid = $_POST['marcaid'];
$compraid = $_POST['compraid'];
$boton = $_POST['boton'];

require ('validation.php');
$newConn = new dbconn();

switch ($boton) {
	case 'insertar':

		$sql = "INSERT INTO prenda(ProductoId,Nombre,Precio,Color,MarcaId,CompraId) VALUES('P" . $productoid . "','" . $name . "','" . $price . "','" . $color . "'  ,'" . $marcaid . "','" . $compraid . "')";

    break;


    case 'actualizar':

		$sql = "UPDATE prenda SET Nombre = '$name' , Precio = $price, Color = '$color', MarcaId = $marcaid, CompraId = $compraid WHERE ProductoId = 'P$productoid'; ";

    break;



    case 'borrar':

		$sql = "DELETE FROM prenda WHERE ProductoId = 'P$productoid'; ";

    break;

        default:
		# code...
		break;
}

$newConn->openconn();
$newConn->exequery($sql);
$newConn->closeconn();

header('Location: ropa.php');

?>