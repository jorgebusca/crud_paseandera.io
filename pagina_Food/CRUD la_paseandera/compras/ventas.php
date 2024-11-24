<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>


<body>
<?php 
include("coneccion.php");

//$coneccion=$base->query("select * from productos");
//$registro=$coneccion->fetchAll(PDO::FETCH_OBJ);

$registro=$base->query("SELECT * FROM VENTAS")->fetchAll(PDO::FETCH_OBJ);

if(isset($_POST["cr"])){
	$fecha=$_POST["fecha"];
	$hamburguesa=$_POST["hamburguesa"];
	$lomo=$_POST["lomo"];
	$chorizo=$_POST["chorizo"];
	$cono_fritas=$_POST["cono_fritas"];
	$milanesa=$_POST["milanesa"];
	$pizza=$_POST["pizza"];
	$agua_chica=$_POST["agua_chica"];
	$agua_grande=$_POST["agua_grande"];
	$cervaza_lata=$_POST["cerveza_lata"];
	$cerveza_litro=$_POST["cerveza_litro"];
	
	$sql="INSERT INTO VENTAS (Fecha, Hamburguesa, Lomo,Chorizo, Cono_Fritas, Milanesa, Pizza, Agua_Chica, Agua_Grande, Cerveza_Lata, Cerveza_Litro) VALUE (:fecha, :hamb, :lomo, :chory, :c_fritas, :mila, :pizza, :a_chica, :a_grande, :c_lata, :c_litro)"; //ACA A LOS REGISTROS DE LA TABLA LE ASIGNO MARCADORES
	
	$resultado=$base->prepare($sql);
	$resultado->execute(array(":fecha"=>$fecha, "hamb"=>$hamburguesa, ":lomo"=>$lomo, ":chory"=>$chorizo, ":c_fritas"=>$cono_fritas, ":mila"=>$milanesa, ":pizza"=>$pizza, ":a_chica"=>$agua_chica, ":a_grande"=>$agua_grande, ":c_lata"=>$cervaza_lata, ":c_litro"=>$cerveza_litro));//ACA ASIGNO LOS DATOS QUE ESTAN EN LAS VARIABLES DEL POST A LOS MARCADORES
	  
	  header("Location:ventas.php");
 }
?>

<h1 align="center">FORMULARIO DE INGRESO DE VENTAS</h1>
<form>
<table border="1" align="center" bgcolor="#339900">
<tr>
	<td class="primera fila">ID</td>
    
	<tr><td class="primera fila">FECHA</td><td><input type="text" name="fecha" size="15" class="centrado"></td></tr>
    <tr><td class="primera fila">HAMBURGUESA</td><td><input type="text" name="hamburguesa" size="15" class="centrado"></td></tr>
    
    <tr><td class="primera fila">LOMO</td> <td><input type="text" name="lomo" size="15" class="centrado"></td></tr>
    
    <tr><td class="primera fila">CHORIZO</td><td><input type="text" name="chorizo" size="15" class="centrado"></td></tr>
    
   <tr><td class="primera fila">CONO_FRITAS</td><td><input type="text" name="cono_fritas" size="15" class="centrado"></td></tr>
    
   <tr><td class="primera fila">MILANESA</td><td><input type="text" name="milanesa" size="15" class="centrado"></td></tr> 
   
    <tr><td class="primera fila">PIZZA</td><td><input type="text" name="pizza" size="15" class="centrado"></td></tr>
<td></td>
   <td class="bot"><input type="submit"  name="cr" id="cr" value="Ingreso"></td></tr>
</table>      
</form>





</body>
</html>