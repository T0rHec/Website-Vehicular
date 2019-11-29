<?php
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
    <link rel="stylesheet" href="css/style2.css">
  </head>
  <body class="goto-here">
    <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v5.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="112331033551307"
        theme_color="#ff7e29"
        logged_in_greeting="Bienvenido! ¿Cómo podemos ayudarte?"
        logged_out_greeting="Bienvenido! ¿Cómo podemos ayudarte?">
      </div>

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
        <?php
          if (!isset($_SESSION['usuario'])) {
          echo '<ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="index.php" class="nav-link" style="color: white">Inicio</a></li>
                  <li class="nav-item"><a href="shop.php" class="nav-link" style="color: white">Catálogo</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link" style="color: white">Nosotros</a></li>
                <li class="nav-item"><a href="blog.php" class="nav-link" style="color: white">Blog</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link" style="color: white">Contacto</a></li>
                <li class="nav-item"><a href="faq.php" class="nav-link" style="color: white">FAQ</a></li>
                <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart" style="color: white"></span>[0]</a></li>
                <li class="nav-item"><a href="wishlist.php" class="nav-link" style="color: white">Lista de Deseos</a></li>
                <li class="nav-item"><a href="login.html" class="nav-link" style="color: white">Ingresar</a></li>
                </ul>
              ';
          }
          elseif (isset($_SESSION['usuario'])) {
            echo '<ul class="navbar-nav ml-auto">
                  <li class="nav-item active"><a href="index.php" class="nav-link" style="color: white">Inicio</a></li>
                    <li class="nav-item"><a href="shop.php" class="nav-link" style="color: white">Catálogo</a></li>
                  <li class="nav-item"><a href="about.php" class="nav-link" style="color: white">Nosotros</a></li>
                  <li class="nav-item"><a href="blog.php" class="nav-link" style="color: white">Blog</a></li>
                  <li class="nav-item"><a href="contact.php" class="nav-link" style="color: white">Contacto</a></li>
                  <li class="nav-item"><a href="faq.php" class="nav-link" style="color: white">FAQ</a></li>
                  <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link" style="color: white"><span class="icon-shopping_cart"></span>[0]</a></li>
                  <li class="nav-item"><a href="wishlist.php" class="nav-link" style="color: white">Lista de Deseos</a></li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">'; echo $_SESSION['usuario']['Nombre']; echo '</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <form action="controller_login.php" method="post">
                      <button class="dropdown-item" name="salir" value="salir">Salir</button>
                    </form>
                    </div>
                    </li>
               ';
          }
        ?>
        </div>
      </div>
          </div>
        </div>
      </nav>
    <!-- END nav -->