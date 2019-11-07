<?php
	/*
	*
	*
	*/
	class Empleado{
		private $EmpleadoId;
		private $Nombre;
		private $Apellidos;
		private $Email;
		private $Telefono;
		private $Password;

		public function getEmpleadoId(){
			return $this->EmpleadoId;
		}

		public function setEmpleadoId($EmpleadoId){
			$this->EmpleadoId = $EmpleadoId;
		}

		public function getNombre(){
			return $this->Nombre;
		}

		public function setNombre($Nombre){
			$this->Nombre = $Nombre;
		}

		public function getApellido(){
			return $this->Apellido;
		}

		public function setApellido($Apellido){
			$this->Apellido = $Apellido;
		}

		public function getEmail(){
			return $this->Email;
		}

		public function setEmail($Email){
			$this->Email = $Email;
		}

		public function getTelefono(){
			return $this->Telefono;
		}

		public function setTelefono($Telefono){
			$this->Telefono = $Telefono;
		}

		public function getPassword(){
			return $this->Password;
		}

		public function setPassword($Password){
			$this->Password = $Password;
		}
	}
?>