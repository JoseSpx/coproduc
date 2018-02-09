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


    $dni = $_POST['dni'];
    $name = $_POST['name'];
    $lastname = $_POST['lastName'];
    $email = $_POST['email'];
    $phone1 = $_POST['phone1'];
    $phone2 = $_POST['phone2'];
    $address = $_POST['address'];
    $reference = $_POST['reference'];
    $depar = $_POST['departments'];
    $prov = $_POST['provinces'];
    $district = $_POST['districts'];
    $urb = $_POST['urb'];
    $pass = $_POST['pass'];

    $userdb->insert($dni, $name, $lastname, $email, $phone1, $phone2, $address, $reference, $depar, $prov, $district, $urb, $user, $pass);
    $arrayResult['ok'] = 'true';

    session_start();
    $_SESSION['user'] = $user;
    $_SESSION['user_dni'] = $dni;

    return print json_encode($arrayResult);


