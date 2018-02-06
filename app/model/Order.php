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

}