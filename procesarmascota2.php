<?php
# Leer los parametros POST
$nombres = $_POST["n"];
$apellidos = $_POST["a"];
$telefono = $_POST["t"];
$mascota = $_POST["m"];
$descripciones = $_POST["d"];
$edad = $_POST["e"];
$sexo = $_POST["s"];

# Guardar los datos en la BD
$pdo = new PDO("mysql:host=localhost;dbname=albergue;charset=utf8","root","");
$pdo->query("INSERT INTO esterilizar VALUES (NULL, '$nombres','$apellidos','$telefono','$mascota','$descripciones','$edad','$sexo')");



#Redireccionar al index
header("Location: Esterilizar.php");




?>