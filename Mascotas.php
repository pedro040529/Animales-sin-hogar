<?php

# Fase 1:  Estableciendo la conexion con MySQL
$pdo = new PDO("mysql:host=localhost;dbname=albergue;charset=utf8","root","");




?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    


<h1>Portal de Mascotas</h1>
    <a href="registro.php">Nueva Mascota</a>
    <?php

      #Fase 2: Iterar los registros
?>
  
    <?php foreach($pdo->query("SELECT*FROM registro ORDER BY id DESC") as $fila) { ?>



    <h2><?php echo $fila["nombre"] ?></h2>
    <p><?php echo $fila["descripcion"] ?></p>
    <?php echo $fila["lugar"] ?></p>

<?php } ?>



</body>
</html>