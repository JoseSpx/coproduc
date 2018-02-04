<?php

    header("Content-type: application/json");

    if(!isset($_POST['user_actual'])){
        return print json_encode("false");
    }

    require_once __DIR__ . '/../model/User.php';
    $userdb = new User();
    $response = $userdb->updateUsername($_POST['user_actual'], $_POST['user_new']);
    if($response == true){
        session_start();
        $_SESSION['user'] = $_POST['user_new'];
        return print json_encode("true");
    }
    else{
        return print json_encode("false");
    }
