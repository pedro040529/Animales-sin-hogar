<?php
# Leer los parametros POST
$nombre = $_POST["ns"];
$descripcion = $_POST["ds"];
$lugar = $_POST["ls"];


# Guardar los datos en la BD
$pdo = new PDO("mysql:host=localhost;dbname=albergue;charset=utf8","root","");
$pdo->query("INSERT INTO registro VALUES (NULL, '$nombre','$descripcion','$lugar')");



#Redireccionar al index
header("Location: registro.php");




?>