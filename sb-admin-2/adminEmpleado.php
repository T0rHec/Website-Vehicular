<?php

$name = $_POST["name"];
$email = $_POST["email"];
$boton = $_POST['boton'];

require ('validation.php');
$newConn = new dbconn();

switch ($boton) {
	case 'insertar':

		$last_name = $_POST["last_name"];
		$tel = $_POST["tel"];
		$password = $_POST["password"];
		$passHash = password_hash($password, PASSWORD_BCRYPT);
		$salario = $_POST["salario"];
		$rfc = $_POST["rfc"];

		$sql = "INSERT INTO empleado(Nombre,Apellidos,Telefono,Email,Password,Salario,RFC) VALUES('" . $name . "','" . $last_name . "','" . $tel . "','" . $email . "'  ,'" . $passHash . "','" . $salario . "','" . $rfc . "')";

		header('Location: empleado.html');

    break;

    case 'validar':

    	$conexion=mysqli_connect("localhost", "root", "", "vehicular");
		$consulta = sprintf("SELECT Password FROM empleado WHERE name='$name';",pg_escape_string($name));
		$fila = pg_fetch_assoc(pg_query($conexión, $consulta));

		if ($fila && password_verify($contraseña, $fila['Password'])) {
		echo 'Bienvenido, ' . htmlspecialchars($name) . '!';
		} else {
		echo 'La autenticación ha fallado para ' . htmlspecialchars($name) . '.';
		}

/*		$password = $_POST["password"];

		$conexion=mysqli_connect("localhost", "root", "", "vehicular");
		$consulta="SELECT Password FROM empleado WHERE Nombre='$name' and Email='$email'";
		$resultado=mysqli_query($conexion, $consulta);

		$fila = pg_fetch_assoc(pg_query($conexión, $consulta));

		if ($fila && password_verify($password, $fila['Password'])) {
		    header("Location: index.html");
		} else {
		    header("Location: login.html");
		}*/

    break;


    case 'actualizar':

		$empleadoId = $_POST["empleadoId"];

		$sql = "UPDATE empleado SET Nombre = '$name' , Apellidos = '$last_name', Telefono = '$tel', Email = '$email', Password = '$passHash', Salario = $salario, RFC = '$rfc' WHERE EmpleadoId = $empleadoId; ";

		header('Location: empleado.html');

    break;



    case 'borrar':

		$empleadoId = $_POST["empleadoId"];

		$sql = "DELETE FROM empleado WHERE EmpleadoId = '$empleadoId'; ";

		header('Location: empleado.html');

    break;

        default:
		# code...
		break;
}

$newConn->openconn();
$newConn->exequery($sql);
$newConn->closeconn();

?>

