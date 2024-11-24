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
		background-color:#6CF;
	}
</style>
</head>


<body>

<h1>Formulario para crear Registros</h1>

<form action="../acciones/crear_usuario.php" method="get">
<table border="1" align="center">

<tr><td>Usuario</td>
<td><label for="Usuario"></label><input type="text" name="Usuario" id="Usuario"></td></tr>

<tr><td>Contraseña</td>
<td><label for="Contraseña"></label><input type="text" name="Contraseña" id="Contraseña"></td></tr>

<tr><td>Email</td>
<td><label for="Email"></label><input type="text" name="Email" id="Email"></td></tr>

<tr>
<td align="center"><input type="submit" name="GUARDAR" id="guardar" value="GUARDAR">
</tr>

</table>

<?php






?>

</body>
</html>