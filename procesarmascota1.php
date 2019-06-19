<?php
# Leer los parametros POST
$nombres1 = $_POST["n1"];
$apellidos1 = $_POST["a1"];
$mascota1 = $_POST["m1"];
$telefono1 = $_POST["t1"];
$descripciones1 = $_POST["d1"];
$edad1 = $_POST["e1"];
$distrito1 = $_POST["di1"];
$sexo1 = $_POST["s1"];

# Guardar los datos en la BD
$pdo = new PDO("mysql:host=localhost;dbname=albergue;charset=utf8","root","");
$pdo->query("INSERT INTO voluntarios VALUES (NULL, '$nombres1','$apellidos1','$telefono1','$distrito1','$descripciones1','$edad1','$sexo1')");



#Redireccionar al index
header("Location: voluntario.php");




?>