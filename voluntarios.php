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
    <script LANGUAGE="JavaScript">
<!--
var cuenta=0;

function enviado() { 
if (cuenta == 0)
{
cuenta++;
return true;
}
else 
{
alert("El siguiente formulario ya ha sido enviado, muchas gracias.");
return false;
}
}
// --><SCRIPT languaje="JavaScript">
function pulsar() {
alert("Se a esterilizado a la Mascota");
}
</script>
</head>


<div class="regresa">
    <a href="administrador.php" class="letra">Regresar</a>
    </div>
<body class="bodys">


<?php

#Fase 2: Iterar los registros
?>

<?php foreach($pdo->query("SELECT*FROM voluntarios ORDER BY id DESC") as $fila) { ?>
<div id="main-container">
<table>
<thead>
    <tr>
        <th>Nombres</th><th>Apellidos</th><th>Telefono</th><th>Distrito</th><th>Descripciones</th><th>Edad</th><th>Sexo</th>
    </tr>
</thead>
<tr>
    <td>
    <p><?php echo $fila["nombres1"] ?></p>
    </td>
    <td>
    <p><?php echo $fila["apellidos1"] ?></p>
    </td>
    <td>
    <p><?php echo $fila["telefono1"] ?></p>
    </td>
    <td>
    <p><?php echo $fila["distrito1"] ?></p>
    </td>
    <td>
    <?php echo $fila["descripciones1"] ?></p>
    </td>
    <td>
    <?php echo $fila["edad1"] ?></p>
    </td>
    <td>
    <?php echo $fila["sexo1"] ?></p>
    </td>
    </tr>
</table>
</div>










<?php } ?>



</body>
</html>