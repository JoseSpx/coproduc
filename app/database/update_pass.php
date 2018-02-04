<?php

    header("Content-type: application/json");

    if(!isset($_POST['pass'])){
        return print json_encode("false");
    }

    require_once __DIR__ . '/../model/User.php';

    $userdb = new User();

    session_start();
    $user = $_SESSION['user'];
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
    if($userdb->updatePassword($user, $pass)){
        return print json_encode("true");
    }
    else{
        return print json_encode("false");
    }

