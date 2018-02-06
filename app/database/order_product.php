<?php

    header("Content-type: application/json");

    if(!isset($_POST['product_id'])){
        return print json_encode("false");
    }

    if(empty($_POST['cbx_accept_order'])){
        return print json_encode("cbx");
    }


    session_start();

    $id = $_POST['product_id'];
    $dni = $_SESSION['user_dni'];
    $quantity = $_POST['quantity'];
    //$date_time = date("Y-m-d H:i:s");


    require_once __DIR__ . '/../model/Order.php';

    $order = new Order();
    $response = $order->insert($dni, $id, $quantity);
    if($response){
        return print json_encode("true");
    }else{
        return print json_encode("false");
    }


