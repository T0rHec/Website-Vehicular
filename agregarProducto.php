<?php
  	include 'validation.php';
  	$newConn = new dbconn();

  	define("KEY", "vehicular");
	define("COD", "AES-128-ECB");

    $id = openssl_decrypt($_POST["id"], COD, KEY);
    $nombre = openssl_decrypt($_POST["nombre"], COD, KEY);
    $precio = openssl_decrypt($_POST["precio"], COD, KEY);
    $cantidad = openssl_decrypt($_POST["cantidad"], COD, KEY);

    $sql = "INSERT INTO carrito(ProductoId,Producto, Precio, Cantidad) VALUES('" . $id . "','" . $nombre . "','" . $precio . "','" . $cantidad . "')";

    header('Location: cart.php');

	$newConn->openconn();
	$newConn->exequery($sql);
	$newConn->closeconn();
?>