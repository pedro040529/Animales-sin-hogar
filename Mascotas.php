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
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body class="bodys">
    


<h1>Portal de Mascotas</h1>
    <a href="registro.php" class="titulo">Nueva Mascota</a>
    <?php

      #Fase 2: Iterar los registros
?>
  
    <?php foreach($pdo->query("SELECT*FROM registro ORDER BY id DESC") as $fila) { ?>
<div id="main-container">
<table>
<thead>
    <tr>
        <th>Nombre</th><th>Descripcion</th><th>Lugar</th>
    </tr>
</thead>
<tr>
    <td>
    <h2><?php echo $fila["nombre"] ?></h2>
    </td>
    <td>
    <p><?php echo $fila["descripcion"] ?></p>
    </td>
    <td>
    <?php echo $fila["lugar"] ?></p>
    </td>
    </tr>
</table>
</div>










<?php } ?>



</body>
</html>