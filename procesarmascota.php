<?php
# Leer los parametros POST
$nombre = $_POST["n"];
$descripcion = $_POST["d"];
$lugar = $_POST["l"];


# Guardar los datos en la BD
$pdo = new PDO("mysql:host=localhost;dbname=albergue;charset=utf8","root","");
$pdo->query("INSERT INTO registro VALUES (NULL, '$nombre','$descripcion','$lugar')");



#Redireccionar al index
header("Location: registro.php");




?>