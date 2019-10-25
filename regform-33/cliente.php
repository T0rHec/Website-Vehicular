<?php

$name = $_POST["name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$address = $_POST["domicilio"];
$password = $_POST["password"];

require ('validation.php');
$newConn = new dbconn();

$sql = "INSERT INTO cliente(Nombre,Apellidos,Telefono,Domicilio,Email,Password) VALUES('" . $name . "','" . $last_name . "','" . $tel . "','" . $address . "','" . $email . "','" . $password . "')";

$newConn->openconn();
$newConn->exequery($sql);
$newConn->closeconn();

header('Location: ..');

?>

