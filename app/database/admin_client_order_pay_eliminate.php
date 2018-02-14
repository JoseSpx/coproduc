<?php

    if(empty($id)){
        header("location: /");
    }

    if(is_array($id)){
        $id = $id[0];
    }

    require_once __DIR__ . '/../model/Order.php';

    $order = new Order();
    $response =  $order->deletePay($id);

    if($response){
        header("location: /admin/clients/1");
    }
    else{
        header("location: /admin/client_order_pay_edit/" . $id);
    }