<?php
	require_once('conexionPDO.php');
	require_once('clienteClass.php');

	class CrudCliente{

		public function __construct(){}

		//inserta los datos del cliente
		public function insertar($cliente){
			$db=DB::conectar();
			$insert=$db->prepare('INSERT INTO CLIENTE VALUES(NULL, :Nombre, :Apellido, :Telefono, :Domicilio, :Email, :Password, NULL, NULL, NULL)');
			$insert->bindValue('Nombre',$cliente->getNombre());
			$insert->bindValue('Apellido',$cliente->getApellido());
			$insert->bindValue('Telefono',$cliente->getTelefono());
			$insert->bindValue('Domicilio',$cliente->getDomicilio());
			$insert->bindValue('Email',$cliente->getEmail());
			//encripta la contraseña
			$pass=password_hash($cliente->getPassword(),PASSWORD_DEFAULT);
			$insert->bindValue('Password',$pass);
			$insert->execute();
		}

		//obtiene el usuario para el login
		public function obtenerCliente($nombre, $email, $password){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM cliente WHERE nombre=:nombre AND email=:email');
			$select->bindValue('nombre',$nombre);
			$select->bindValue('email',$email);
			$select->execute();
			$registro=$select->fetch();
			$cliente=new Cliente();
			//verifica si la password es conrrecta
			if (password_verify($password, $registro['Password'])) {
				//si es correcta, asigna los valores que trae desde la base de datos
				$cliente->setClienteId($registro['ClienteId']);
				$cliente->setNombre($registro['Nombre']);
				$cliente->setEmail($registro['Email']);
				$cliente->setpassword($registro['Password']);
			}
			return $cliente;
		}

		//busca el nombre del usuario si existe
		public function buscarCliente($nombre){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM cliente WHERE nombre=:nombre');
			$select->bindValue('nombre',$nombre);
			$select->execute();
			$registro=$select->fetch();
			if($registro['ClienteId']!=NULL){
				$usado=False;
			}else{
				$usado=True;
			}
			return $usado;
		}
	}
?>