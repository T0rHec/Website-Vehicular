<?php

$productoid = $_POST['productoid'];
$name = $_POST['name'];;
$price = $_POST['price'];
$marcaid = $_POST['marcaid'];
$compraid = $_POST['compraid'];
$boton = $_POST['boton'];

require ('validation.php');
$newConn = new dbconn();

switch ($boton) {
	case 'insertar':

		$sql = "INSERT INTO refaccion(ProductoId,Nombre,Precio,MarcaId,CompraId) VALUES('R" . $productoid . "','" . $name . "','" . $price . "','" . $marcaid . "','" . $compraid . "')";

    break;


    case 'actualizar':

		$sql = "UPDATE refaccion SET Nombre = '$name' , Precio = $price, MarcaId = $marcaid, CompraId = $compraid WHERE ProductoId = 'R$productoid'; ";

    break;



    case 'borrar':

		$sql = "DELETE FROM refaccion WHERE ProductoId = 'R$productoid'; ";

    break;

        default:
		# code...
		break;
}

$newConn->openconn();
$newConn->exequery($sql);
$newConn->closeconn();

header('Location: refaccion.php');

?>