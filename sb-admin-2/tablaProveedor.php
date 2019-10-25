
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


$sql = "SELECT * FROM proveedor";

if(!$resultado = $db->query($sql)){
    die('Ocurrio un error ejecutando el query [' . $db->error . ']');
}

echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
		<thead>
			<tr>
				<th>ProveedorId</th>
				<th>Nombre</th>
				<th>Domicilio</th>
				<th>Telefono</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>ProveedorId</th>
				<th>Nombre</th>
				<th>Domicilio</th>
				<th>Telefono</th>
			</tr>
		</tfoot>
		<tbody>";


while($fila = $resultado->fetch_assoc()){

    // $fila es un arreglo asociativo con todos los campos que se pusieron en el select

    echo  "	<tr>
	    		<td>".$fila['ProveedorId']." </td>
	    		<td>".$fila['Nombre']." </td>
	    		<td>".$fila['Domicilio']." </td>
	    		<td>".$fila['Telefono'].'</td>
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