<?php

    header("Content-type: application/json");

    if(!isset($_POST['monto'])){
        return print json_encode("false");
    }

    $id = $_POST['id_order_pay'];
    $cod_op = $_POST['code'];
    $monto = $_POST['monto'];
    $date = strtotime($_POST['date']);
    $time = strtotime($_POST['time']);
    $typeBank = $_POST['bank'];

    if($date){
        $date = date("Y-m-d", $date);
    }
    else{
        $date = null;
    }


    if($time){
        $time = date("H:i", $time);
    }
    else{
        $time = null;
    }

    require_once __DIR__ . '/../model/Order.php';

    $order = new Order();
    $response =  $order->updatePay($id, $cod_op, $date, $time, $typeBank, $monto);

    if($response){
        return print json_encode("true");
    }
    else{
        return print json_encode("false");
    }



