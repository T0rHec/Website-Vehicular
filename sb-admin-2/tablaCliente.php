
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Custom fonts for this template -->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/sb-admin-2.min.css" rel="stylesheet">

	<!-- Custom styles for this page -->
	<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>



<?php

grid();

function grid(){

include("conexion.php");


$sql = "SELECT * FROM cliente";

if(!$resultado = $db->query($sql)){
    die('Ocurrio un error ejecutando el query [' . $db->error . ']');
}

echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
		<thead>
			<tr>
				<th>ClienteId</th>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Telefono</th>
				<th>Domicilio</th>
				<th>Email</th>
				<th>Password</th>
				<th>BitacoraClienteId</th>
				<th>EmpleadoId</th>
				<th>ListaDeseosId</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>ClienteId</th>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Telefono</th>
				<th>Domicilio</th>
				<th>Email</th>
				<th>Password</th>
				<th>BitacoraClienteId</th>
				<th>EmpleadoId</th>
				<th>ListaDeseosId</th>
			</tr>
		</tfoot>
		<tbody>";


while($fila = $resultado->fetch_assoc()){

    // $fila es un arreglo asociativo con todos los campos que se pusieron en el select

    echo  "	<tr>
	    		<td>".$fila['ClienteId']." </td>
	    		<td>".$fila['Nombre']." </td>
	    		<td>".$fila['Apellidos']." </td>
	    		<td>".$fila['Telefono']." </td>
	    		<td>".$fila['Domicilio']." </td>
	    		<td>".$fila['Email']." </td>
	    		<td>".$fila['Password']." </td>
	    		<td>".$fila['BitacoraClienteId']." </td>
	    		<td>".$fila['EmpleadoId']." </td>
	    		<td>".$fila['ListaDeseosId'].'</td>
    		</tr>';

}

echo "</tbody>";
echo "</table>";

$db->close();

}

 ?>


<!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
</body>
</html>