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
<form method="post" action="loquesea.php"
onSubmit="return enviado()">
<div><table width="100%" cellspacing="0" cellpadding="0">
<tr>
<td width="12%">Nombre del dueño: </td>
<td width="88%"><input type="text" name="name" size="20"></td>
</tr>
<tr>
<td width="12%">Mascota: </td>
<td width="88%"><input type="text" name="mascota    " size="20"></td>
</tr>
</table>
<input type="reset" value="Esterilizar" onclick="pulsar()">
</form>



<?php

#Fase 2: Iterar los registros
?>

<?php foreach($pdo->query("SELECT*FROM esterilizar ORDER BY id DESC") as $fila) { ?>
<div id="main-container">
<table>
<thead>
    <tr>
        <th>Nombres</th><th>Apellidos</th><th>Mascota</th><th>Telefono</th><th>Descripciones</th><th>Edad</th><th>Sexo</th>
    </tr>
</thead>
<tr>
    <td>
    <p><?php echo $fila["nombres"] ?></p>
    </td>
    <td>
    <p><?php echo $fila["apellidos"] ?></p>
    </td>
    <td>
    <p><?php echo $fila["mascota"] ?></p>
    </td>
    <td>
    <p><?php echo $fila["telefono"] ?></p>
    </td>
    <td>
    <p><?php echo $fila["descripciones"] ?></p>
    </td>
    <td>
    <?php echo $fila["edad"] ?></p>
    </td>
    <td>
    <?php echo $fila["sexo"] ?></p>
    </td>
    </tr>
</table>
</div>










<?php } ?>



</body>
</html>