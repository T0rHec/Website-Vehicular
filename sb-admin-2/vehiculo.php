<?php
  session_start();
  if (!isset($_SESSION['name'])) {
    header('Location: login.html');
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Vehículos</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php
      include 'templates/sidebar.php';
    ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

        <!-- Topbar Navbar -->
          <?php
            include 'templates/navbar.php';
          ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Vehículos</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <form action="adminVehiculo.php" method="POST" class="needs-validation" novalidate>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustomid">ID Vehículo</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend">V</span>
                  </div>
                  <input name="productoid" type="text" class="form-control" id="validationCustomid" placeholder="" aria-describedby="inputGroupPrepend" required>
                  <div class="invalid-feedback">
                    Please choose a ID.
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom01">Modelo</label>
                <input name="model" type="text" class="form-control" id="validationCustom01" placeholder="" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Color</label>
                <input name="color" type="text" class="form-control" id="validationCustom02" placeholder="" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-3 mb-3">
                <label for="validationCustom04">Usado</label>
                <input name="used" type="text" class="form-control" id="validationCustom04" placeholder="" required>
                <div class="invalid-feedback">
                  Please provide a valid ID.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom04">Kilometraje</label>
                <input name="kilometer" type="text" class="form-control" id="validationCustom04" placeholder="" required>
                <div class="invalid-feedback">
                  Please provide a valid ID.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom05">Año</label>
                <input name="ano" type="text" class="form-control" id="validationCustom04" placeholder="" required>
                <div class="invalid-feedback">
                  Please provide a valid ID.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom04">Precio</label>
                <input name="price" type="text" class="form-control" id="validationCustom04" placeholder="" required>
                <div class="invalid-feedback">
                  Please provide a valid ID.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom04">Tipo</label>
                <input name="type" type="text" class="form-control" id="validationCustom04" placeholder="" required>
                <div class="invalid-feedback">
                  Please provide a valid ID.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom04">ID Marca</label>
                <input name="marcaId" type="text" class="form-control" id="validationCustom04" placeholder="" required>
                <div class="invalid-feedback">
                  Please provide a valid ID.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationCustom03">ID Compra</label>
                <input name="compraId" type="text" class="form-control" id="validationCustom03" placeholder="" required>
                <div class="invalid-feedback">
                  Please provide a valid color.
                </div>
              </div>
            </div>

              <button type="submit" name="boton" id="registrar" value="insertar" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                  <i class="fas fa-check"></i>
                </span>
                <span class="text">Agregar Registro</span>
              </button>
              <button type="submit" name="boton" id="registrar" value="actualizar" class="btn btn-info btn-icon-split">
                <span class="icon text-white-50">
                  <i class="fas fa-info-circle"></i>
                </span>
                <span class="text">Actualizar Registro</span>
              </button>
              <button type="submit" name="boton" id="registrar" value="borrar" class="btn btn-danger btn-icon-split">
                <span class="icon text-white-50">
                  <i class="fas fa-trash"></i>
                </span>
                <span class="text">Borrar Registro</span>
              </button>
              <div class="my-2"></div>
              <div class="col-md-3 mb-3">
                <input name="vehiculoId" type="text" class="form-control" id="formGroupExampleInput" placeholder="ID Vehiculo">
              </div>
          </form>

          <script>
          // Example starter JavaScript for disabling form submissions if there are invalid fields
          (function() {
            'use strict';
            window.addEventListener('load', function() {
              // Fetch all the forms we want to apply custom Bootstrap validation styles to
              var forms = document.getElementsByClassName('needs-validation');
              // Loop over them and prevent submission
              var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                  if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                  }
                  form.classList.add('was-validated');
                }, false);
              });
            }, false);
          })();
          </script>
            <div class="my-2"></div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <?php

              grid();

              function grid(){

              include("conexion.php");


              $sql = "SELECT * FROM vehiculo";

              if(!$resultado = $db->query($sql)){
                  die('Ocurrio un error ejecutando el query [' . $db->error . ']');
              }

              echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
                  <thead>
                    <tr>
                      <th>ProductoId</th>
                      <th>Modelo</th>
                      <th>Color</th>
                      <th>Usado</th>
                      <th>Kilometraje</th>
                      <th>Ano</th>
                      <th>Precio</th>
                      <th>Tipo</th>
                      <th>MarcaId</th>
                      <th>CompraId</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ProductoId</th>
                      <th>Modelo</th>
                      <th>Color</th>
                      <th>Usado</th>
                      <th>Kilometraje</th>
                      <th>Ano</th>
                      <th>Precio</th>
                      <th>Tipo</th>
                      <th>MarcaId</th>
                      <th>CompraId</th>
                    </tr>
                  </tfoot>
                  <tbody>";


              while($fila = $resultado->fetch_assoc()){

                  // $fila es un arreglo asociativo con todos los campos que se pusieron en el select

                  echo  " <tr>
                        <td>".$fila['ProductoId']." </td>
                        <td>".$fila['Nombre']." </td>
                        <td>".$fila['Color']." </td>
                        <td>".$fila['Usado']." </td>
                        <td>".$fila['Kilometraje']." </td>
                        <td>".$fila['Ano']." </td>
                        <td>".$fila['Precio']." </td>
                        <td>".$fila['Tipo']." </td>
                        <td>".$fila['MarcaId']."</td>
                        <td>".$fila['CompraId'].'</td>
                      </tr>';

              }

              echo "</tbody>";
              echo "</table>";




              $db->close();

              }

               ?>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <form action="controller_login.php" method="post">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" name="salir" value="salir">Logout</button>
          </form>
        </div>
      </div>
    </div>
  </div>

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
