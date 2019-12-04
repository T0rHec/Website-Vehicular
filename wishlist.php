<?php
  include 'templates/cabecera.php';
  include 'conexion.php';

  if (isset($_POST['btnAccion'])) {
    switch ($_POST['btnAccion']) {

      case 'wishlist':
        if (!isset($_SESSION['usuario'])) {
          break;
        }else{
          if (is_string(openssl_decrypt($_POST["id"], COD, KEY))) {
            $id = openssl_decrypt($_POST["id"], COD, KEY);
          }
          if (is_string(openssl_decrypt($_POST["nombre"], COD, KEY))) {
            $nombre = openssl_decrypt($_POST["nombre"], COD, KEY);
          }
          if (is_string(openssl_decrypt($_POST["precio"], COD, KEY))) {
            $precio = openssl_decrypt($_POST["precio"], COD, KEY);
          }
          if (is_string(openssl_decrypt($_POST["descripcion"], COD, KEY))) {
            $descripcion = openssl_decrypt($_POST["descripcion"], COD, KEY);
          }
          if (is_string(openssl_decrypt($_POST["imagen"], COD, KEY))) {
            $imagen = openssl_decrypt($_POST["imagen"], COD, KEY);
          }

          include 'validation.php';
          $newConn = new dbconn();

          $sql = "INSERT INTO `listadeseos`(`Nombre`, `Precio`, `Descripcion`, `Imagen`, `ClienteId`) VALUES('" . $nombre . "','" . $precio . "','" . $descripcion . "','" . $imagen . "','" . $_SESSION['usuario']['Id'] . "')";

          $newConn->openconn();
          $newConn->exequery($sql);
          $newConn->closeconn();
        }

        break;

      case 'eliminar':
          include 'validation.php';
          $newConn = new dbconn();

          $ListaDeseosId = $_POST["ListaDeseosId"];

          $sql = "DELETE FROM `listadeseos` WHERE `listadeseos`.`ListaDeseosId` = $ListaDeseosId";

          $newConn->openconn();
          $newConn->exequery($sql);
          $newConn->closeconn();
        break;
    }
  }
?>

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php" style="color: white">Inicio</a></span></p>
             <p><center><span style="color: white"></span></center></p>
            <h1 class="mb-0 bread" style="color: white">Lista de deseos</h1>

          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ftco-animate">
            <div class="cart-list">

              <?php if(isset($_SESSION['usuario'])) {?>
              <table class="table">
                <thead class="thead-primary">
                  <tr class="text-center">
                    <th>&nbsp;</th>
                    <th>Producto</th>
                    <th>&nbsp;</th>
                   <th>Precio</th>
                   <th>&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                      $sentencia=$pdo->prepare("SELECT * FROM `listadeseos`");
                      $sentencia->execute();
                      $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                      //print_r($listaProductos);
                  ?>

                  <?php foreach($listaProductos as $producto){ ?>
                  <tr class="text-center">
                    <td class="product-remove">

                      <form method="post">

                        <input type="hidden" name="ListaDeseosId" id="ListaDeseosId" value="<?php echo $producto['ListaDeseosId'];?>">

                        <button name="btnAccion" value="eliminar" type="submit" class="btn btn-outline-warning px-3 py-2"><span>X</span></button>
                      </form>

                    </td>

                    <td class="image-prod"><div class="img" style="background-image:url(<?php echo $producto['Imagen'];?>);"></div></td>

                    <td class="product-name">
                      <h3><?php echo $producto['Nombre'];?></h3>
                      <p><?php echo $producto['Descripcion'];?></p>
                    </td>

                    <td class="price">$<?php echo number_format($producto['Precio'],2);?></td>
                  </tr><!-- END TR-->

                  <?php }?>

                </tbody>
              </table>
              <?php } elseif (!isset($_SESSION['usuario'])){ ?>
                <table class="table">
                <thead class="thead-primary">
                  <tr class="text-center">
                    <th>&nbsp;</th>
                    <th>Producto</th>
                    <th>&nbsp;</th>
                   <th>Precio</th>
                   <th>&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-center">
                      <td class="image-prod"><div class="img" style="background-image:url(images/wishlistLost.png);"></div></td>
                      <td class="product-name">
                        <h3>Debes iniciar sesión</h3>
                      </td>
                      <td class="quantity">
                      </td>
                    </tr><!-- END TR-->
                </tbody>
                </table>
              <?php }?>
            </div>
          </div>
        </div>
        <div class="row justify-content-start">
          <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
              </p>
            </div>
            <?php if (!isset($_SESSION['usuario'])) { ?>
                <p class="text-center"><a href="login.html" class="btn btn-primary py-3 px-4">Inicia sesión para continuar >></a></p>
              <?php }else { ?>
                <p class="text-center"><a href="cart.php" class="btn btn-primary py-3 px-4">Enviar todo al carrito de compras</a></p>
            <?php }?>
          </div>
        </div>
      </div>
    </section>


<?php
  include 'templates/footer.php'
?>