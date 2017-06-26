<?php 
	// Inicio de la clase conexion
	class Conexion
	{
		
		private $host = "localhost";
		private $db = "horoscopo";
		private $user = "";
		private $pass = "";
		
		public $rows = array();
		
	//Conexion directa con la base de datos 	
		function __construct()
		{
			return $this->conexion = new PDO("mysql:host=$this->host;dbname=$this->db;", $this->user, $this->pass);
		}
	//COnectar con la bd
		function execq($query){
			$con = $this->conexion->prepare($query);
			$con->execute();
		}
	//Traer los datosdela bd	
		function getData($query){
			$con = $this->conexion->prepare($query);
			$con->execute();
			while ($fila = $con->fetch(PDO::FETCH_ASSOC)) {
				$this->rows[] = $fila;
			}	
		}

	}

 ?>