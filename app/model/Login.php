<?php

require_once  __DIR__ . '/Connection.php';

class Login{

    public static function connect($user, $pass){
        $query = "select user from account WHERE (user = :user OR user_data_dni = :user) AND pass = :pass ";
        $conecction = Connection::connect();
        $ps = $conecction->prepare($query);
        $ps->execute(array(
            ":user" => $user,
            ":pass" => $pass
        ));

        $count = $ps->rowCount();

        if($count == 1){
            session_start();
            $_SESSION['user'] = $user;
        }

        return ($count == 1);
    }


    public static function exit(){
        session_start();
        session_destroy();
        $_SESSION['user'] = null;
    }

}