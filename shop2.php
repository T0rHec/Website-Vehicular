<?php
	include 'conexion.php';
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
	      <a class="navbar-brand" href="index.php" style="color: white">Vehicular</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menú
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link" style="color: white">Inicio</a></li>
	          <li class="nav-item active"><a href="shop.php" class="nav-link" style="color: white">Catálogo</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link" style="color: white">Nosotros</a></li>
	          <li class="nav-item"><a href="blog.php" class="nav-link" style="color: white">Blog</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link" style="color: white">Contacto</a></li>
	          <li class="nav-item"><a href="faq.php" class="nav-link" style="color: white">FAQ</a></li>
	          <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link" style="color: white"><span class="icon-shopping_cart"></span>[0]</a></li>
              <li class="nav-item dropdown">
              <li class="nav-item"><a href="regform-33/login.html" class="nav-link" style="color: white">Ingresar</a></li>
            </li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php" style="color: white">Inicio</a></span>
            <h1 class="mb-0 bread" style="color: white">Tienda</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-8 col-lg-10 order-md-last">
    				<div class="row">
					<?php
						$sentencia=$pdo->prepare("SELECT Nombre, Precio, Imagen FROM accesorio");
						$sentencia->execute();
						$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
						//print_r($listaProductos);
					?>
					<?php foreach($listaProductos as $producto){ ?>
						<div class="col-sm-12 col-md-12 col-lg-4 ftco-animate d-flex">
		    				<div class="product d-flex flex-column">
		    					<a href="product-single.php" class="img-prod"><img class="img-fluid" src="<?php echo $producto['Imagen'];?>" alt="Colorlib Template">
		    						<div class="overlay"></div>
		    					</a>
		    					<div class="text py-3 pb-4 px-3">
		    						<div class="d-flex">
		    							<div class="cat">
				    						<span>Estilo de vida</span>
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
		    						<h3><a href="product-single.php"><?php echo $producto['Nombre'];?></a></h3>
		    						<div class="pricing">
			    						<p class="price"><span>$<?php echo $producto['Precio'];?></span></p>
			    					</div>
			    					<p class="bottom-area d-flex px-3">
		    							<a href="cart.php" class="add-to-cart text-center py-2 mr-1"><span>Añadir al carrito <i class="ion-ios-add ml-1"></i></span></a>
		    							<a href="product-single.php" class="buy-now text-center py-2">Compra ahora<span><i class="ion-ios-cart ml-1"></i></span></a>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
    				<?php } ?>

		    		</div>






	        </div>

		    	<div class="col-md-4 col-lg-2">
		    		<div class="sidebar">
							<div class="sidebar-box-2">
								<h2 class="heading">Categorías</h2>
								<div class="fancy-collapse-panel">
                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                     <div class="panel panel-default">
                         <div class="panel-heading" role="tab" id="headingOne">
                             <h4 class="panel-title">
                                 <a class="collapsed" href="shop.php">Vehículos</a>
                             </h4>
                         </div>
                     </div>
                     <div class="panel panel-default">
                         <div class="panel-heading" role="tab" id="headingTwo">
                             <h4 class="panel-title">
                                 <a href="shop2.php">Accesorios</a>
                             </h4>
                         </div>
                     </div>
                     <div class="panel panel-default">
                         <div class="panel-heading" role="tab" id="headingThree">
                             <h4 class="panel-title">
                                 <a class="collapsed" href="shop3.php">Prendas</a>
                             </h4>
                         </div>
                     </div>
                     <div class="panel panel-default">
                         <div class="panel-heading" role="tab" id="headingFour">
                             <h4 class="panel-title">
                                 <a class="collapsed" href="shop4.php">Refacciones</a>
                             </h4>
                         </div>
                     </div>
               </div>
							</div>
							<div class="sidebar-box-2">
								<h2 class="heading">Rango de precios</h2>
								<form method="post" class="colorlib-form-2">
		              <div class="row">
		                <div class="col-md-12">
		                  <div class="form-group">
		                    <label for="guests">Precio desde:</label>
		                    <div class="form-field">
		                      <i class="icon icon-arrow-down3"></i>
		                      <select name="people" id="people" class="form-control">
		                        <option value="#">100</option>
		                        <option value="#">200</option>
		                        <option value="#">300</option>
		                        <option value="#">400</option>
		                        <option value="#">1,000</option>
		                        <option value="#">100,000</option>
		                      </select>
		                    </div>
		                  </div>
		                </div>
		                <div class="col-md-12">
		                  <div class="form-group">
		                    <label for="guests">Precio hasta:</label>
		                    <div class="form-field">
		                      <i class="icon icon-arrow-down3"></i>
		                      <select name="people" id="people" class="form-control">
		                        <option value="#">1,000</option>
		                        <option value="#">4,000</option>
		                        <option value="#">600,000</option>
		                        <option value="#">800,000</option>
		                        <option value="#">5,000,000</option>
		                        <option value="#">10,000,000</option>
		                      </select>
		                    </div>
		                  </div>
		                </div>
		              </div>
		            </form>
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
            <h2 class="mb-4">Siguenos en Instagram!</h2>
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