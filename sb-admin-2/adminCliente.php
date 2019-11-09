<?php

$name = $_POST['name'];;
$last_name = $_POST['last_name'];
$tel = $_POST['tel'];
$address = $_POST['address'];
$email = $_POST['email'];
$password = $_POST['password'];
$bitacora = $_POST['bitacora'];
$empleadoId = $_POST['empleadoId'];
$listadeseosId = $_POST['listadeseosId'];
$boton = $_POST['boton'];

require ('validation.php');
$newConn = new dbconn();

switch ($boton) {
	case 'insertar':

		$sql = "INSERT INTO cliente(Nombre, Apellidos, Telefono, Domicilio, Email, Password, BitacoraClienteId, EmpleadoId, ListaDeseosId) VALUES('" . $name . "','" . $last_name . "','" . $tel . "'  ,'" . $address . "','" . $email . "','" . $password . "','" . $bitacora . "','" . $empleadoId . "','" . $listadeseosId . "')";

        header('Location: cliente.php');

    break;


    case 'actualizar':

    	$clienteId = $_POST['clienteId'];

		$sql = "UPDATE cliente SET Nombre = '$name' , Apellidos = '$last_name', Telefono = $tel, Domicilio = '$address', Email = '$email', Password = '$password', BitacoraClienteId = $bitacora, EmpleadoId = $empleadoId, ListaDeseosId = $listadeseosId WHERE ClienteId = $clienteId;";

        header('Location: cliente.php');

    break;



    case 'borrar':

        $clienteId = $_POST['clienteId'];

		$sql = "DELETE FROM cliente WHERE ClienteId = $clienteId; ";

        header('Location: cliente.php');

    break;

        default:
		# code...
		break;
}

$newConn->openconn();
$newConn->exequery($sql);
$newConn->closeconn();

?>