<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD</title>
</head>

<body>
<?php


include("coneccion.php");

/*$coneccion=$base->query("select * from productos");
$registro=$coneccion->fetchAll(PDO::FETCH_OBJ);*/

$registro=$base->query("SELECT * FROM PRODUCTOS")->fetchAll(PDO::FETCH_OBJ);

if(isset($_POST["cr"])){
	$fecha=$_POST["fecha"];
  $nombre=$_POST["nombre"];
  $precio=$_POST["precio"];  
  $kg=$_POST["kg"];
  $cantidad=$_POST["cantidad"];
  
  $sql="INSERT INTO PRODUCTOS (fecha, nombre, precio, kg, cantidad)VALUE(:miFech, :miNom, :miPre, :miKg, :miCant)";
	  
	  $resultado=$base->prepare($sql);
	  $resultado->execute(array(":miFech"=>$fecha, ":miNom"=>$nombre, ":miPre"=>$precio, ":miKg"=>$kg, ":miCant"=>$cantidad));
	  header("Location:INDEX.php");
  }
?>

<h1 align="center">CRUD <span class="subtitulo">Create Read Update Delete</span></h1>
<h2 align="center">FORMULARIO DE COMPRAS</h2>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<table bgcolor="#3366CC" width="50" border="1" align="center">
<tr>
	<td class="primera fila">id</td>
	<td class="primera fila">fecha</td>
    <td class="primera fila">nombre</td>
    <td class="primera fila">precio</td>
    <td class="primera fila">kg</td>
    <td class="primera fila">cantidad</td></tr>
<?php
 foreach($registro as $Datos):?> 
<tr>    
	<td><?php echo $Datos->id?></td>
	<td><?php echo $Datos->fecha?></td>
    <td><?php echo $Datos->nombre?></td>
    <td><?php echo $Datos->precio?></td>
    <td><?php echo $Datos->kg?></td>
    <td><?php echo $Datos->cantidad?></td>
    
    <td class="bot"><a href="borrar_registro.php?id=<?php echo $Datos->id ?>"><input type="button" name="del" value="Borrar"></a></td>
     <td class="bot"><a href="actualizar_registro_compras.php?id=<?php echo $Datos->id ?>
      &amp; fecha=<?php echo $Datos->fecha?>
      &amp; nombre=<?php echo $Datos->nombre?>
      &amp; precio=<?php echo $Datos->precio?>
      &amp; kg=<?php echo $Datos->kg?>
      &amp; cantidad=<?php echo $Datos->cantidad?>">
      <input type="button" name="up" value="Actualizar"></a></td></tr>
     
     <?php
	 endforeach;
	 ?>
     
     
     <tr>
     <td></td>
      <td><input type="text" name="fecha" size="10" class="centrado"></td> 
      <td><input type="text" name="nombre" size="10" class="centrado"></td>  
      <td><input type="text" name="precio" size="10" class="centrado"></td> 
      <td><input type="text" name="kg" size="10" class="centrado"></td> 
      <td><input type="text" name="cantidad" size="10" class="centrado"></td> 
      <td class="bot"><input type="submit"  name="cr" id="cr" value="Ingreso"></td></tr>
      </table>
      </form>
</body>
</html>