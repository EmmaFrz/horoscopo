<?php 
	
	require_once("conexion.php");

	//Clase para el incio de sesion del administrador
	class User extends Conexion
	{
		private $user;
		private $pass;

		public function __construct($user, $pass){
			parent::__construct();
			$this->user = $user;
			$this->pass = $pass;
		}

		//Conecta con la tabla admin
		public function Auth(){
			$q = "SELECT * FROM admin WHERE user = '$this->user' AND pass = '$this->pass'";
			$this->getData($q);
			if (!empty($this->rows))
				return true;
			return false;
		}

		public function getUserName(){
			return $this->username;
		}

		public function getPass(){
			return $this->pass;
		}

		
	}	
	
	//Clase para la identificacion de los atribuitos de los temas del horoscopo 
	class Topicos extends Conexion{

		public static $TOPIC_LIST = array("amor", "amistad", "trabajo", "solteros", "dinero", "salud");
		public static $SIGNOS = array("Aries","Tauro","Geminis","Cancer","Leo","Virgo","Libra","Escorpio","Sagitario","Capricornio","Acuario","Piscis");

		private $id;
		private $amor;
		private $amistad;
		private $trabajo;
		private $solteros;
		private $dinero;
		private $salud;
		private $id_signo;
		private $fecha;

		public function __construct(){parent::__construct();}



	//Getter general que carga todos los topicos de la aplicacion
		public function get($topic){
			return $this->$topic;
		}
	//Carga del ID del signo Zodiacal para encontrar el nombre	
		public function getNombreSig(){
			return getSigno($this->id_signo);
		}
	//Busqueda del ID del signo zodiacal
		public function getIdSigno(){
			return $this->id_signo;
		}
	//identificar los topicos	
		public function setTopics($amor, $amistad, $trabajo, $solteros, $dinero, $salud, $signo){
			
			$this->amor = $amor;
			$this->amistad = $amistad; 
			$this->trabajo = $trabajo;
			$this->solteros = $solteros;
			$this->dinero = $dinero;
			$this->salud = $salud;
			$this->id_signo = $signo;
		}
		//cargar los topicos del dia
		public function setTodayTopics($fecha){
			$q = "INSERT INTO topicos(amor, amistad, trabajo, solteros, dinero, salud, fecha, id_signo) VALUES
			 ('$this->amor', '$this->amistad', '$this->trabajo', '$this->solteros', '$this->dinero', '$this->salud', 
			 '$fecha', '$this->id_signo')";
			 $this->execq($q);
			 
		}

		//actualizalos topicos del dia
		public function UpdateTopic($id){
			$q = "UPDATE topicos SET amor = '$this->amor', amistad = '$this->amistad', trabajo = '$this->trabajo', solteros = '$this->solteros', dinero = '$this->dinero', salud = '$this->salud' where id = '$id'";	
			$this->execq($q);
		}

		//Mostrar los topicos del dia
		public function getAllTopics($signo, $fecha){
			$ids = $signo + 1;
			$fecha = strval($fecha);
			$q = "SELECT * FROM topicos WHERE id_signo = '$ids' AND fecha = 
			'$fecha'";

			$this->getData($q);
				
			if (!empty($this->rows)) {
				foreach ($this->rows[0] as $topicKey => $topicValue){
					$this->$topicKey = $topicValue;
				}
			}
		}
	}
?>