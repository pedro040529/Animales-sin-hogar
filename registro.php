<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body class=bodys>
     
    <div class="colordiv3">
        <h1 class="titulo2">Registrar Mascota</h1>
            
    </div>

   
    <form action="procesarmascota.php" method="post">
    
    
    <div class="divisiones1">

    Nombre: <input type="text" name="n">
    
    </div>

    <div class="divisiones2">
    
    Descripcion:
    <textarea name="d" cols="30" rows="10"></textarea>
    
    </div>

    <div class="divisiones3">
    
    Lugar:
    <input type="text" name="l">
    
    </div>

    <button class="botoncito">Enviar</button>
    
    
    </form>
    <div class="regresa">
    <a href="administrador.php" class="letra">Regresar</a>
    </div>
</body>
</html>