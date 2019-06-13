<?php
#Paso 1  : Leer los valores nuevos

$nombre = $_POST["n"];

#Paso 2 : Actualizar la BD

$pdo = new PDO("mysql:host=localhost;dbname=albergue;charset=utf8","root","");
$pdo->query("DELETE registro SET nombre = '$nombre'");

#Paso 3 : Redirigir

header("Location: registro.php");
?>