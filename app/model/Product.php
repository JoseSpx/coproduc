<?php

require_once __DIR__ . '/Connection.php';

class Product{

    public function getAllProducts(){
        $conn = Connection::connect();
        $ps = $conn->prepare("SELECT id, name from product WHERE eliminated = '0'");
        $ps->execute();
        return $ps->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllProductsVisible(){
        $conn = Connection::connect();
        $ps = $conn->prepare("SELECT id, name, image, description, price from product WHERE state = '1' and eliminated = '0'");
        $ps->execute();
        return $ps->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get($id){
        $conn = Connection::connect();
        $ps = $conn->prepare("SELECT id, name, price, image, description, state from product WHERE id = :id");
        $ps->execute(array(
            ':id' => $id
        ));
        return $ps->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete($id){
        $conn = Connection::connect();
        $ps = $conn->prepare("update product set eliminated = '1' WHERE id = :id");
        return $ps->execute(array(
            ':id' => $id
        ));
    }

    public function insert($name, $price, $image, $description, $state){
        $conn = Connection::connect();
        $ps = $conn->prepare("insert into product(name, price, image, description, state)
            VALUES (:name, :price, :image, :description, :state)");
        return $ps->execute(array(
           ':name' => $name,
           ':price' => $price,
           ':image' => $image,
           ':description' => $description,
           ':state' => $state
        ));
    }


    public function update($id, $name, $price, $image, $description , $state){
        $conn = Connection::connect();
        $ps = $conn->prepare("update product set name = :name, price = :price, image = :image,
            description = :description, state = :state WHERE id = :id");
        return $ps->execute(array(
            ':name' => $name,
            ':price' => $price,
            ':image' => $image,
            ':description' => $description,
            ':state' => $state,
            ':id' => $id
        ));
    }


}