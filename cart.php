<?php
  include 'templates/cabecera.php';
  define("KEY", "vehicular");
  define("COD", "AES-128-ECB");

  if (isset($_POST['btnAccion'])) {

    switch ($_POST['btnAccion']) {
      case 'agregar':

            if (is_string(openssl_decrypt($_POST["id"], COD, KEY))) {
              $id = openssl_decrypt($_POST["id"], COD, KEY);
            }
            if (is_string(openssl_decrypt($_POST["nombre"], COD, KEY))) {
              $nombre = openssl_decrypt($_POST["nombre"], COD, KEY);
            }
            if (is_string(openssl_decrypt($_POST["precio"], COD, KEY))) {
              $precio = openssl_decrypt($_POST["precio"], COD, KEY);
            }
            if (is_string(openssl_decrypt($_POST["cantidad"], COD, KEY))) {
              $cantidad = openssl_decrypt($_POST["cantidad"], COD, KEY);
            }
            if (is_string(openssl_decrypt($_POST["descripcion"], COD, KEY))) {
              $descripcion = openssl_decrypt($_POST["descripcion"], COD, KEY);
            }
            if (is_string(openssl_decrypt($_POST["imagen"], COD, KEY))) {
              $imagen = openssl_decrypt($_POST["imagen"], COD, KEY);
            }

            if (!isset($_SESSION['carrito'])) {
              $producto= array(
                'id'=>$id,
                'nombre'=>$nombre,
                'precio'=>$precio,
                'cantidad'=>$cantidad,
                'descripcion'=>$descripcion,
                'imagen'=>$imagen,
              );
              $_SESSION['carrito'][0]=$producto;
              //print_r($_SESSION['carrito']);
            }
            elseif (isset($_SESSION['carrito'])) {
              $numeroProductos=count($_SESSION['carrito']);
              $producto= array(
                'id'=>$id,
                'nombre'=>$nombre,
                'precio'=>$precio,
                'cantidad'=>$cantidad,
                'descripcion'=>$descripcion,
                'imagen'=>$imagen,
              );
              $_SESSION['carrito'][$numeroProductos]=$producto;
              //print_r($_SESSION['carrito']);
            }

        break;

      case 'eliminar':
          if (is_string(openssl_decrypt($_POST["id"], COD, KEY))) {
              $id = openssl_decrypt($_POST["id"], COD, KEY);

              foreach($_SESSION['carrito'] as $indice=>$producto) {
                if ($producto['id']==$id) {
                  unset($_SESSION['carrito'][$indice]);
                }

              }
            }
        break;
    }
  }

?>

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html" style="color: white">Home</a></span> <span style="color: white">Cart</span></p>
            <h1 class="mb-0 bread" style="color: white">Carrito</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ftco-animate">
            <div class="cart-list">

              <?php if(!empty($_SESSION['carrito'])) {?>
              <table class="table">
                <thead class="thead-primary">
                  <tr class="text-center">
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>

                  <?php $total=0; ?>
                  <?php foreach($_SESSION['carrito'] as $indice=>$articulo) {?>
                  <tr class="text-center">
                    <td class="product-remove">

                      <form method="post">

                        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($articulo['id'], COD, KEY);?>">

                        <button name="btnAccion" value="eliminar" type="submit" class="btn btn-outline-warning px-3 py-2"><span>X</span></button>
                      </form>

                    </td>

                    <td class="image-prod"><div class="img" style="background-image:url(<?php echo $articulo['imagen'];?>);"></div></td>

                    <td class="product-name">
                      <h3><?php echo $articulo['nombre'];?></h3>
                      <p><?php echo $articulo['descripcion'];?></p>
                    </td>

                    <td class="price">$<?php echo number_format($articulo['precio'],2);?></td>

                    <td class="quantity">
                      <div class="input-group mb-3">
                        <input type="text" name="quantity" class="quantity form-control input-number" value="<?php echo $articulo['cantidad'];?>" min="1" max="100">
                      </div>
                    </td>

                    <td class="total">$<?php echo number_format($articulo['precio']*$articulo['cantidad'],2);?></td>
                  </tr><!-- END TR-->
                  <?php $total=$total+($articulo['precio']*$articulo['cantidad']); ?>
                  <?php }?>

                </tbody>
              </table>

              <?php }else{ ?>
                <table class="table">
                <thead class="thead-primary">
                  <tr class="text-center">
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-center">
                    <td><a ></span></a></td>

                    <td class="image-prod"><div class="img" style="background-image:url(images/karrito.png);"></div></td>

                    <td class="product-name">
                      <h3>Aun no hay nada en su carrito de compra</h3>

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
              <h3>Cart Totals</h3>
              <p class="d-flex">
                <span>Subtotal</span>
                <span>$20.60</span>
              </p>
              <p class="d-flex">
                <span>Delivery</span>
                <span>$0.00</span>
              </p>
              <p class="d-flex">
                <span>Discount</span>
                <span>$3.00</span>
              </p>
              <hr>
              <p class="d-flex total-price">
                <span>Total</span>
                <span><?php echo number_format($total,2); ?></span>
              </p>
            </div>
            <p class="text-center"><a href="checkout.html" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
          </div>
        </div>
      </div>
    </section>


    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row">
          <div class="mouse">
            <a href="#" class="mouse-icon">
              <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
            </a>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Minishop</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://twitter.com"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://facebook.com/?lang=es"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://instagram.com/?lang=es"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
                <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                  <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
                  <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
                  <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                  <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                </ul>
                <ul class="list-unstyled">
                  <li><a href="#" class="py-2 d-block">FAQs</a></li>
                  <li><a href="#" class="py-2 d-block">Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  <script>
    $(document).ready(function(){
    var quantitiy=0;
       $('.quantity-right-plus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());
            // If is not undefined
                $('#quantity').val(quantity + 1);
                // Increment
        });
         $('.quantity-left-minus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());
            // If is not undefined
                // Increment
                if(quantity>0){
                $('#quantity').val(quantity - 1);
                }
        });
    });
  </script>

  </body>
</html>