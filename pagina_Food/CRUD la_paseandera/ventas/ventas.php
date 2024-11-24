<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ingreso de datos de ventas</title>

<style type="text/css">
.fuente_impresion {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
}
</style>
</head>

<body background="imagenes/IMG-20180311-WA0000.jpg">
<span class="fuente_impresion">
<?php 
include("coneccion.php");

//$coneccion=$base->query("select * from productos");
//$registro=$coneccion->fetchAll(PDO::FETCH_OBJ);

//-------------------------------------------paginacion-------------------------------------------------------



	 $TAMAÑO_PAGINAS=5;
	 
	 if(isset($_GET["pagina"])){
		 if($_GET["pagina"]==1){
			 
			 header("Location:ventas.php");
	 }else{
		 
		$PAGINA=$_GET["pagina"];
	 }
	 }else{
	 
	 $PAGINA=1;
	 }
	 $empezar_desde=($PAGINA-1)*$TAMAÑO_PAGINAS;
	 
	 
	$sql_total="SELECT * FROM VENTAS";
	$resultado=$base->prepare($sql_total);
	$resultado->execute(array());
	
	$num_filas=$resultado->rowCount();
	$total_paginas=ceil($num_filas/$TAMAÑO_PAGINAS);

//--------------------------------------------------------------------------------------------------



$registro=$base->query("SELECT * FROM VENTAS LIMIT $empezar_desde,$TAMAÑO_PAGINAS")->fetchAll(PDO::FETCH_OBJ);

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
	
	$sql="INSERT INTO VENTAS (Fecha, Hamburguesa, Lomo, Chorizo, Cono_Fritas, Milanesa, Pizza, Agua_Chica, Agua_Grande, Cerveza_Lata, Cerveza_Litro) VALUES (:fecha, :hamb, :lomo, :chory, :c_fritas, :mila, :pizza, :a_chica, :a_grande, :c_lata, :c_litro)"; //ACA A LOS REGISTROS DE LA TABLA LE ASIGNO MARCADORES
	
	$resultado=$base->prepare($sql);
	$resultado->execute(array(":fecha"=>$fecha, "hamb"=>$hamburguesa, ":lomo"=>$lomo, ":chory"=>$chorizo, ":c_fritas"=>$cono_fritas, ":mila"=>$milanesa, ":pizza"=>$pizza, ":a_chica"=>$agua_chica, ":a_grande"=>$agua_grande, ":c_lata"=>$cervaza_lata, ":c_litro"=>$cerveza_litro));//ACA ASIGNO LOS DATOS QUE ESTAN EN LAS VARIABLES DEL POST A LOS MARCADORES 
	
	//ESTE FORMULARIO FUNCIONO BIEN DE ECHO INGRESE VALORES A LA BASE DE DATOS PERO ALGO BORRE O FALTA PORQUE HICE DE NUEVO DESDE EL POST HASTA EL ARRAY Y NO FUNCIONA 
	
	header("Location:ventas.php");
	
}

echo "Usted esta en la pagina " . $PAGINA 


?>
</span>
<p>
  
<h1 align="center">CRUD <span class="subtitulo">Create Read Update Delete</span></h1>
<h2 align="center">ventas del food truck</h2> 




<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<table width="25%" border="1" align="center" bgcolor="#33FF99">
<tr>
	<td class="primera fila">ID</td>
	<td class="primera fila">FECHA</td>
    <td class="primera fila">HAMBURGUESA</td>
    <td class="primera fila">LOMO</td>
    <td class="primera fila">CHORIZO</td>
    <td class="primera fila">CONO_FRITAS</td> 
    <td class="primera fila">MILANESA</td>
    <td class="primera fila">PIZZA</td>
    <td class="primera fila">AGUA_CHICA</td>
    <td class="primera fila">AGUA_GRANDE</td>
    <td class="primera fila">CERVEZA_LATA</td>
    <td class="primera fila">CERVEZA_LITRO</td>
</tr>
<?php 
foreach($registro as $Datos):?> 
<tr>    
	<td><?php echo $Datos->ID?></td>
	<td><?php echo $Datos->Fecha?></td>
    <td><?php echo $Datos->Hamburguesa?></td>
    <td><?php echo $Datos->Lomo?></td>
    <td><?php echo $Datos->Chorizo?></td>
    <td><?php echo $Datos->Cono_Fritas?></td>
    <td><?php echo $Datos->Milanesa?></td>
    <td><?php echo $Datos->Pizza?></td>
    <td><?php echo $Datos->Agua_Chica?></td>
    <td><?php echo $Datos->Agua_Grande?></td>
    <td><?php echo $Datos->Cerveza_Lata?></td>
    <td><?php echo $Datos->Cerveza_Litro?></td>
    
    <td class="bot"><a href="borrado_registro.php?id=<?php echo $Datos->ID?>"><input type="button" name="del" value="Borrar"></a>
    
     <td class="bot"><a href="actualizar_registro_ventas.php?id=<?php echo $Datos->ID?> 
     &amp; fecha=<?php echo $Datos->Fecha?> 
     &amp; hamburguesa=<?php echo $Datos->Hamburguesa?> 
     &amp; lomo=<?php echo $Datos->Lomo?>
     &amp; chorizo=<?php echo $Datos->Chorizo?>
     &amp; cono_fritas=<?php echo $Datos->Cono_Fritas?>
     &amp; milanesa=<?php echo $Datos->Milanesa?>
     &amp; pizza=<?php echo $Datos->Pizza?>
     &amp; agua_chica=<?php echo $Datos->Agua_Chica?>
     &amp; agua_grande=<?php echo $Datos->Agua_Grande?>
     &amp; cerveza_lata=<?php echo $Datos->Cerveza_Lata?>
     &amp; cerveza_litro=<?php echo $Datos->Cerveza_Litro?>">
     
     <input type="button" name="actualizar" value="Actualizar"></a></td>
    </tr>
     
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
      <td><input type="text" name="agua_chica" size="10" class="centrado"></td>
      <td><input type="text" name="agua_grande" size="10" class="centrado"></td>
      <td><input type="text" name="cerveza_lata" size="10" class="centrado"></td>
      <td><input type="text" name="cerveza_litro" size="10" class="centrado"></td>
      
      <td class="bot"><input type="submit"  name="cr" id="cr" value="Ingreso"></td></tr>
     
  <tr><td>    
  <span class="fuente_impresion">
  <?PHP    //--------------------------------paginacion----------------------------------------------------------

for($i=1; $i<=$total_paginas; $i++){
	
print "<a href='?pagina= " . $i . "'> " . ' Pag' . $i . "</a>  ";
}

?> 
</td></tr>
</table>
</form>
 
</body> 
</html>