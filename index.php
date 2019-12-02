<?php
	include 'conexion.php';
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vehicular</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">
		<div class="py-1 bg-black">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+52 4492589637</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">pvehicular007@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">5 a 20 días habiles de envío</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Vehicular</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	      <?php
	      	if (!isset($_SESSION['usuario'])) {
				echo '<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a href="index.php" class="nav-link">Inicio</a></li>
						<li class="nav-item"><a href="shop.php" class="nav-link">Catálogo</a></li>
						<li class="nav-item"><a href="about.php" class="nav-link">Nosotros</a></li>
						<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
						<li class="nav-item"><a href="contact.php" class="nav-link">Contacto</a></li>
						<li class="nav-item"><a href="faq.php" class="nav-link">FAQ</a></li>
			            <li class="nav-item dropdown">
			              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuario</a>
			              <div class="dropdown-menu" aria-labelledby="dropdown04">
			              	<a class="dropdown-item" href="login.html">Ingresar</a>
			                <a class="dropdown-item" href="wishlist.php">Lista de Deseos</a>
			                <a class="dropdown-item" href="cart.php"><span class="icon-shopping_cart"></span>[

				              '; echo (empty($_SESSION['carrito']))?0:count($_SESSION['carrito']);

				              echo ']</a>
			              </div>
			            </li>
			            <li class="nav-item">
				            <form class="nav-link" action="">
				            <i class="fas fa-search" aria-hidden="true"></i>
								<input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Buscar" aria-label="Search">
							</form>
			            </li>
			          </ul>
		        	';
			}
	      	elseif (isset($_SESSION['usuario'])) {
	      		echo '<ul class="navbar-nav ml-auto">
				          <li class="nav-item"><a href="index.php" class="nav-link">Inicio</a></li>
			              <li class="nav-item"><a href="shop.php" class="nav-link">Catálogo</a></li>
				          <li class="nav-item"><a href="about.php" class="nav-link">Nosotros</a></li>
				          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
				          <li class="nav-item"><a href="contact.php" class="nav-link">Contacto</a></li>
				          <li class="nav-item"><a href="faq.php" class="nav-link">FAQ</a></li>
				          <li class="nav-item dropdown">
				              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'; echo $_SESSION['usuario']['Nombre']; echo '</a>
				              <div class="dropdown-menu" aria-labelledby="dropdown04">
				              <a class="dropdown-item" href="wishlist.php">Lista de Deseos</a>
				              <a class="dropdown-item" href="cart.php"><span class="icon-shopping_cart"></span>[

				              '; echo (empty($_SESSION['carrito']))?0:count($_SESSION['carrito']);

				              echo ']</a>
				              <form action="controller_login.php" method="post">
				              	<button class="dropdown-item" name="salir" value="salir">Salir</button>
				              </form>
				              </div>
			              </li>
			              <li class="nav-item">
				            <form class="nav-link" action="">
				            <i class="fas fa-search" aria-hidden="true"></i>
								<input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Buscar" aria-label="Search">
							</form>
	           		 	  </li>
		              </ul>
			         ';
	      	}
	      ?>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
	          	<img class="one-third order-md-last img-fluid" src="images/bg_1.png" alt="">
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">#Nuevo</span>
		          		<div class="horizontal">
				            <h1 class="mb-4 mt-3">Mercedes Benz AMG GT</h1>
				            <p class="mb-4">La declaración de principios de Affalterbach. Su capó largo, un habitáculo en posición muy atrasada y un trasero ancho y poderoso describen las proporciones básicas de un automóvil deportivo de Mercedes-AMG. Su mirada acechante a poca altura sobre el suelo es reflejo de un ímpetu irrefrenable..</p>
				            <p><a href="#seccion_vehiculos" class="btn-custom">Descubre ahora!</a></p>
				          </div>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
	          	<img class="one-third order-md-last img-fluid" src="images/mustang.png" alt="">
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">#Nuevo</span>
		          		<div class="horizontal">
				            <h1 class="mb-4 mt-3">Mustang <p>EcoBoost TA</p></h1>
				            <p class="mb-4">Fue creado para entregar el mejor desempeño ante cualquier situación, su diseño aerodinámico e imponente fue desarrollado con el propósito de mejorar la agilidad y destreza del emblemático deportivo</p>
				            <p><a href="#seccion_vehiculos" class="btn-custom">Descubre ahora!</a></p>
				          </div>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>

	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
	          	<img class="one-third order-md-last img-fluid" src="images/bg_2.png" alt="">
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">#Nuevo</span>
		          		<div class="horizontal">
				            <h1 class="mb-4 mt-3">Bentley Continental GT</h1>
				            <p class="mb-4">Un coupé en configuración 2+2 plazas que se caracteriza por ofrecer un concepto donde priman el máximo lujo y las más altas prestaciones..</p>

				            <p><a href="#seccion_vehiculos" class="btn-custom">Descubre ahora!</a></p>
				          </div>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
	    </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
            		<span class="flaticon-bag"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Envío gratis en accesorios</h3>
                <p>Contamos con envío gratis en accesorios y artículos seleccionados</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Soporte al cliente</h3>
                <p>Si tiene alguna duda, queja, sugerencia o comentario, no dude en decirnos!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
            		<span class="flaticon-payment-security"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Pagos seguros</h3>
                <p>Nuestro método de pago es uno de los más seguros en el mercado</p>
              </div>
            </div>
          </div>
        </div>
			</div>
		</section>
    <a name="seccion_vehiculos"></a>

<!-- Despliegue de los productos más recientes -->
    <section class="ftco-section bg-light">
    	<div class="container">
			<div class="row justify-content-center mb-3 pb-3">
	          <div class="col-md-12 heading-section text-center ftco-animate">
	            <h2 class="mb-4">Llegada de nuevos vehículos!</h2>
	            <p>Conoce los vehículos que nos han llegado</p>
	          </div>
	        </div>
    	</div>
    	<div class="container">
    		<div class="row">
    		<?php
    			$sentencia=$pdo->prepare("SELECT Nombre, Precio, Imagen, Descripcion, Tipo, TipoMotor, Potencia, Torque, Traccion, TipoTransmision, Rendimiento, vehiculo.ProductoId, vehiculo.CompraId, compra.Fecha  FROM compra, vehiculo WHERE compra.CompraId = vehiculo.CompraId AND compra.Fecha > '2019-10-01'");
				$sentencia->execute();
				$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
				//print_r($_SESSION['carrito']);
    		?>

    		<?php foreach($listaProductos as $producto){ ?>
    			<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
    				<div class="product d-flex flex-column">
    					<a class="img-prod"><img class="img-fluid"
    						src="<?php echo $producto['Imagen'];?>" alt="Colorlib Template">
    					</a>
    					<div class="text py-3 pb-4 px-3">
    						<div class="d-flex">
    							<div class="cat">
		    						<span>Calificación</span>
		    					</div>
		    					<div class="rating">
	    							<p class="text-right mb-0">
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    							</p>
	    						</div>
	    					</div>
    						<h3><a href=""><?php echo $producto['Nombre'];?></a></h3>
  							<div class="pricing">
	    						<p class="price"><span class="price-sale">$<?php echo number_format($producto['Precio']);?></span></p>
	    					</div>
	    					<form id="formProducto" action="product-single.php" method="post">
								<input type="hidden" name="nombre" id="nombre"
								value="<?php echo openssl_encrypt($producto['Nombre'], COD, KEY);?>">

								<input type="hidden" name="precio" id="precio"
								value="<?php echo openssl_encrypt($producto['Precio'], COD, KEY);?>">

								<input type="hidden" name="imagen" id="imagen"
								value="<?php echo openssl_encrypt($producto['Imagen'], COD, KEY);?>">

								<input type="hidden" name="descripcion" id="descripcion"
								value="<?php echo openssl_encrypt($producto['Descripcion'], COD, KEY);?>">

								<input type="hidden" name="tipo" id="tipo"
								value="<?php echo openssl_encrypt($producto['Tipo'], COD, KEY);?>">

								<input type="hidden" name="TipoMotor" id="TipoMotor"
								value="<?php echo openssl_encrypt($producto['TipoMotor'], COD, KEY);?>">

								<input type="hidden" name="potencia" id="potencia"
								value="<?php echo openssl_encrypt($producto['Potencia'], COD, KEY);?>">

								<input type="hidden" name="torque" id="torque"
								value="<?php echo openssl_encrypt($producto['Torque'], COD, KEY);?>">

								<input type="hidden" name="traccion" id="traccion"
								value="<?php echo openssl_encrypt($producto['Traccion'], COD, KEY);?>">

								<input type="hidden" name="TipoTransmision" id="TipoTransmision"
								value="<?php echo openssl_encrypt($producto['TipoTransmision'], COD, KEY);?>">

								<input type="hidden" name="rendimiento" id="rendimiento"
								value="<?php echo openssl_encrypt($producto['Rendimiento'], COD, KEY);?>">

								<p class="bottom-area d-flex px-3">
	    							<button name="btnAccion" value="agregar" type="submit" class="btn btn-outline-warning"><span><i class="ion-ios-add ml-1"></i>Detalles</span></button>
	    						</p>
	    					</form>
	    					<form action="cart.php" method="post">
	    						<input type="hidden" name="id" id="id"
								value="<?php echo openssl_encrypt($producto['ProductoId'], COD, KEY);?>">

								<input type="hidden" name="nombre" id="nombre"
								value="<?php echo openssl_encrypt($producto['Nombre'], COD, KEY);?>">

								<input type="hidden" name="precio" id="precio"
								value="<?php echo openssl_encrypt($producto['Precio'], COD, KEY);?>">

								<input type="hidden" name="descripcion" id="descripcion"
								value="<?php echo openssl_encrypt($producto['Descripcion'], COD, KEY);?>">

								<input type="hidden" name="imagen" id="imagen"
								value="<?php echo openssl_encrypt($producto['Imagen'], COD, KEY);?>">

								<input type="hidden" name="cantidad" id="cantidad"
								value="<?php echo openssl_encrypt(1, COD, KEY);?>">
								<p></p>
								<button name="btnAccion" value="agregar" type="submit" class="btn btn-black px-3 py-2"><span>Añadir al carrito<i class="ion-ios-cart ml-1"></i></span></button>
    						</form>
    					</div>
    				</div>
    			</div>

    		<?php } ?>

    		</div>
    	</div>
    	<div class="container">
			<div class="row justify-content-center mb-3 pb-3">
	          <div class="col-md-12 heading-section text-center ftco-animate">
	            <h2 class="mb-4">Nuestra nueva ropa!!</h2>
	            <p>Conoce las nuevas prendas que nos han llegado</p>
	          </div>
	        </div>
    	</div>
    	<div class="container">
    		<div class="row">
    		<?php
    			$sentencia=$pdo->prepare("SELECT * FROM `prenda`, `compra` WHERE prenda.CompraId = compra.CompraId AND compra.Fecha > '2019-10-01'");
				$sentencia->execute();
				$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
				//print_r($listaProductos);
    		?>

    		<?php foreach($listaProductos as $producto){ ?>
    			<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
    				<div class="product d-flex flex-column">
    					<a href="" class="img-prod"><img class="img-fluid"
    						src="<?php echo $producto['Imagen'];?>" alt="Colorlib Template">
    					</a>
    					<div class="text py-3 pb-4 px-3">
    						<div class="d-flex">
    							<div class="cat">
		    						<span>Calificación</span>
		    					</div>
		    					<div class="rating">
	    							<p class="text-right mb-0">
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    							</p>
	    						</div>
	    					</div>
    						<h3><a href=""><?php echo $producto['Nombre'];?></a></h3>
  							<div class="pricing">
	    						<p class="price"><span class="price-sale">$<?php echo $producto['Precio'];?></span></p>
	    					</div>
	    					<form action="product-single.php" method="post">
								<input type="hidden" name="nombre" id="nombre"
								value="<?php echo openssl_encrypt($producto['Nombre'], COD, KEY);?>">

								<input type="hidden" name="precio" id="precio"
								value="<?php echo openssl_encrypt($producto['Precio'], COD, KEY);?>">

								<input type="hidden" name="imagen" id="imagen"
								value="<?php echo openssl_encrypt($producto['Imagen'], COD, KEY);?>">

								<input type="hidden" name="descripcion" id="descripcion"
								value="<?php echo openssl_encrypt($producto['Descripcion'], COD, KEY);?>">

								<input type="hidden" name="tipo" id="tipo"
								value="<?php echo openssl_encrypt($producto['Tipo'], COD, KEY);?>">

								<input type="hidden" name="TipoMotor" id="TipoMotor"
								value="<?php echo openssl_encrypt($producto['TipoMotor'], COD, KEY);?>">

								<input type="hidden" name="potencia" id="potencia"
								value="<?php echo openssl_encrypt($producto['Potencia'], COD, KEY);?>">

								<input type="hidden" name="torque" id="torque"
								value="<?php echo openssl_encrypt($producto['Torque'], COD, KEY);?>">

								<input type="hidden" name="traccion" id="traccion"
								value="<?php echo openssl_encrypt($producto['Traccion'], COD, KEY);?>">

								<input type="hidden" name="TipoTransmision" id="TipoTransmision"
								value="<?php echo openssl_encrypt($producto['TipoTransmision'], COD, KEY);?>">

								<input type="hidden" name="rendimiento" id="rendimiento"
								value="<?php echo openssl_encrypt($producto['Rendimiento'], COD, KEY);?>">

								<p class="bottom-area d-flex px-3">
	    							<button name="btnAccion" value="agregar" type="submit" class="btn btn-outline-warning"><span><i class="ion-ios-add ml-1"></i>Detalles</span></button>
	    						</p>
	    					</form>
	    					<form action="cart.php" method="post">
	    						<input type="hidden" name="id" id="id"
								value="<?php echo openssl_encrypt($producto['ProductoId'], COD, KEY);?>">

								<input type="hidden" name="nombre" id="nombre"
								value="<?php echo openssl_encrypt($producto['Nombre'], COD, KEY);?>">

								<input type="hidden" name="precio" id="precio"
								value="<?php echo openssl_encrypt($producto['Precio'], COD, KEY);?>">

								<input type="hidden" name="descripcion" id="descripcion"
								value="<?php echo openssl_encrypt($producto['Descripcion'], COD, KEY);?>">

								<input type="hidden" name="imagen" id="imagen"
								value="<?php echo openssl_encrypt($producto['Imagen'], COD, KEY);?>">

								<input type="hidden" name="cantidad" id="cantidad"
								value="<?php echo openssl_encrypt(1, COD, KEY);?>">
								<p></p>
								<button name="btnAccion" value="agregar" type="submit" class="btn btn-black px-3 py-2"><span>Añadir al carrito<i class="ion-ios-cart ml-1"></i></span></button>
    						</form>
    					</div>
    				</div>
    			</div>

    		<?php } ?>

    		</div>
    	</div>
    	<div class="container">
			<div class="row justify-content-center mb-3 pb-3">
	          <div class="col-md-12 heading-section text-center ftco-animate">
	            <h2 class="mb-4">Nuestros nuevos accesorios!!</h2>
	            <p>Conoce los nuevos accesorios para tu vehículo que nos han llegado</p>
	          </div>
	        </div>
    	</div>
    	<div class="container">
    		<div class="row">
    		<?php
    			$sentencia=$pdo->prepare("SELECT * FROM `accesorio`, `compra` WHERE accesorio.CompraId = compra.CompraId AND compra.Fecha > '2019-10-01'");
				$sentencia->execute();
				$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
				//print_r($listaProductos);
    		?>

    		<?php foreach($listaProductos as $producto){ ?>
    			<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
    				<div class="product d-flex flex-column">
    					<a href="" class="img-prod"><img class="img-fluid"
    						src="<?php echo $producto['Imagen'];?>" alt="Colorlib Template">
    					</a>
    					<div class="text py-3 pb-4 px-3">
    						<div class="d-flex">
    							<div class="cat">
		    						<span>Calificación</span>
		    					</div>
		    					<div class="rating">
	    							<p class="text-right mb-0">
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    							</p>
	    						</div>
	    					</div>
    						<h3><a href=""><?php echo $producto['Nombre'];?></a></h3>
  							<div class="pricing">
	    						<p class="price"><span class="price-sale">$<?php echo $producto['Precio'];?></span></p>
	    					</div>
	    					<form action="product-single.php" method="post">
								<input type="hidden" name="nombre" id="nombre"
								value="<?php echo openssl_encrypt($producto['Nombre'], COD, KEY);?>">

								<input type="hidden" name="precio" id="precio"
								value="<?php echo openssl_encrypt($producto['Precio'], COD, KEY);?>">

								<input type="hidden" name="imagen" id="imagen"
								value="<?php echo openssl_encrypt($producto['Imagen'], COD, KEY);?>">

								<input type="hidden" name="descripcion" id="descripcion"
								value="<?php echo openssl_encrypt($producto['Descripcion'], COD, KEY);?>">

								<input type="hidden" name="tipo" id="tipo"
								value="<?php echo openssl_encrypt($producto['Tipo'], COD, KEY);?>">

								<input type="hidden" name="TipoMotor" id="TipoMotor"
								value="<?php echo openssl_encrypt($producto['TipoMotor'], COD, KEY);?>">

								<input type="hidden" name="potencia" id="potencia"
								value="<?php echo openssl_encrypt($producto['Potencia'], COD, KEY);?>">

								<input type="hidden" name="torque" id="torque"
								value="<?php echo openssl_encrypt($producto['Torque'], COD, KEY);?>">

								<input type="hidden" name="traccion" id="traccion"
								value="<?php echo openssl_encrypt($producto['Traccion'], COD, KEY);?>">

								<input type="hidden" name="TipoTransmision" id="TipoTransmision"
								value="<?php echo openssl_encrypt($producto['TipoTransmision'], COD, KEY);?>">

								<input type="hidden" name="rendimiento" id="rendimiento"
								value="<?php echo openssl_encrypt($producto['Rendimiento'], COD, KEY);?>">

								<p class="bottom-area d-flex px-3">
	    							<button name="btnAccion" value="agregar" type="submit" class="btn btn-outline-warning"><span><i class="ion-ios-add ml-1"></i>Detalles</span></button>
	    						</p>
	    					</form>
	    					<form action="cart.php" method="post">
	    						<input type="hidden" name="id" id="id"
								value="<?php echo openssl_encrypt($producto['ProductoId'], COD, KEY);?>">

								<input type="hidden" name="nombre" id="nombre"
								value="<?php echo openssl_encrypt($producto['Nombre'], COD, KEY);?>">

								<input type="hidden" name="precio" id="precio"
								value="<?php echo openssl_encrypt($producto['Precio'], COD, KEY);?>">

								<input type="hidden" name="descripcion" id="descripcion"
								value="<?php echo openssl_encrypt($producto['Descripcion'], COD, KEY);?>">

								<input type="hidden" name="imagen" id="imagen"
								value="<?php echo openssl_encrypt($producto['Imagen'], COD, KEY);?>">

								<input type="hidden" name="cantidad" id="cantidad"
								value="<?php echo openssl_encrypt(1, COD, KEY);?>">
								<p></p>
								<button name="btnAccion" value="agregar" type="submit" class="btn btn-black px-3 py-2"><span>Añadir al carrito<i class="ion-ios-cart ml-1"></i></span></button>
    						</form>
    					</div>
    				</div>
    			</div>

    		<?php } ?>

    		</div>
    	</div>
    	<div class="container">
			<div class="row justify-content-center mb-3 pb-3">
	          <div class="col-md-12 heading-section text-center ftco-animate">
	            <h2 class="mb-4">Nuevas refacciones en existencia!!</h2>
	            <p>Conoce las nuevas refacciones para tu vehículo que nos han llegado</p>
	          </div>
	        </div>
    	</div>
    	<div class="container">
    		<div class="row">
    		<?php
    			$sentencia=$pdo->prepare("SELECT * FROM `refaccion`, `compra` WHERE refaccion.CompraId = compra.CompraId AND compra.Fecha > '2019-10-01'");
				$sentencia->execute();
				$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
				//print_r($listaProductos);
    		?>

    		<?php foreach($listaProductos as $producto){ ?>
    			<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
    				<div class="product d-flex flex-column">
    					<a href="" class="img-prod"><img class="img-fluid"
    						src="<?php echo $producto['Imagen'];?>" alt="Colorlib Template">
    					</a>
    					<div class="text py-3 pb-4 px-3">
    						<div class="d-flex">
    							<div class="cat">
		    						<span>Calificación</span>
		    					</div>
		    					<div class="rating">
	    							<p class="text-right mb-0">
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    							</p>
	    						</div>
	    					</div>
    						<h3><a href=""><?php echo $producto['Nombre'];?></a></h3>
  							<div class="pricing">
	    						<p class="price"><span class="price-sale">$<?php echo $producto['Precio'];?></span></p>
	    					</div>
	    					<form id="" action="product-single.php" method="post">
								<input type="hidden" name="nombre" id="nombre"
								value="<?php echo openssl_encrypt($producto['Nombre'], COD, KEY);?>">

								<input type="hidden" name="precio" id="precio"
								value="<?php echo openssl_encrypt($producto['Precio'], COD, KEY);?>">

								<input type="hidden" name="imagen" id="imagen"
								value="<?php echo openssl_encrypt($producto['Imagen'], COD, KEY);?>">

								<input type="hidden" name="descripcion" id="descripcion"
								value="<?php echo openssl_encrypt($producto['Descripcion'], COD, KEY);?>">

								<input type="hidden" name="tipo" id="tipo"
								value="<?php echo openssl_encrypt($producto['Tipo'], COD, KEY);?>">

								<input type="hidden" name="TipoMotor" id="TipoMotor"
								value="<?php echo openssl_encrypt($producto['TipoMotor'], COD, KEY);?>">

								<input type="hidden" name="potencia" id="potencia"
								value="<?php echo openssl_encrypt($producto['Potencia'], COD, KEY);?>">

								<input type="hidden" name="torque" id="torque"
								value="<?php echo openssl_encrypt($producto['Torque'], COD, KEY);?>">

								<input type="hidden" name="traccion" id="traccion"
								value="<?php echo openssl_encrypt($producto['Traccion'], COD, KEY);?>">

								<input type="hidden" name="TipoTransmision" id="TipoTransmision"
								value="<?php echo openssl_encrypt($producto['TipoTransmision'], COD, KEY);?>">

								<input type="hidden" name="rendimiento" id="rendimiento"
								value="<?php echo openssl_encrypt($producto['Rendimiento'], COD, KEY);?>">

								<p class="bottom-area d-flex px-3">
	    							<button name="btnAccion" value="agregar" type="submit" class="btn btn-outline-warning"><span><i class="ion-ios-add ml-1"></i>Detalles</span></button>
	    						</p>
	    					</form>
	    					<form action="cart.php" method="post">
	    						<input type="hidden" name="id" id="id"
								value="<?php echo openssl_encrypt($producto['ProductoId'], COD, KEY);?>">

								<input type="hidden" name="nombre" id="nombre"
								value="<?php echo openssl_encrypt($producto['Nombre'], COD, KEY);?>">

								<input type="hidden" name="precio" id="precio"
								value="<?php echo openssl_encrypt($producto['Precio'], COD, KEY);?>">

								<input type="hidden" name="descripcion" id="descripcion"
								value="<?php echo openssl_encrypt($producto['Descripcion'], COD, KEY);?>">

								<input type="hidden" name="imagen" id="imagen"
								value="<?php echo openssl_encrypt($producto['Imagen'], COD, KEY);?>">

								<input type="hidden" name="cantidad" id="cantidad"
								value="<?php echo openssl_encrypt(1, COD, KEY);?>">
								<p></p>
								<button name="btnAccion" value="agregar" type="submit" class="btn btn-black px-3 py-2"><span>Añadir al carrito<i class="ion-ios-cart ml-1"></i></span></button>
    						</form>
    					</div>
    				</div>
    			</div>

    		<?php } ?>

    		</div>
    	</div>
<!-- fin de los productos más recientes -->
    </section>

    <section class="ftco-section ftco-choose ftco-no-pb ftco-no-pt">
    	<div class="container">
				<div class="row no-gutters">
					<div class="col-lg-4">
						<div class="choose-wrap divider-one img p-5 d-flex align-items-end" style="background-image: url(images/car9.jfif);">

    					<div class="text text-center text-white px-2">
								<span class="subheading">Colecciones</span>
    						<h2>Las mejores colecciones de vehículos</h2>
    						<p>Conoce las mejores colecciones de vehículos creadas por aficionados experimentados.</p>
    						<p><a href="#" class="btn btn-black px-3 py-2">Visitar</a></p>
    					</div>
    				</div>
					</div>
					<div class="col-lg-8">
    				<div class="row no-gutters choose-wrap divider-two align-items-stretch">
    					<div class="col-md-12">
	    					<div class="choose-wrap full-wrap img align-self-stretch d-flex align-item-center justify-content-end" style="background-image: url(images/car10.jfif);">
	    						<div class="col-md-7 d-flex align-items-center">
	    							<div class="text text-white px-5">
	    								<span class="subheading">Mercedes Benz</span>
			    						<h2>Conoce la marca Mercedes Benz</h2>
			    						<p>Conoce información más detallada acerca de esta marca tan distinguida.</p>
			    						<p><a href="#" class="btn btn-black px-3 py-2">Visitar</a></p>
			    					</div>
	    						</div>
	    					</div>
	    				</div>
    					<div class="col-md-12">
    						<div class="row no-gutters">
    							<div class="col-md-6">
		    						<div class="choose-wrap wrap img align-self-stretch bg-light d-flex align-items-center">
		    							<div class="text text-center px-5">
		    								<span class="subheading">Descuentos de invierno</span>
				    						<h2>Hasta 10% de descuento</h2>
				    						<p>Enterate de nuestros descuentos mas sobresalientes de esta temporada.</p>
				    						<p><a href="#" class="btn btn-black px-3 py-2">Ir ahora</a></p>
				    					</div>
		    						</div>
	    						</div>
	    						<div class="col-md-6">
		    						<div class="choose-wrap wrap img align-self-stretch d-flex align-items-center" style="background-image: url(images/car11.jfif);">
		    							<div class="text text-center text-white px-5">
		    								<span class="subheading">Vehículos de colección</span>
				    						<h2>Solo para coleccionistas</h2>
				    						<p>El mejor lugar para aprender acerca de los vehículos de colección que han sido pieza clave en la creacón de los vehículos que conocemos ahora.</p>
				    						<p><a href="#" class="btn btn-black px-3 py-2">Visitar</a></p>
				    					</div>
		    						</div>
	    						</div>
	    					</div>
    					</div>
    				</div>
    			</div>
  			</div>
    	</div>
    </section>

    <section class="ftco-section ftco-deal bg-primary">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6">
    				<img src="images/prod-1.png" class="img-fluid" alt="">
    			</div>
    			<div class="col-md-6">
    				<div class="heading-section heading-section-white">
    					<span class="subheading">Aprovecha!</span>
	            <h2 class="mb-3">Mejor trato del mes</h2>
	          </div>
    				<div id="timer" class="d-flex mb-4">
						  <div class="time" id="days"></div>
						  <div class="time pl-4" id="hours"></div>
						  <div class="time pl-4" id="minutes"></div>
						  <div class="time pl-4" id="seconds"></div>
						</div>
						<div class="text-deal">
							<h2><a href="#">Motor Detroit DD15</a></h2>
							<p class="price"><span class="mr-2 price-dc">$287,200.00</span><span class="price-sale">$250,000.00</span></p>
							<ul class="thumb-deal d-flex mt-4">
								<li class="img" style="background-image: url(images/product-6.png);"></li>
								<li class="img" style="background-image: url(images/product-2.png);"></li>
								<li class="img" style="background-image: url(images/product-4.png);"></li>
							</ul>
						</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row">
        	<div class="col-lg-5">
        		<div class="services-flow">
        			<div class="services-2 p-4 d-flex ftco-animate">
        				<div class="icon">
        					<span class="flaticon-bag"></span>
        				</div>
        				<div class="text">
	        				<h3>Envío gratis</h3>
	        				<p class="mb-0">Envío gratis en diferentes accesorios seleccionados</p>
        				</div>
        			</div>
        			<div class="services-2 p-4 d-flex ftco-animate">
        				<div class="icon">
        					<span class="flaticon-heart-box"></span>
        				</div>
        				<div class="text">
	        				<h3>Diferentes regalos</h3>
	        				<p class="mb-0">En la compra de su vehículo se llevará totalmente gratis diferentes accesorios para el mismo</p>
	        			</div>
        			</div>
        			<div class="services-2 p-4 d-flex ftco-animate">
        				<div class="icon">
        					<span class="flaticon-payment-security"></span>
        				</div>
        				<div class="text">
	        				<h3>Seguridad</h3>
	        				<p class="mb-0">Contamos con una excelente calidad en cuanto a nuestro manejo de la información, tanto de la información del cliente, como de todas sus transacciones realizadas con nosotros. Así como métodos de pago confiables</p>
	        			</div>
        			</div>
        			<div class="services-2 p-4 d-flex ftco-animate">
        				<div class="icon">
        					<span class="flaticon-customer-service"></span>
        				</div>
        				<div class="text">
	        				<h3>Soporte 24/7</h3>
	        				<p class="mb-0">Contamos con uno de los mejores soportes de vehículos en Aguascalientes</p>
	        			</div>
        			</div>
        		</div>
        	</div>
          <div class="col-lg-7">
          	<div class="heading-section ftco-animate mb-5">
	            <h2 class="mb-4">Te presentamos a algunos de nuestros clientes satisfechos!</h2>
	            <p>Te mostraremos comentarios que han hecho nuestros clientes acerca de nuestro servicio.</p>
	          </div>
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">Con Vehicular he tenido una de las mejores experiencias de compra, la calidad de su servicio al cliente es excelente así como sus vehículos.</p>
                    <p class="name">Jorge García</p>
                    <span class="position">Administrador de marketing</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">La calidad de su servicio ha sido excelente.</p>
                    <p class="name">Mario Martínez</p>
                    <span class="position">Abogado</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">Cuentan con una de las formas más fáciles de realizar pagos en línea</p>
                    <p class="name">Adrian Frangipane</p>
                    <span class="position">Ing.Sistemas</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">Los vehículos que ofrecen son de la mejor calidad</p>
                    <p class="name">Oscar de Luna</p>
                    <span class="position">Músico</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">He aprendido más de lo que esperaba por medio de su blog, ya que incluyen mucha información actualizada y completa</p>
                    <p class="name">Christian Perez</p>
                    <span class="position">Diseñador de interiores</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-gallery">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-8 heading-section text-center mb-4 ftco-animate">
            <h2 class="mb-4">Síguenos en Instagram!</h2>
            <p>Ahí podrás encontrar las noticias más recientes de nuestro negocio, fotos, campañas, ofertas especiales y mucho más</p>
          </div>
    		</div>
    	</div>
    	<div class="container-fluid px-0">
    		<div class="row no-gutters">
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-1.jfif" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-1.jfif);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-2.jfif" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-2.jfif);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-3.jfif" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-3.jfif);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-4.jfif" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-4.jfif);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-5.jfif" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-5.jfif);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-6.jfif" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-6.jfif);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
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
              <h2 class="ftco-heading-2">Tienda</h2>
              <p>Tienda especializada en vehículos.</p>
              <p>Información completa de diferentes marcas y vehículos</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://twitter.com"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://facebook.com/?lang=es"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://instagram.com/?lang=es"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menú</h2>
              <ul class="list-unstyled">
                <li><a href="shop.php" class="py-2 d-block">Tienda</a></li>
                <li><a href="about.php" class="py-2 d-block">Nosotros</a></li>
                <li><a href="blog.php" class="py-2 d-block">Diario</a></li>
                <li><a href="contact.php" class="py-2 d-block">Contactanos</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Ayuda</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Información de envío</a></li>
	                <li><a href="#" class="py-2 d-block">Regresos y cambios</a></li>
	                <li><a href="#" class="py-2 d-block">Terminos y condiciones</a></li>
	                <li><a href="#" class="py-2 d-block">Política de privacidad</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="contact.php" class="py-2 d-block">Preguntas frecuentes</a></li>
	                <li><a href="contact.php" class="py-2 d-block">Contacto</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">¿Tienes preguntas?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Av. Adolfo López Mateos #1801, Ote Fracc, Bona Gens, 20256 Aguascalientes, Ags.</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+52 4492589637</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">Vehicular@vehiculos.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Esta plantilla fue hecha con <i class="icon-heart color-danger" aria-hidden="true"></i> por <a href="https://colorlib.com" target="_blank">Equipo vehicular</a>

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

  </body>
</html>