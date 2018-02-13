<?php

    //header("Content-type: application/json");

    if(!isset($id)){
        header("location: /admin");
    }

    if(is_array($id)){
        $id = $id[0];
    }

    $dni = $id;

    require_once __DIR__ . '/../model/User.php';

    $new_dni = $dni . "e";

    $user = new User();
    $response =  $user->eliminate_logic($dni, $new_dni);

    if($response){
        header("location: /admin/clients/1");
    }
    else{
        header("location: /admin/clients/1");
    }



