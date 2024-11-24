<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ingreso de datos de ventas</title>

</head>

<body>
<?php


/*include("conexiones/coneccion_bbdd_la_paseandera.php");

/*$coneccion=$base->query("select * from productos");
$registro=$coneccion->fetchAll(PDO::FETCH_OBJ);

$registro=$base->query("SELECT * FROM VENTAS")->fetchAll(PDO::FETCH_OBJ);

if(isset($_POST["cr"])){
	$fecha=$_POST["fecha"];
  $hamburguesa=$_POST["hamburguesa"];
  $lomo=$_POST["lomo"];  
  $chorizo=$_POST["chorizo"];
  $cono_fritas=$_POST["cono_fritas"];
  $milanesa=$_POST["milanesa"];
  $pizza=$_POST["pizza"];
  
  $sql="INSERT INTO VENTAS (fecha, hamburguesa, lomo, chorizo, cono_fritas, milanesa, pizza)VALUE(:miFech, :miHamb, :miLomo, :miChori, :miCono, :miMila, :miPizza)";
	  
	  $resultado=$base->prepare($sql);
	  $resultado->execute(array(":miFech"=>$fecha, ":miHamb"=>$hamburguesa, ":miLomo"=>$lomo, ":miChori"=>$chorizo, ":miCono"=>$cono_fritas, ":miMila"=>$milanesa, ":miPizza"=>$pizza));
	  header("Location:ventas.php");
  }
*/
?>

<h1 align="center">CRUD <span class="subtitulo">Create Read Update Delete</span></h1>
<h2 align="center">ventas del food truck</h2>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<table width="50" border="1" align="center">
<tr>
	<td class="primera fila">id</td>
	<td class="primera fila">fecha</td>
    <td class="primera fila">hamburguesa</td>
    <td class="primera fila">lomo</td>
    <td class="primera fila">chorizo</td>
    <td class="primera fila">cono_fritas</td>
    <td class="primera fila">milanesa</td>
    <td class="primera fila">pizza</td></tr>
<?php
foreach($registro as $Datos):?> 
<tr>    
	<td><?php echo $Datos->id?></td>
	<td><?php echo $Datos->fecha?></td>
    <td><?php echo $Datos->hamburguesa?></td>
    <td><?php echo $Datos->lomo?></td>
    <td><?php echo $Datos->chorizo?></td>
    <td><?php echo $Datos->cono_fritas?></td>
    <td><?php echo $Datos->milanesa?></td>
    <td><?php echo $Datos->pizza?></td>
    
    <td class="bot"><a href="borrar_registro.php?id=<?php echo $Datos->id ?>"><input type="button" name="del" value="Borrar"></a></td>
     <td class="bot"><a href="actualizar_registro.php?id=<?php echo $Datos->id ?>
      &amp; fecha=<?php echo $Datos->fecha?>
      &amp; hamburguesa=<?php echo $Datos->hamburguesa?>
      &amp; lomo=<?php echo $Datos->lomo?>
      &amp; chorizo=<?php echo $Datos->chorizo?>
      &amp; cono_fritas=<?php echo $Datos->cono_fritas?>
      &amp; milanesa=<?php echo $Datos->milanesa?>
      &amp; pizza=<?php echo $Datos->pizza?>">
      <input type="button" name="up" value="Actualizar"></a></td></tr>
     
     <?php
endforeach;
	 ?>
     
     
     <tr>
     <td></td>
      <td><input type="text" name="fecha" size="10" class="centrado"></td> 
      <td><input type="text" name="hamburguesa" size="10" class="centrado"></td>  
      <td><input type="text" name="lomo" size="10" class="centrado"></td> 
      <td><input type="text" name="chorizo" size="10" class="centrado"></td> 
      <td><input type="text" name="cono_fritas" size="10" class="centrado"></td> 
      <td><input type="text" name="milanesa" size="10" class="centrado"></td> 
      <td><input type="text" name="pizza" size="10" class="centrado"></td> 
      <td class="bot"><a href="crear_registro.php"><input type="submit"  name="cr" id="cr" value="Ingreso"></a></td></tr>
      </table>
      </form>
</body>
</html>