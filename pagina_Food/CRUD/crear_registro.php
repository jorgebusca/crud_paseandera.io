<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ingreso de Datos</title>
</head>

<body> 
<?php
include ("coneccion.php");

$ID=$_GET["id"];
$FECHA=$_GET["fecha"];
$NOMBRE=$_GET["nombre"];
$PRECIO=$_GET["precio"];
$KG=$_GET["kg"];
$CANTIDAD=$_GET["cantidad"];

$base->query("INSERT INTO PRODUCTOS WHERE id='$id')VALUES('$ID', '$FECHA', '$NOMBRE', '$PRECIO','$KG', '$CANTIDAD'");

header ("Location:index.php");






?>
</body>
</html>