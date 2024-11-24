<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>crear usuario</title>
</head>

<body>

<?php
	try {
    $Usuario = $_GET["Usuario"];
    $Contraseña = $_GET["Contraseña"];
    $Email = $_GET["Email"];

    $pass = password_hash($Contraseña, PASSWORD_DEFAULT);

    require("../conexiones/coneccion_bbdd_la_paseandera.php");

    // Crear una instancia de PDO
    $dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_nombre;
    $base = new PDO($dsn, $db_usuario, $db_password);
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Preparar la consulta SQL
    $sql = "INSERT INTO USUARIOS (USUARIO, CLAVE, EMAIL) VALUES (:usu, :contra, :email)";
    $resultados = $base->prepare($sql);

    // Ejecutar la consulta con los parámetros
    $resultados->execute(array(":usu" => $Usuario, ":contra" => $pass, ":email" => $Email));

    echo "Los registros se ingresaron satisfactoriamente";

} catch (PDOException $e) {
    echo "Error de PDO: " . $e->getMessage();
} catch (Exception $e) {
    echo "Otro error: " . $e->getMessage();
}

?>
<form action="../index.php">
<table>	
<tr>
<td align="center"><input type="submit" name="Ingresar" id="Ingresar" value="Ingresar">
</tr>
</table>
</form> 	


</body>
</html>