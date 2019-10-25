<?php

$productoid = $_POST['productoid'];
$name = $_POST['name'];;
$price = $_POST['price'];
$description = $_POST['description'];
$marcaid = $_POST['marcaid'];
$compraid = $_POST['compraid'];
$boton = $_POST['boton'];

require ('validation.php');
$newConn = new dbconn();

switch ($boton) {
	case 'insertar':

		$sql = "INSERT INTO accesorio(ProductoId,Nombre,Precio,Descripcion,MarcaId,CompraId) VALUES('A" . $productoid . "','" . $name . "','" . $price . "','" . $description . "'  ,'" . $marcaid . "','" . $compraid . "')";

    break;


    case 'actualizar':

		$sql = "UPDATE accesorio SET Nombre = '$name' , Precio = $price, Descripcion = '$description', MarcaId = $marcaid, CompraId = $compraid WHERE ProductoId = 'A$productoid'; ";

    break;



    case 'borrar':

		$sql = "DELETE FROM accesorio WHERE ProductoId = 'A$productoid'; ";

    break;

        default:
		# code...
		break;
}

$newConn->openconn();
$newConn->exequery($sql);
$newConn->closeconn();

header('Location: accesorio.html');

?>