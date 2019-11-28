<?php

	define("KEY", "vehicular");
	define("COD", "AES-128-ECB");

	define("SERVIDOR", "localhost");
	define("USUARIO", "root");
	define("PASSWORD", "");
	define("DB", "vehicular");

	$servidor="mysql:dbname=".DB.";host=".SERVIDOR;

	try{

		$pdo= new PDO($servidor,USUARIO,PASSWORD,
					array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
				);
		//echo "<script>alert('Conectado...')</script>";
	}catch(PDOException $e){
		echo "<script>alert('Error...')</script>";
	}

?>