<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprueba Loguin</title>
</head>

<body>
<?php
		try{
		$base=new PDO("mysql:host=localhost; dbname=la_paseandera", "root", ""); 
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM `usuarios` WHERE Usuario= :usuario AND Clave= :clave";
		$resultado=$base->prepare($sql);
		$login=htmlentities(addslashes($_POST["Login"]));
		$password=htmlentities(addslashes($_POST["Password"]));
		
		
		$resultado->bindValue(":usuario", $login);
		$resultado->bindValue(":clave", $password);
		
		$resultado->execute();
		
		$numero_registro=$resultado->rowCount();


		if($numero_registro!=1){
			echo "<h2>FELICIDADES YA INGRESASTE!!!</h2>";
			
			session_start();
			
			$_SESSION["usuario"]=$_POST["Login"];
			
			header("Location:Usuarios_registrados_2.php");
		}else{
			header("location:loguin.php");
		}
		
		

		}catch(Exception $e){
			die("Error: " . $e->getMessage());
		}
?>
</body>
</html>