<title>conexion</title>
<?php
	//require("CONFIG.php");
	
	class Conexion{
		
		protected $conexion_db;
	
	public function Conexion(){
		
		try{
			$this->conexion_db=new PDO('mysql:DB_HOST=localhost, root', '', 'DB_NOMBRE=LA_PASEANDERA');
			$this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->conexion_db->exec("SET CHARACTER SET utf8");
			 
			return $this->conexion_db;
			
			
		}catch (Exception $e){
			
			echo "La linea de error es: " . $e->getLine();
			
		}
		
		
		
		//--------------------------------------CONEXION CON POO------------------------------------------------------------------
		
		/*$this->conexion_db=new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE);
		
		if($this->conexion_db->connect_errno){
			
		echo "Fallo al conectr con Mysql: " . $this->conexion_db->connect_error;
		return;	
		}
		
		$this->conexion_db->set_charset(DB_CHARSET);*/
		
	}	
	}
	?>