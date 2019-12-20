<?php

	class Cliente{
		private $Nombre;
		private $Email;
		private $Telefono;
		private $Domicilio;
		private $Password;

		public function getClienteId(){
			return $this->ClienteId;
		}

		public function setClienteId($ClienteId){
			$this->ClienteId = $ClienteId;
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

		public function getDomicilio(){
			return $this->Domicilio;
		}

		public function setDomicilio($Domicilio){
			$this->Domicilio = $Domicilio;
		}

		public function getPassword(){
			return $this->Password;
		}

		public function setPassword($Password){
			$this->Password = $Password;
		}
	}
?>