<?php
	require_once('empleadoClass.php');
	require_once('crud_empleado.php');
	require_once('conexionPDO.php');

	//inicio de sesion
	session_start();

	$empleado=new Empleado();
	$crud=new CrudEmpleado();
	//verifica si la variable registrarse está definida
	//se da que está definicda cuando el empleado se loguea, ya que la envía en la petición
	if (isset($_POST['registrarse'])) {
		$empleado->setNombre($_POST['name']);
		$empleado->setApellido($_POST['last_name']);
		$empleado->setTelefono($_POST['tel']);
		$empleado->setEmail($_POST['email']);
		$empleado->setPassword($_POST['password']);
		if ($crud->buscarEmpleado($_POST['name'])) {
			$crud->insertar($empleado);
			header('Location: login.html');
		}else{
			header('Location: register.html');
		}

	}elseif (isset($_POST['entrar'])) { //verifica si la variable entrar está definida
		$empleado=$crud->obtenerEmpleado($_POST['name'],$_POST['email'],$_POST['password']);
		// si el id del objeto retornado no es null, quiere decir que encontro un registro en la base
		if ($empleado->getEmpleadoId()!=NULL) {
			$_SESSION['name']=$empleado; //si el name se encuentra, crea la sesión de name
			header('Location: index.php'); //envia a la página
		}
	}elseif(isset($_POST['salir'])){ // cuando presiona el botòn salir
		header('Location: login.html');
		unset($_SESSION['name']); //destruye la sesión
	}
?>