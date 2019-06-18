<?php
# Leer los parametros POST
$nombre2 = $_POST["n"];
$apellido2 = $_POST["a"];
$mascota2 = $_POST["m"];
$telefono2 = $_POST["t"];
$descripcion2 = $_POST["d"];
$edad2= $_POST["e"];


# Guardar los datos en la BD
$pdo = new PDO("mysql:host=localhost;dbname=albergue;charset=utf8","root","");
$pdo->query("INSERT INTO esterilizacion VALUES (NULL, '$nombre2','$apellido2','$mascota2','$telefono2','$descripcion2','$edad2')");



#Redireccionar al index
header("Location: Mascotas.php");




?>