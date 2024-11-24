<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario para ingresar datos</title>
<style>
h1{
	text-align:center;
	color:#00F;
	border-bottom:double #0000FF;
	width:90%;
	margin:auto;
	
}
	
	table{
		border:1px solid #F00;
		padding:20px 50px;
		margin-top:50px;
	}
	body{
		background-color:#ff6600;
	}
</style>
</head>


<body>

<h1>Formulario para ingreso de Registros</h1>

<form action="ingresar_datos.php" method="get">
<table border="1" align="center">
<tr><td>id</td>
<td><label for="id"></label><input type="text" name="id" id="id"></td></tr>

<tr><td>nombre</td>
<td><label for="nombre"></label><input type="text" name="nombre" id="nombre"></td></tr>

<tr><td>fecha</td>
<td><label for="cuit"></label><input type="text" name="fecha" id="fecha"></td></tr>

<tr><td>kg</td>
<td><label for="kg"></label><input type="text" name="kg" id="kg"></td></tr>

<tr><td>cantidad</td>
<td><label for="cantidad"></label><input type="text" name="cantidad" id="cantidad"></td></tr>

<tr>
<td align="center"><input type="submit" name="GUARDAR" id="guardar" value="GUARDAR">
</tr>
<td colspan="2"><p align="center"><a href="cierre.php">CERRAR SESION</a></p></td>
</table>

<?php






?>

</body>
</html>