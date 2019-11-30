<?php
  include 'templates/cabecera.php';
?>

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_g.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php" style="color: white">Inicio</a></span>
            <h1 class="mb-0 bread" style="color: white">FAQ <br>(Preguntas Frecuentes)</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="containere">

		<h1>PREGUNTAS FRECUENTES</h1>


		<div class="acc">
			<h3>¿Cómo puedo encontrar información acerca del modelo de automóvil que me interesa?</h3>
			<div class="content">
				<div class="content-inner">
					<p>Debes hacer clic sobre el nombre catálogo que esta en la parte superior, al darle clic pordras visualizar la información de que necesitas: texto, imágenes y especificaciones.</p>
				</div>
			</div>
		</div>

		<div class="acc">
			<h3>¿Cómo puedo encontrar los accesorios?</h3>
			<div class="content">
				<div class="content-inner">
					<p>Puedes encontrar todos los accesorios disponibles en el sitio . Accede a la sección de catálogo, aparte de mostrarte los automóviles  se te muestran los accesorios que tenemos.</p>
				</div>
			</div>
		</div>

		<div class="acc">
			<h3>¿Cómo puedo encontrar comentarios de clientes para ayudar a decidirme?</h3>
			<div class="content">
				<div class="content-inner">
					<p>Al darle clic a uno de nuestros productos en la parte inferior se muestran los comentarios de clientes que han comprado esos mismos articulos y compartieron su experiencia .</p>
				</div>
			</div>
		</div>

		<div class="acc">
			<h3>¿Comó puedo comunicarme con ustedes?</h3>
			<div class="content">
				<div class="content-inner">
					<p>Nos puedes contactar las 24 horas del día, durante los 365 días del año; y desde cualquier punto para consultar tus dudas o quieras conocer mas información al respecto de cualquier producto. Nos pueden encontrar en un chat en línea, por correo (pvehicular007@gmail.com), por llamada al  449-258-96-37</p>
				</div>
			</div>
		</div>

		<div class="acc">
			<h3>¿Cuáles son los servicios que ofrece?</h3>
			<div class="content">
				<div class="content-inner">
					<p>
						Ofrecemos una gama de servicios ante y posteriores a la compra de tu vehículo para que lo puedas conservar como nuevo.
						<br>
						<br><strong>Como son:</strong>
						<br>Atención personalizada
						<br>Refacciones
						<br>Herramientas especializadas
						<br>Centros de servicio con la más alta tecnología
						<br>Diagnósticos específicos
						<br>Cambio de aceite o filtro
						<br>Mantenimiento de frenos
						<br>Estos servicios se te ofrecen con un precios adicional
					</p>
				</div>
			</div>
		</div>

		<div class="acc">
			<h3>¿Qué cobertura y duración tiene mi garantía?</h3>
			<div class="content">
				<div class="content-inner">
					<p>La garantía de tu automovil varía de acuerdo al modelo. Puedes obtener más información al contactarte con nostros.</p>
				</div>
			</div>
		</div>


	</div>
</section>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
  $('.acc h3').click(function(){
    $(this).next('.content').slideToggle();
    $(this).parent().toggleClass('active');
    $(this).parent().siblings().children('.content').slideUp();
    $(this).parent().siblings().removeClass('active');
  });
});
    </script>
</body>

<?php
  include 'templates/footer.php'
?>