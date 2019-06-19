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
    <link rel="stylesheet" href="diseño.css">
    <link rel="stylesheet" href="estilos.css">
    <title>Proyecto</title>
</head>
<body>
<header>
        <div class="ancho">
            <div class="logo">
            <p><a href="index.php">Albergue INO</a></p>
            </div>
            <nav>
                <ul>
                     <li><a href="index.php" class="abc">Inicio</a></li>
                     <li><a href="Nosotros.php" class="abc">Nosotros</a></li>
                     <li><a href="Adopciones.php" class="abc">Adopciones</a></li>
                     <li><a href="Esterilizar.php" class="abc">Esterilizacion</a></li>
                     <li><a href="Donaciones.php" class="abc">Donaciones</a></li>
                     <li><a href="voluntario.php">Voluntariado</a></li>
                     <li><a href="login.php">Administrador</a></li>
      
                </ul>                  
            </nav>
        </div>
    </header>
    
    <div class="colordiv">
        <h1 class="titulo2">ADOPCIONES</h1>
            
    </div>
    <img src="imagenes/perro1.jpg" alt="" width="350" height="300">
   
<img src="imagenes/perro2.png" alt="" width="350" height="300">
<img src="imagenes/perro3.jpg" alt="" width="400" height="300">
<img src="imagenes/perro4.jpg" alt="" width="400" height="300">
<img src="imagenes/perro5.jpg" alt="" width="387" height="300">

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
<tr><td>
    <h2><?php echo $fila["nombre"] ?></h2></td>
    <td>
    
    <p><?php echo $fila["descripcion"] ?></p></td>
    <td>
    <?php echo $fila["lugar"] ?></p>
    </td>
    </tr>
    </table>
    </div>




<?php } ?>



   <footer>
       
       <div class="container-footer-all">
        
            <div class="container-body">

                <div class="colum1">
                    <h1>Mas informacion de Nosotros</h1>
                    <pre>
                    <p>Somos un equipo de profesionales que cree fervientemente 
que podemos darles una segunda oportunidad a estos canes, 
aplicando la técnica de socialización activa entre pares</p>
                    </pre>

                </div>

                <div class="colum2">

                    <h1>Redes Sociales</h1>

                    <div class="row">
                        <img src="iconos/facebook.png">
                        <a href="http://www.facebook.com"><label>Siguenos en Facebook</label></a>
                    </div>
                    <div class="row">
                        <img src="iconos/twitter.png">
                        <a href="http://www.twitter.com"><label>Siguenos en Twitter</label></a>
                    </div>
                    <div class="row">
                        <img src="iconos/instagram.png">
                        <a href="http://www.instagram.com"><label>Siguenos en Instagram</label></a>
                    </div>

                </div>

                <div class="colum3">

                    <h1>Informacion Contactos</h1>

                    <div class="row2">
                        <img src="iconos/casa.png">
                        <label>Av. la Fontana 550, La Molina 00012</label>
                    </div>

                    <div class="row2">
                        <img src="iconos/celular.png">
                        <label>+51 987654321</label>
                    </div>

                    <div class="row2">
                        <img src="iconos/contacto.png">
                         <label>pedro040529@gmail.com</label>
                    </div>

                </div>

            </div>
        
        </div>
        
        <div class="container-footer">
               <div class="footer">
                    <div class="copyright">
                        © 2019 Todos los Derechos Reservados 
                    </div>
                </div>

            </div>
        
    </footer>
</body>
</html>