<?php
	include 'conexion.php';
	include 'templates/cabecera.php';
?>

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
                                 <a href="shop.php">Vehículos</a>
                             </h4>
                         </div>
                     </div>
                     <div class="panel panel-default">
                         <div class="panel-heading" role="tab" id="headingTwo">
                             <h4 class="panel-title">
                                 <a class="collapsed" href="shop2.php">Accesorios</a>
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

<?php
	include 'templates/footer.php'
?>