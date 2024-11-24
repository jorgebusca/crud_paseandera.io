<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>editar</title>
</head>

<body>
<h1 align="center">Actualizando Registros</h1>
<?php

include("coneccion.php");


if(!isset($_POST["bot_Actualizar"])){

$id=$_GET["id"];
$fecha=$_GET["fecha"];
$hamburguesa=$_GET["hamburguesa"];  
$lomo=$_GET["lomo"];
$chorizo=$_GET["chorizo"];
$cono_fritas=$_GET["cono_fritas"];
$milanesa=$_GET["milanesa"];
$pizza=$_GET["pizza"];
$agua_chica=$_GET["agua_chica"];
$agua_grande=$_GET["agua_grande"];
$cerveza_lata=$_GET["cerveza_lata"];
$cerveza_litro=$_GET["cerveza_litro"];

}else{
	
$id=$_POST["Id"];
$fecha=$_POST["Fecha"];
$hamburguesa=$_POST["Hamburguesa"];
$lomo=$_POST["Lomo"];
$chorizo=$_POST["Chorizo"];
$cono_fritas=$_POST["Cono_Fritas"];
$milanesa=$_POST["Milanesa"];
$pizza=$_POST["Pizza"];
$agua_chica=$_POST["Agua_Chica"];
$agua_grande=$_POST["Agua_Grande"];
$cerveza_lata=$_POST["Cerveza_Lata"];
$cerveza_litro=$_POST["Cerveza_Litro"];	

$sql="UPDATE VENTAS SET id=:Id, fecha=:FECHA, hamburguesa=:HAMB, lomo=:LOMO, chorizo=:CHORY, cono_fritas=:C_FRITAS, milanesa=:MILA, pizza=:PIZZA, agua_chica=:A_CHICA, agua_grande=:A_GRANDE, cerveza_lata=:C_LATA, cerveza_litro=:C_LITRO WHERE id=:ID,";

$resultado=$base->prepare($sql);
$resultado->execute(array(":Id"=>$id, ":FECHA"=>$fecha, ":HAMB"=>$hamburguesa, ":LOMO"=>$lomo, ":CHORY"=>$chorizo, ":C_FRITAS"=>$cono_fritas, ":MILA"=>$milanesa, ":PIZZA"=>$pizza, ":A_CHICA"=>$agua_chica, ":A_GRANDE"=>$agua_grande, ":C_LATA"=>$cerveza_lata, ":C_LITRO"=>$cerveza_litro));

header("Location:ventas.php");


}

?>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<table border="2" align="center" bgcolor="#00CCCC">
<tr>
<td>id</td>
<td><label for="id"></label>
<input type="hidden" name="Id" id="id" value="<?php echo $id ?>"></td>
</tr>
<tr>
<td>fecha</td>
<td><label for="fecha"></label>
<input type="text" name="Fecha" id="fecha" value="<?php echo $fecha ?>"></td>
</tr>
<tr>
<td>hamburguesa</td>
<td><label for="hamburguesa"></label>
<input type="text" name="Hamburguesa" id="hamburguesa" value="<?php echo $hamburguesa ?>"></td>
</tr>
<tr>
<td>lomo</td>
<td><label for="lomo"></label>
<input type="text" name="Lomo" id="lomo" value="<?php echo $lomo ?>"></td>
</tr>
<tr>
<td>chorizo</td>
<td><label for="chorizo"></label>
<input type="text" name="Chorizo" id="chorizo" value="<?php echo $chorizo ?>"></td>
</tr>
<tr>
<td>cono_fritas</td>
<td><label for="cono_fritas"></label>
<input type="text" name="Cono_Fritas" id="cono_fritas" value="<?php echo $cono_fritas ?>"></td>
</tr>
<tr>
<td>milanesa</td>
<td><label for="milanesa"></label>
<input type="text" name="Milanesa" id="milanesa" value="<?php echo $milanesa ?>"></td>
</tr>
<tr>
<td>pizza</td>
<td><label for="pizza"></label>
<input type="text" name="Pizza" id="pizza" value="<?php echo $pizza ?>"></td>
</tr>
<tr>
<td>agua_chica</td>
<td><label for="agua_chica"></label>
<input type="text" name="Agua_Chica" id="agua_chica" value="<?php echo $agua_chica ?>"></td>
</tr>
<tr>
<td>agua_grande</td>
<td><label for="agua_grande"></label>
<input type="text" name="Agua_Grande" id="agua_grande" value="<?php echo $agua_grande ?>"></td>
</tr>
<tr>
<td>cerveza_lata</td>
<td><label for="cerveza_lata"></label>
<input type="text" name="Cerveza_Lata" id="cerveza_lata" value="<?php echo $cerveza_lata ?>"></td>
</tr>
<tr>
<td>cerveza_litro</td>
<td><label for="cerveza_litro"></label>
<input type="text" name="Cerveza_Litro" id="cerveza_litro" value="<?php echo $cerveza_litro ?>"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="bot_Actualizar" id="bot_Actualizar" value="Actualizar"></td>
</tr>
</table>
</form>

</body>
</html>