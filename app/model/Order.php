<?php

require_once __DIR__ .'/Connection.php';

class Order extends Connection {

    public function insert($dni, $product, $quantity){
        $conn = Connection::connect();
        $ps = $conn->prepare("insert into `order`(user_data_dni, product_id, quantity, date_order) 
            VALUES(:dni, :product, :quantity, now()) ");
        return $ps->execute(array(
            ':dni' => $dni,
            ':product' => $product,
            ':quantity' => $quantity
        ));
    }

    public function getAllOrdersFromAClient($dni){
        $conn = Connection::connect();
        $ps = $conn->prepare("select p.name AS product ,quantity, date_order, date_confirmation, `order`.state from `order` 
            INNER JOIN product p ON `order`.product_id = p.id WHERE user_data_dni = :dni ORDER BY `order`.id DESC LIMIT 100");

        $ps->execute(array(
           ':dni' => $dni
        ));

        return $ps->fetchAll(PDO::FETCH_ASSOC);

    }

}