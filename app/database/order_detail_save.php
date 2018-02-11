<?php

    header("Content-type: application/json");

    if(!isset($_POST['code'])){
        return print json_encode("false");
    }


    $order_id = $_POST['id_order'];
    $cod_op = filter_var(trim($_POST['code']), FILTER_SANITIZE_STRING);
    $monto = filter_var(trim($_POST['monto']), FILTER_SANITIZE_STRING);
    $typeBank = $_POST['bank'];
    $date = strtotime($_POST['date']);
    $time = strtotime($_POST['time']);

    if($date != false){
        $date = date("Y-m-d", $date);
    }
    else{
        return print json_encode("false");
    }

    if($time != false){
        $time = date("H:i", $time);
    }
    else{
        $time = null;
    }

    require_once __DIR__ . '/../model/Order.php';

    $order = new Order();
    $band = $order->insert_financial_pay($cod_op, $monto, $date, $time, $typeBank, $order_id);

    if($band){
        return print json_encode("true");
    }
    else{
        return print json_encode("false");
    }





