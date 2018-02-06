<?php
    header("Content-type: application/json");

    if(!isset($_POST['user']) || !isset($_POST['pass'])){
        return print json_encode("false");
    }

    require_once __DIR__ . '/../model/Admin.php';

    $user = filter_var(trim($_POST['user']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

    $admin = new Admin();
    $response =  $admin->login($user, $pass);

    if($response){

        session_start();
        $_SESSION['admin'] = $admin;

        return print json_encode("true");
    }
    else{
        return print json_encode("false");
    }

