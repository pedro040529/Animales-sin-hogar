<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../diseño.css">
</head>
<body>
    <div id="menu">
    <ul>
    <li>Home</li>
    <li class="cerrar-sesion">
    
    <a href="logout.php">Cerrar Sesion</a>
    
    
    </li>
    
    </ul>
    
    </div>

    <section>
    <h1>Bienvenido <?php echo $user->getNombre();?></h1>
    </section>
</body>
</html>