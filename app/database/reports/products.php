<?php

    header("Content-type: application/json");

    if(!isset($_POST['date_init']) or !isset($_POST['date_end'])){
        return print json_encode("false");
    }

    $date_init = $_POST['date_init'];
    $date_end = $_POST['date_end'];

    require __DIR__ . '/../../model/Product.php';

    $products = new Product();
    $rs = $products->getMostSelledProducts($date_init, $date_end);
    if($rs != null){
        return print json_encode($rs);
    }
    else{
        return print json_encode("false");
    }
