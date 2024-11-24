<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INSERTANDO REGISTRO</title>
</head>

<body>

<?PHP

	$USUARIO=$_POST["USUARIO"];
	$CLAVE=$_POST["CLAVE"];
	
	//$CIFRADO=crypt($CLAVE);
	
	
	require("coneccion_bbdd.php");
	
	
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_password,$db_nombre);
	
		if(mysqli_connect_errno()){
		
		echo "Fallo al conectar con la base de datos verifique la ruta";
			
			exit();
		}
		
		mysqli_select_db($conexion,$db_nombre)or die ("no se encuentra la BBDD");
		mysqli_set_charset($conexion, "utf8");
		
		
	$consulta= "INSERT INTO USUARIOS (USUARIO, CLAVE) VALUES (?,?)"; 

	
	$resultado=mysqli_prepare($conexion,$consulta);
	$ok=mysqli_stmt_bind_param($resultado, "ss", $USUARIO, $CLAVE);
	$ok=mysqli_stmt_execute($resultado);
	
	
	if($ok==false){//abre llave de if
		echo "Error al guardar registro";
	}//cierra llave de if
	else{//abre llave de else
	
		
		echo"Registro guardado satisfactoriamente<br><br>";
		echo"<table><tr><td>$USUARIO</td></tr>";
		echo"<tr><td>$CLAVE</td></tr></table>";	
		
		
	}//cierra llave del else
	
	
	mysqli_stmt_close($resultado);
	
?>
		

</body>
</html>