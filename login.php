<?php
    $alert= '';
    if(!empty($_POST)){
       if(empty($_POST['usuario']) || empty($_POST['clave'])) {
            $alert= 'Ingrese su Usuario y su Clave';
       }
       else{
           require_once "validar.php";
           $user = $_POST['usuario'];
           $pass = $_POST['clave'];
           $resultado = $pdo->query("SELECT * FROM usuario WHERE usuario ='$user' AND clave ='$pass' ");
           $filas = $resultado->fetchAll();
           
           
            if (count($filas) == 0) {
                    $alert = 'El usuario o la clave es inconrrecta';
                   
            }
            else {
                session_start();
                $_SESSION['usuario'] = $data['usuario'];
                $_SESSION['clave'] = $data['clave'];
                header('Location:administrador.php');
            }
       }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Document</title>
</head>
<body>
    <section id="container">
        <form action=" " method="post">
            <h2>Iniciar Sesión</h2>
            <img src="imagenes/fondo19.png" alt="" width="300" height="300">
            <br>
            <input type="text" name="usuario" placeholder="Usuario" >
            <input type="password" name="clave" placeholder="Clave">
            <div class="alert"><?php echo(isset($alert)? $alert:'' )?></div>
            <input type="submit" value="Ingresar">
        </form>
    </section>
</body>
</html>