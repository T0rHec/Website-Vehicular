<?php
  	define("KEY", "vehicular");
    define("COD", "AES-128-ECB");

    $id = openssl_decrypt($_POST["id"], COD, KEY);
    $nombre = openssl_decrypt($_POST["nombre"], COD, KEY);
    $precio = openssl_decrypt($_POST["precio"], COD, KEY);
    $imagen = openssl_decrypt($_POST["imagen"], COD, KEY);
    $color = openssl_decrypt($_POST["color"], COD, KEY);
    $tipo = openssl_decrypt($_POST["tipo"], COD, KEY);
    $descripcion = openssl_decrypt($_POST["descripcion"], COD, KEY);
    $cantidad = openssl_decrypt($_POST["cantidad"], COD, KEY);

    header('Location: product-single.php');
?>