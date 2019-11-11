<?php

$name = $_POST["name"];
$email = $_POST["email"];
$boton = $_POST['boton'];

require ('validation.php');
$newConn = new dbconn();
$newConn->openconn();

switch ($boton) {
	case 'insertar':

		$last_name = $_POST["last_name"];
		$tel = $_POST["tel"];
		$password = $_POST["password"];
		$passHash = password_hash($password, PASSWORD_DEFAULT);

		$salario = $_POST["salario"];
		$rfc = $_POST["rfc"];

		$sql = "INSERT INTO empleado(Nombre,Apellidos,Telefono,Email,Password,Salario,RFC) VALUES('" . $name . "','" . $last_name . "','" . $tel . "','" . $email . "'  ,'" . $passHash . "','" . $salario . "','" . $rfc . "')";

		$newConn->exequery($sql);
		header('Location: empleado.php');

    break;



    case 'actualizar':

		$empleadoId = $_POST["empleadoId"];

		$sql = "UPDATE empleado SET Nombre = '$name' , Apellidos = '$last_name', Telefono = '$tel', Email = '$email', Password = '$passHash', Salario = $salario, RFC = '$rfc' WHERE EmpleadoId = $empleadoId; ";

		$newConn->exequery($sql);
		header('Location: empleado.php');

    break;



    case 'borrar':

		$empleadoId = $_POST["empleadoId"];

		$sql = "DELETE FROM empleado WHERE EmpleadoId = '$empleadoId'; ";


		$newConn->exequery($sql);
		header('Location: empleado.php');

    break;

        default:
		# code...
		break;
}

$newConn->closeconn();

?>

