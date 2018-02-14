<?php

    header("Content-type: application/json");

    if(!isset($_POST['quantity'])){
        return print json_encode("false");
    }


    require_once __DIR__ . '/../model/Order.php';

    $quantity = filter_var($_POST['quantity'], FILTER_SANITIZE_STRING);
    $price_unit = filter_var($_POST['price_unit'], FILTER_SANITIZE_STRING);
    $date_confirmation = strtotime($_POST['date_confirmation']);
    $date_delivery = strtotime($_POST['date_delivery']);
    $state = $_POST['state_order'];
    $delivery = $_POST['state_delivery'];
    $id_order = $_POST['id_order'];

    if($date_confirmation != false){
        $date_confirmation = date("Y-m-d", $date_confirmation);
    }
    else{
        $date_confirmation = null;
    }

    if($date_delivery != false){
        $date_delivery = date("Y-m-d", $date_delivery);
    }
    else{
        $date_delivery = null;
    }


    $order = new Order();
    $response =  $order->update_order($id_order, $quantity, $date_delivery, $date_confirmation, $price_unit, $state, $delivery);

    if($response){
        return print json_encode("true");
    }
    else{
        return print json_encode("false");
    }





















