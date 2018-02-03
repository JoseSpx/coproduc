<?php

require_once __DIR__ . '/../config/env.php';

class Connection{

    public static function connect(){
        try{
            $conecction = new PDO(DATABASE['driver'] . ':host=' . DATABASE['host'] . ';dbname=' . DATABASE['db'],
                DATABASE['user'],DATABASE['pass']);

            $conecction->exec('SET CHARACTER SET utf8');
            $conecction->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conecction;
        }catch (PDOException $e){
            die("failed connection to database");
        }
        //return true;
    }

    public static function login($user, $pass){
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


    public static function logout(){
        session_start();
        $_SESSION = array();
        session_destroy();
    }

}