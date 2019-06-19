<?php
    $host = 'localhost';
    $user = 'root'; 
    $password = '';
    $db = 'iniciar';
    $pdo = new PDO("mysql:host=localhost;dbname=iniciar;charset=utf8", "root", "");
    if(!$pdo>0){
        echo "Error en la conexcion";
    }
?>