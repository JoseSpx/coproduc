<?php

    header("Content-type: application/json");

    if(!isset($_POST['user_actual'])){
        return print json_encode("false");
    }

    require_once __DIR__ . '/../model/User.php';
    $userdb = new User();

    $user_actual = filter_var(strtolower(trim($_POST['user_actual'])), FILTER_SANITIZE_STRING);
    $user_new = filter_var(strtolower(trim($_POST['user_new'])), FILTER_SANITIZE_STRING);

    $existsUser = $userdb->existsUser($user_new);

    if($existsUser){
        return print json_encode("false");
    }

    $response = $userdb->updateUsername($user_actual, $user_new);
    if($response){
        session_start();
        $_SESSION['user'] = $_POST['user_new'];
        return print json_encode("true");
    }
    else{
        return print json_encode("false");
    }
