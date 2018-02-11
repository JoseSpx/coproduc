<?php

require_once __DIR__ .'/Connection.php';

class Order {

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


    public function updateWithouLogin($dni, $product, $name, $phone, $quantity){
        $conn = Connection::connect();

        try{
            $conn->beginTransaction();

            $ps = $conn->prepare("update user_data (name, telephone) VALUES (:name, :phone)");

            $ps->execute(array(
                ':name' => $name,
                ':phone' => $phone
            ));


            $ps = $conn->prepare("insert into `order`(user_data_dni, product_id, quantity, date_order) 
            VALUES(:dni, :product, :quantity, now()) ");
            $ps->execute(array(
                ':dni' => $dni,
                ':product' => $product,
                ':quantity' => $quantity
            ));

            $conn->commit();

            return true;


        }catch (Exception $e){
            $conn->rollBack();
            return false;
        } finally{
            $conn = null;
        }



    }

    public function insertClientNoLogin($dni, $product, $name, $phone, $quantity){

        $conn = Connection::connect();

        try{
            $conn->beginTransaction();

            $ps = $conn->prepare("insert into ubication(dpto, prov, dist, urb, address, reference, state) 
                                              VALUES ('desconocido','desconocido','desconocido','desconocido','desconocido',
                                                        'desconocido','0')");

            $ps->execute();

            $ubication_id = $conn->lastInsertId();

            $ps = $conn->prepare("insert into user_data (dni, name, telephone, type, ubication_id)
                                                VALUES (:dni, :name, :phone,'n', $ubication_id)");

            $ps->execute(array(
               ':dni' => $dni,
               ':name' => $name,
               ':phone' => $phone
            ));


            $ps = $conn->prepare("insert into `order`(user_data_dni, product_id, quantity, date_order) 
            VALUES(:dni, :product, :quantity, now()) ");
            $ps->execute(array(
                ':dni' => $dni,
                ':product' => $product,
                ':quantity' => $quantity
            ));

            $conn->commit();

            return true;


        }catch (Exception $e){
            $conn->rollBack();
            return false;
        } finally{
            $conn = null;
        }


    }

    public function getAllOrdersFromAClient($dni){
        $conn = Connection::connect();
        $ps = $conn->prepare("select `order`.id AS order_id,  p.name AS product ,quantity, date_order, date_confirmation, `order`.state from `order` 
            INNER JOIN product p ON `order`.product_id = p.id WHERE user_data_dni = :dni ORDER BY `order`.id DESC LIMIT 100");

        $ps->execute(array(
           ':dni' => $dni
        ));

        return $ps->fetchAll(PDO::FETCH_ASSOC);

    }

    public function existsDNI($dni){
        $conn = Connection::connect();
        $ps = $conn->prepare("select name from user_data WHERE dni =  :dni LIMIT 1");
        $ps->execute(array(
            ':dni' => $dni
        ));

        return $ps->rowCount() == 1; // false == 0
    }

    public function getTypeOfClient($dni){
        $conn = Connection::connect();
        $ps = $conn->prepare("select type from user_data WHERE dni = :dni");
        $ps->execute(array(
           ':dni' => $dni
        ));
        return $ps->fetchColumn(0);
    }

    public function getAllFinancialfromAOrder($id_order){
        $conn = Connection::connect();
        $ps = $conn->prepare("select id,cod_op, monto, date, time, entity from financial_entity WHERE order_id = :order");
        $ps->execute(array(
           ':order' => $id_order
        ));
        return $ps->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getNameOfTheProduct($id_order){
        $conn = Connection::connect();
        $ps = $conn->prepare("select name from `order` INNER JOIN product p ON `order`.product_id = p.id
                                          WHERE `order`.id = :id_order LIMIT 1");
        $ps->execute(array(
           ':id_order' => $id_order
        ));

        return $ps->fetchColumn(0);
    }

    public function insert_financial_pay($cod_op, $monto, $date, $time, $entity, $order_id){
        $conn = Connection::connect();
        $ps = $conn->prepare("insert into financial_entity(cod_op, order_id, date, time, entity, monto) 
                                          VALUES (:cod_op, :order_id, :dat, :tim, :entity, :monto)");

        return $ps->execute(array(
            ':cod_op' => $cod_op,
            ':order_id' => $order_id,
            ':dat' => $date,
            ':tim' => $time,
            ':entity' => $entity,
            ':monto' => $monto

        ));
        //return true;
    }

}