<?php

require_once __DIR__ . '/Connection.php';

class Admin{

    public function login($user, $pass){
        $conn = Connection::connect();
        $ps = $conn->prepare("select user from admin WHERE user = :user AND pass = :pass");
        $ps->execute(array(
           ':user' => $user,
           ':pass' => $pass
        ));

        return $ps->rowCount() == 1;
    }

    public function logout(){
        session_start();
        $_SESSION = array();
        session_destroy();
    }

}