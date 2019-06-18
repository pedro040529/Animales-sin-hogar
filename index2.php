<?php

include_once 'includes/user.php';
include_once 'includes/user_session.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    $user->setUser($userSession->getCurrentUser());
    include_once 'vistas/home.php';
    
}else if(isset($_POST['username']) && isset($_POST['password'])){
    


    $userForm = $_POST['username'];
    $passForm = $_POST['password'];
    if($user->userExists($username, $passForm)){
        
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
        include_once 'vistas/home.php';
    }else{
        echo "nombre de usuario y/o password incorrecto";
        include_once 'vistas/login.php';
    }
}else{
    include_once 'vistas/login.php';
}











?>