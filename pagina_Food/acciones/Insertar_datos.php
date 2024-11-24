<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php
	$fecha=$_GET["fecha"];
	$nombre=$_GET["nombre"];
	$precio=$_GET["precio"];
	$kg=$_GET["kg"];
	$cantidad=$_GET["cantidad"];

require("../conexiones/coneccion_bbdd_la_paseandera.php");

$coneccion=mysqli_connect($db_host, $db_usuario, $db_password);
	
	if(mysqli_connect_errno()){
		echo "fallo al conectar con la base de datos";
		
	exit();
	}
	
	mysqli_select_db($coneccion, $db_nombre) or die ("No se encuentra la BBDD");
	
	mysqli_set_charset($coneccion, "utf8mb4_spanish2_ci	");
	
	
$sql="INSERT INTO PRODUCTOS (fecha, nombre, precio, kg, cantidad) VALUES ('$fecha', '$nombre', '$precio', '$kg', '$cantidad')";
	
	$resultados=mysqli_query($coneccion,$sql);
	
	if($resultados==false){
		
		echo "no se ingresaron registros";
	}else{
		echo "Los registros se ingresaron satisfactoriamente";
	
		
	}
	
 
 	mysqli_close($coneccion);
?>

</body>
</html>