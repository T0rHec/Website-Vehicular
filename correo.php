<?php
	$correo = $_POST["correo"];
	$tema = $_POST["tema"];
	$mensaje = $_POST["mensaje"];
	$url = 'https://api.sendgrid.com/';
	$user = 'USER';
	$pass = 'PASSWORD';
	$params = array(
	'api_user' => $user,
	'api_key' => $pass,
	'to' => 'EMAIL',
	'subject' => $tema,
	'html' => $mensaje,
	'text' => $mensaje,
	'from' => $correo,
	);
	$request = $url.'api/mail.send.json';
	// Generate curl request
	$session = curl_init($request);
	// Tell curl to use HTTP POST
	curl_setopt ($session, CURLOPT_POST, true);
	// Tell curl that this is the body of the POST
	curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
	// Tell curl not to return headers, but do return the response
	curl_setopt($session, CURLOPT_HEADER, false);
	curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
	// obtain response
	$response = curl_exec($session);
	curl_close($session);
	// print everything out
	// print_r($response);
	header("Location: contact.php");
?>