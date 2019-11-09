<?php
	require_once('conexionPDO.php');
	require_once('empleadoClass.php');

	class CrudEmpleado{

		public function __construct(){}

		//inserta los datos del empleado
		public function insertar($empleado){
			$db=DB::conectar();
			$insert=$db->prepare('INSERT INTO empleado VALUES(NULL,:Nombre, :Apellido, :Telefono, :Email, :Password, NULL, NULL)');
			$insert->bindValue('Nombre',$empleado->getNombre());
			$insert->bindValue('Apellido',$empleado->getApellido());
			$insert->bindValue('Telefono',$empleado->getTelefono());
			$insert->bindValue('Email',$empleado->getEmail());
			//encripta la contraseña
			$pass=password_hash($empleado->getPassword(),PASSWORD_DEFAULT);
			$insert->bindValue('Password',$pass);
			$insert->execute();
		}

		//obtiene el usuario para el login
		public function obtenerEmpleado($nombre, $email, $password){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM empleado WHERE nombre=:nombre AND email=:email');
			$select->bindValue('nombre',$nombre);
			$select->bindValue('email',$email);
			$select->execute();
			$registro=$select->fetch();
			$empleado=new Empleado();
			//verifica si la password es conrrecta
			if (password_verify($password, $registro['Password'])) {
				//si es correcta, asigna los valores que trae desde la base de datos
				$empleado->setEmpleadoId($registro['EmpleadoId']);
				$empleado->setNombre($registro['Nombre']);
				$empleado->setEmail($registro['Email']);
				$empleado->setpassword($registro['Password']);
			}
			return $empleado;
		}

		//busca el nombre del usuario si existe
		public function buscarEmpleado($nombre){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM empleado WHERE nombre=:nombre');
			$select->bindValue('nombre',$nombre);
			$select->execute();
			$registro=$select->fetch();
			if($registro['EmpleadoId']!=NULL){
				$usado=False;
			}else{
				$usado=True;
			}
			return $usado;
		}
	}
?>