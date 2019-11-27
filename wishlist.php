<?php
  include 'templates/cabecera.php';
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




                  </tr><!-- END TR-->

                  <tr class="text-center">

                    <td class="image-prod"><div class="img" style="background-image:url(images/wishlist.png);"></div></td>

                    <td class="product-name">
                      <h3>Aun no hay nada en su lista de deseos</h3>

                    </td>
                    <td class="quantity">
                      <div class="input-group mb-3">

                      </div>
                    </td>


                  </tr><!-- END TR-->
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="row justify-content-start">
          <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
              </p>
            </div>
            <p class="text-center"><a href="checkout.php" class="btn btn-primary py-3 px-4">Enviar a carrito de compras</a></p>
          </div>
        </div>
      </div>
    </section>


<?php
  include 'templates/footer.php'
?>