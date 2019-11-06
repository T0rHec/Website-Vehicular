<?php

$name = $_POST['name'];
$email = $_POST['email'];;
$password = $_POST['password'];

$conexion=mysqli_connect("localhost", "root", "", "vehicular");
$consulta="SELECT * FROM empleado WHERE Nombre='$name' and Email='$email' and Password='$password'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0) {
	header("Location: index.html");
}
else {
	header("Location: login.html");
}

mysqli_free_result($resultado);
mysql_close($conexion);

?>