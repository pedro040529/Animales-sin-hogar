<?php
'db.php';
class User extends DB{
    private $nombre;
    private $username;



     function userExists($user,$pass){
        $md5pass = md5($pass);


        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username = :user AND password = :pass');

        $query->execute(['user'=>$user,'pass'=>$md5pass]);



        if($query->rowCount()){
            return true;
        }else{
            return false;
        }


         function setUser($user){
            $query = $this->connect()->prepare('SELECT*FROM usuarios WHERE username = :user');
            $query->execute(['user' => $user]);

            foreach($query as $currentUser){
                $this->nombre = $currentUser['nombre'];
                $this->username = $currentUser['username'];
            }
        }

         function getNombre(){
            return $this->nombre;
        }




    }
}






?>