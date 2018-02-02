<?php

    header('Content-type: application/json');

    if(isset($_POST['user']) && isset($_POST['pass'])){
        $user = filter_var(trim($_POST['user']), FILTER_SANITIZE_STRING);
        $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

        require_once __DIR__ . '/../model/Login.php';

        if(Login::connect($user,$pass)){
            return print json_encode("true");
        }
        else{
            return print json_encode("false");
        }
    }
    else{
        return print json_encode("false");
    }


