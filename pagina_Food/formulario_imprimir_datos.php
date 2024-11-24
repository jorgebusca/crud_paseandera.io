<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario para Actualizar datos</title>
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
		background-color:#F00
	}
</style>
</head>


<body>

<h1>Formulario para Imprimir Registros</h1>

<form action="../acciones/imprimir_datos.php" method="get">
<table border="1" align="center">
<tr><td>id</td>
<td><label for="id"></label><input type="text" name="id" id="id"></td></tr>

<tr>
<td align="center"><input type="submit" name="GUARDAR" id="guardar" value="GUARDAR">
</tr>

</table>

<?php






?>

</body>
</html>