<?php
$pdo= new PDO("mysql:host=localhost;dbname=albergue;charset=utf8","root","");
$resultado = $pdo->query("SELECT * FROM registro ");
$Listado = $resultado->fetch();
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
    <h1>Actualizar albergue</h1>
    <form action="actualiza.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <div>nombre: <input type="text" name="n" value="<?php echo $Listado['nombre']?>"></div>
   
    <button>Eliminar</button>
    </form>
</body>
</html>