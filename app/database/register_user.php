<?php

    header("Content-type: application/json");

    require_once __DIR__ . '/../model/User.php';

    $arrayResult = [
        'dni' => 'false',
        'user' => 'false',
        'ok' => 'false'
    ];
    $band = true;

    //TODO : continue inserting names
    if(!isset($_POST['dni']) || !isset($_POST['name']) || !isset($_POST['lastName'])){
        return print json_encode("false");
    }

    $userdb = new User();

    //DNI
    $dni = $_POST['dni'];
    if($userdb->existsDNI($dni)){
        $arrayResult['dni'] = 'true';
        $band = false;
    }
    else{
        $arrayResult['dni'] = 'false';
    }

    //USER
    $user = $_POST['user'];
    if($userdb->existsUser($user)){
        $arrayResult['user'] = 'true';
        $band = false;
    }
    else{
        $arrayResult['user'] = 'false';
    }


    if(!$band){
        return print json_encode($arrayResult);
    }

    function filter($string){
        return filter_var(strtolower(trim($string)), FILTER_SANITIZE_STRING);
    }


    $dni = $_POST['dni'];
    $name = filter_var(strtolower(trim($_POST['name'])), FILTER_SANITIZE_STRING);
    $lastname = filter($_POST['lastName']);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $phone1 = filter($_POST['phone1']);
    $phone2 = filter($_POST['phone2']);
    $address = filter($_POST['address']);
    $reference = filter($_POST['reference']);
    $depar = $_POST['departments'];
    $prov = $_POST['provinces'];
    $district = $_POST['districts'];
    $urb = filter($_POST['urb']);
    $pass = $_POST['pass'];

    if(!$userdb->existsDNI_userData($dni)){
        $userdb->insert($dni, $name, $lastname, $email, $phone1, $phone2, $address, $reference, $depar, $prov, $district, $urb, $user, $pass);
        $arrayResult['ok'] = 'true';

        session_start();
        $_SESSION['user'] = $user;
        $_SESSION['user_dni'] = $dni;

    }
    else{
        $band = $userdb->insert_client_old($dni, $name, $lastname, $email, $phone1, $phone2, $address, $reference, $depar, $prov, $district, $urb, $user, $pass);
        if($band){
            $arrayResult['ok'] = 'true';
            session_start();
            $_SESSION['user'] = $user;
            $_SESSION['user_dni'] = $dni;
        }
        else{
            $arrayResult['ok'] = 'false';
        }

    }



    return print json_encode($arrayResult);


