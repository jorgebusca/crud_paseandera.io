<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>usuario 2</title>
<style type="text/css">
.CENTRADO {
	text-align: center;
}
.USUARIO_1 {
	text-align: center;
}
.USUARIO_3 {
	text-align: center;
}
.USUARIO_2 {
	text-align: center;
}
.USUARIO_4 {
	text-align: center;
}
.USUARIO_2 .USUARIO_2 {
}
</style>
</head>

<body bgcolor="#009966">
<?php
		session_start();
		if (!isset($_SESSION["Usuario"])){
			
			header("Location:loguin.php");
			
		}

?>

<h1 align="center">Bienvenido Usuario

<?php

	echo "Hola: " . $_SESSION["Usuario"] . "<br><br>";

?>
</h1>

<p align="center">Esto es informacion solo para usuarios registrados</p>

<p>&nbsp;</p>
<table align="center" width="528" height="176" border="1">
  <tr>
    <td colspan="3"><p align="center">BASE DE DATOS LA PASEANDERA</p></td>
  </tr>
  <tr>
    <td class="Ingreso_datos"><span class="Ingreso_datos"><a href="formulario_ingreso_datos.php">Formulario para ingresar datos</a></span></td>
    <td class="Actualizar_datos"><span class="Actualizar_datos"><a href="formulario_actualizar_datos.php">Formulario para Actualizar datos</a></span></td>
    <td class="Imprimir_datos"><span class="Imprimir_datos"><a href="formulario_imprimir_datos.php">Formulario para Imprimir datos</a></span></td>
  </tr>
   <tr>
    <td colspan="3"><p align="center"><a href="cierre.php">CERRAR SESION</a></p></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>