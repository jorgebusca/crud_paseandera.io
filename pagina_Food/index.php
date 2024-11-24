<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Loguearse</title>
<style>
h1{
	text-align:center;
}
table{width:25%;
background:#39F;
border:2px dotted #FF0000;
margin:auto;}

.izq{text-align:right;}
.der{text-align:left;}
td{text-align:center;
padding:10px;}

		
body {
	background-image: url();
	background-repeat: no-repeat;
	margin-left: 100px;
	margin-top: 100px;
	margin-right: 100px;
	margin-bottom: 100px;
	background-color: #FFF;
}
body,td,th {
	font-size: 18px;
	color: #000;
}
</style>
</head>

<body>
<h1>Introduce Tus Datos</h1>

<form action="comprueba_loguin.php" method="post">

<table>
<tr><td class="izq">Usuario:</td><td class="der"><input type="text" name="Login" /></td></tr>
<tr><td class="izq">Clave:</td><td class="der"><input type="password" name="Password" /></td></tr>
<tr><td colspan="2"><input type="submit" name="enviar" value="ingresar" /></td></tr>
<tr><td colspan="2"><a href="formularios/formulario_crear_usuario.php">REGISTRARSE</a></td></tr>

</table>
</form>
<?php


?>
</body>
</html>