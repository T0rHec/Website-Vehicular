<?php
	require_once('clienteClass.php');
	require_once('crud_cliente.php');
	require_once('conexionPDO.php');

	//inicio de sesion
	session_start();

	$cliente=new Cliente();
	$crud=new CrudCliente();
	//verifica si la variable registrarse está definida
	//se da que está definicda cuando el cliente se loguea, ya que la envía en la petición
	if (isset($_POST['registrarse'])) {
		$cliente->setNombre($_POST['name']);
		$cliente->setApellido($_POST['last_name']);
		$cliente->setEmail($_POST['email']);
		$cliente->setTelefono($_POST['tel']);
		$cliente->setDomicilio($_POST['Domicilio']);
		$cliente->setPassword($_POST['password']);
		if ($crud->buscarCliente($_POST['name'])) {
			$crud->insertar($cliente);
			header('Location: login.html');
		}else{
			header('Location: register.html');
		}

	}elseif (isset($_POST['entrar'])) { //verifica si la variable entrar está definida
		$cliente=$crud->obtenerCliente($_POST['name'],$_POST['email'],$_POST['password']);
		header('Location: ..');
		// si el id del objeto retornado no es null, quiere decir que encontro un registro en la base
		/*if ($cliente->getClienteId()!=NULL) {
			$_SESSION['name']=$cliente; //si el name se encuentra, crea la sesión de name
			header('Location: ..'); //envia a la página
		}*/
	}/*elseif(isset($_POST['salir'])){ // cuando presiona el botòn salir
		header('Location: login.html');
		unset($_SESSION['name']); //destruye la sesión
	}*/
?>