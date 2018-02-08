<?php

    header("Content-type: application/json");

    if(!isset($_POST['name']) || !isset($_POST['lastName'])){
        return print json_encode("false");
    }

    require_once __DIR__ . '/../model/User.php';

    $user = new User();

    $dni_old = $_POST['dni_old'];
    $dni_new = $_POST['dni_new'];

    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $lastName = filter_var(trim($_POST['lastName']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $phone1 = filter_var(trim($_POST['phone1']), FILTER_SANITIZE_STRING);
    $phone2 = filter_var(trim($_POST['phone2']), FILTER_SANITIZE_STRING);
    $id_ubication = filter_var(trim($_POST['id_ubication']), FILTER_SANITIZE_STRING);
    $urb = filter_var(trim($_POST['urb']), FILTER_SANITIZE_STRING);
    $address = filter_var(trim($_POST['address']), FILTER_SANITIZE_STRING);
    $reference = filter_var(trim($_POST['reference']), FILTER_SANITIZE_STRING);

    if($dni_old != $dni_new){
        if($user->existsDNI($_POST['dni_new'])){
            return print json_encode("dni_exists");
        }
    }

    $user->updateUserData($dni_old, $dni_new, $name, $lastName, $email,
                            $phone1, $phone2, $id_ubication, $_POST['departments'], $_POST['provinces'],
                            $_POST['districts'],$urb, $address, $reference);

    return print json_encode("true");



