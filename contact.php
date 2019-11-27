<?php
  include 'templates/cabecera.php';
?>

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php" style="color: white">Inicio</a></span>
            <h1 class="mb-0 bread" style="color: white">Contáctanos</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	<div class="row d-flex mb-5 contact-info">
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Dirección:</span>Av. Adolfo López Mateos #1801, Ote Fracc, Bona Gens, 20256 Aguascalientes, Ags.</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Teléfono:</span> <a href="tel://1234567920">+52 4492589637</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Correo electrónico:</span> <a href="mailto:info@yoursite.com">pvehicular007@gmail.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Sitio Web</span> <a href="#">Vehicular.com</a></p>
	          </div>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="correo.php" method="post" class="bg-white p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" name="correo" placeholder="Correo Electrónico" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="tema" placeholder="Tema" required>
              </div>
              <div class="form-group">
                <textarea name="mensaje" id="mensaje" cols="30" rows="7" name="mensaje" class="form-control" placeholder="Mensaje" required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Enviar mensaje" class="btn btn-primary py-3 px-5">
              </div>
            </form>

          </div>

          <div class="col-md-6 d-flex">
            <iframe class="map-wrap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3702.495665434041!2d-102.2641563856268!3d21.876980863657085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429ee069d6cf307%3A0xd93b5294c07171a7!2sInstituto+Tecnol%C3%B3gico+De+Aguascalientes!5e0!3m2!1ses!2smx!4v1524844351958/sistema" width="100%" height="600" frameborder="0" style="width:100%; height: 445px;" id="map"></iframe>
          </div>
        </div>
      </div>
    </section>

<?php
  include 'templates/footer.php'
?>