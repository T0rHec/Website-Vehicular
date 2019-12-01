<?php
  include 'templates/cabecera.php';

  	define("KEY", "vehicular");
    define("COD", "AES-128-ECB");

    $nombre = openssl_decrypt($_POST["nombre"], COD, KEY);
    $precio = openssl_decrypt($_POST["precio"], COD, KEY);
    $imagen = openssl_decrypt($_POST["imagen"], COD, KEY);
    //$color = openssl_decrypt($_POST["color"], COD, KEY);
    $tipo = openssl_decrypt($_POST["tipo"], COD, KEY);
   	$descripcion = openssl_decrypt($_POST["descripcion"], COD, KEY);
    $TipoMotor = openssl_decrypt($_POST["TipoMotor"], COD, KEY);
    $potencia = openssl_decrypt($_POST["potencia"], COD, KEY);
    $torque = openssl_decrypt($_POST["torque"], COD, KEY);
    $traccion = openssl_decrypt($_POST["traccion"], COD, KEY);
    $TipoTransmision = openssl_decrypt($_POST["TipoTransmision"], COD, KEY);
    $rendimiento = openssl_decrypt($_POST["rendimiento"], COD, KEY);
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

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="images/RR.jpg" class="image-popup prod-img-bg"><img src="<?php echo($imagen);?>" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3><?php echo($nombre);?></h3>
    				<div class="rating d-flex">
							<p class="text-left mr-4">
								<a href="#" class="mr-2">5.0</a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
							</p>
							<p class="text-left mr-4">
								<a href="#" class="mr-2" style="color: #fff;">100 <span style="color: #bbb;">Calificación</span></a>
							</p>
						</div>
    				<p class="price"><span>$<?php echo($precio);?></span></p>
    				<p><?php echo($tipo);?>
						</p>
						<div class="row mt-4">
							<div class="col-md-6">
								<div class="form-group d-flex">
		             <div class="select-wrap">
	                </div>
		            </div>
							</div>
							<div class="w-100"></div>
							<div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   <i class="ion-ios-remove"></i>
	                	</button>
	            		</span>
	             	<input type="text" id="quantity" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
	             	<span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="ion-ios-add"></i>
	                 </button>
	             	</span>
	          	</div>
	          	<div class="w-100"></div>
          	</div>
          	<p><a href="cart.php" class="btn btn-black py-3 px-5 mr-2">Añadir al carrito</a>
          		<a href="cart.php" class="btn btn-primary py-3 px-5">Compra ahora</a></p>
    			</div>
    		</div>




    		<div class="row mt-5">
          <div class="col-md-12 nav-link-wrap">
            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link ftco-animate active mr-lg-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Descripción</a>

              <a class="nav-link ftco-animate mr-lg-1" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Manufactura</a>

              <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Comentarios</a>

            </div>
          </div>
          <div class="col-md-12 tab-wrap">

            <div class="tab-content bg-light" id="v-pills-tabContent">

              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
              	<div class="p-4">
	              	<h3 class="mb-4"><?php echo($nombre);?></h3>
	              	<p><?php echo($descripcion);?></p>
	              	<p><?php echo($TipoMotor);?></p>
	              	<p><?php echo($potencia);?></p>
	              	<p><?php echo($torque);?></p>
	              	<p><?php echo($traccion);?></p>
	              	<p><?php echo($TipoTransmision);?></p>
	              	<p><?php echo($rendimiento);?></p>
              	</div>
              </div>

              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
              	<div class="p-4">
	              	<h3 class="mb-4">Hecho por Rolls Royce</h3>
	              	<p>Desde los años veinte, Rolls-Royce ha comercializado diferentes generaciones del Rolls-Royce Phantom. La última se ha presentado en 2017, con una plataforma completamente nuevo, un diseño continuista que moderniza levemente su imagen y, sobre todo, mucha tecnología y el foco puesto aún más en el confort de los pasajeros y la personalización.</p>
              	</div>
              </div>
              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
              	<div class="row p-4">
						   		<div class="col-md-7">
						   			<h3 class="mb-4">23 Comentarios</h3>
						   			<div class="review">
								   		<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
								   		<div class="desc">
								   			<h4>
								   				<span class="text-left">Jacob Webb</span>
								   				<span class="text-right">14 Marzo 2019</span>
								   			</h4>
								   			<p class="star">
								   				<span>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
							   					</span>
							   					<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
								   			</p>
	              	<p>No existe ningún otro coche que pueda ofrecer una combinación de lujo y espacio como esta. Es simplemente hermoso.</p>
								   			</p>
								   		</div>
								   	</div>
								   	<div class="review">
								   		<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
								   		<div class="desc">
								   			<h4>
								   				<span class="text-left">Dante</span>
								   				<span class="text-right">28 Agosto 2019</span>
								   			</h4>
								   			<p class="star">
								   				<span>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
							   					</span>
							   					<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
								   			</p>
								   			<p>El mejor vehículo que se ha desarrollado en mucho tiempo.</p>
								   		</div>
								   	</div>
								   	<div class="review">
								   		<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
								   		<div class="desc">
								   			<h4>
								   				<span class="text-left">Andres</span>
								   				<span class="text-right">30 Septiembre 2019</span>
								   			</h4>
								   			<p class="star">
								   				<span>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
							   					</span>
							   					<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
								   			</p>
								   			<p>A pesar de su alto precio, comprarse un automovil como este es lograr una meta increible.</p>
								   		</div>
								   	</div>
						   		</div>
						   		<div class="col-md-4">
						   			<div class="rating-wrap">
							   			<h3 class="mb-4">Brindanos tus opiniones</h3>
							   			<p class="star">
							   				<span>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					(98%)
						   					</span>
						   					<span>5 Comentarios</span>
							   			</p>
							   			<p class="star">
							   				<span>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					(85%)
						   					</span>
						   					<span>10 Comentarios</span>
							   			</p>
							   			<p class="star">
							   				<span>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					(98%)
						   					</span>
						   					<span>5 Comentarios</span>
							   			</p>
							   			<p class="star">
							   				<span>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					(98%)
						   					</span>
						   					<span>0 Comentarios</span>
							   			</p>
							   			<p class="star">
							   				<span>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					(98%)
						   					</span>
						   					<span>0 Comentarios</span>
							   			</p>
							   		</div>
						   		</div>
						   	</div>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

<?php
  include 'templates/footer.php'
?>