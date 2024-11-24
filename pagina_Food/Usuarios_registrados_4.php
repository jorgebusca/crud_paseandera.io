<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>usuario 4</title>
</head>

<body>
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

<table width="528" height="176" border="1">
  <tr>
    <td colspan="3"><p align="center">USUARIOS REGISTRADOS</p></td>
  </tr>
  <tr>
    <td class="USUARIO_1"><span class="USUARIO_1"><a href="Usuarios_registrados_1.php">PAGINA_1</a></span></td>
    <td class="USUARIO_2"><span class="USUARIO_2"><a href="Usuarios_registrados_2.php">PAGINA_2</a></span></td>
    <td class="USUARIO_3"><span class="USUARIO_3"><a href="Usuarios_registrados_3.php">PAGINA_3</a></span></td>
  </tr>
   <tr>
    <td colspan="3"><p align="center"><a href="cierre.php">CERRAR SESION</a></p></td>
  </tr>
</table>
<p>&nbsp;</p>

</body>
</html>