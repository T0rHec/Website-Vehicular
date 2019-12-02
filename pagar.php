<?php
    session_start();
  	include 'validation.php';
  	$newConn = new dbconn();

    $newConn->openconn();

    foreach($_SESSION['carrito'] as $indice=>$articulo){

      $sql = "INSERT INTO `venta`(`Fecha`, `Importe`, `ClientesId`, `ProductoId`, `PaqueteriaId`) VALUES(NOW(),'" . $articulo['precio'] . "','" . $_SESSION['usuario']['Id'] . "','" . $articulo['id'] . "','5')";

      header('Location: index.php');


      $newConn->exequery($sql);
    }

    $newConn->closeconn();

?>