<?php

    header("Content-type: application/json");

    if(!isset($_POST['product_id'])){
        return print json_encode("false");
    }

    if(empty($_POST['cbx_accept_order'])){
        return print json_encode("cbx");
    }


    require_once __DIR__ . '/../model/Order.php';

    $order = new Order();

    session_start();

    $id = $_POST['product_id'];
    $quantity = filter_var(trim($_POST['quantity']), FILTER_SANITIZE_STRING);
    //$date_time = date("Y-m-d H:i:s");

    if(!isset($_POST['dni_client'])){

        $dni = $_SESSION['user_dni'];

        $response = $order->insert($dni, $id, $quantity);
        if($response){
            return print json_encode("true");
        }else{
            return print json_encode("false");
        }

    }
    else{

        $dni = filter_var(trim($_POST['dni_client']), FILTER_SANITIZE_STRING);
        if($order->existsDNI($dni)){

            //$type = $order->getTypeOfClient($dni);

            //if($type == 'l'){
                $order->insert($dni, $id, $quantity);
                return print json_encode("true");
            //}
            /*else{
                $order->updateWithouLogin($dni, $id);
                return print json_encode("true");
            }*/


        }
        else if(!$_POST['name_client'] == ''){

            $name = filter_var(trim($_POST['name_client']), FILTER_SANITIZE_STRING);
            $phone = filter_var(trim($_POST['phone_client']), FILTER_SANITIZE_STRING);

            $band = $order->insertClientNoLogin($dni, $id, $name, $phone, $quantity);

            if($band){
                return print json_encode("true");
            }
            else{
                return print json_encode("false");
            }

        }
        else{
            return print json_encode($id); //dni not exists
        }

        //return print json_encode($dni);

    }


//return print json_encode("false");








