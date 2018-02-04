<?php

require_once __DIR__ . '/Connection.php';

class User{

    public function existsDNI($dni){
        $conn = Connection::connect();
        $ps = $conn->prepare("select user from account WHERE user_data_dni =  :dni");
        $ps->execute(array(
           ':dni' => $dni
        ));

        return $ps->rowCount() == 1; // false == 0
    }

    public function existsUser($user){
        $conn = Connection::connect();
        $ps = $conn->prepare("select user from account WHERE user =  :user");
        $ps->execute(array(
            ':user' => $user
        ));

        return $ps->rowCount() == 1; // false == 0
    }

    public function insert($dni, $name, $last, $email, $phone1, $phone2, $address, $ref, $depar, $prov, $dist,
                           $urb, $user, $pass){

        $conn = Connection::connect();

        try{
            $conn->beginTransaction();

            $ps = $conn->prepare("insert into ubication(dpto, prov, dist, urb, address, reference, state) 
                VALUES(:dpto, :prov, :dist, :urb, :address, :ref, :state)");
            $ps->execute(array(
                ':dpto' => $depar,
                ':prov' => $prov,
                ':dist' => $dist,
                ':urb' => $urb,
                ':address' => $address,
                ':ref' => $ref,
                ':state' => '0'
            ));

            $ubi = $conn->lastInsertId('id');

            $ps = $conn->prepare("insert into user_data(dni, name, last_name, email, telephone, telephone2, ubication_id) 
                VALUES(:dni, :name, :last, :email, :phone1, :phone2 , :ubi) ");

            $ps->execute(array(
                ':dni' => $dni,
                ':name' => $name,
                ':last' => $last,
                ':email' => $email,
                ':phone1' => $phone1,
                ':phone2' => $phone2,
                ':ubi' => $ubi
            ));

            $ps = $conn->prepare("insert into account(user, pass, user_data_dni) VALUES (:user, :pass, :dni)");
            $ps->execute(array(
               ':user' => $user,
               ':pass' => $pass,
               ':dni' => $dni
            ));
            $conn->commit();
        }catch (Exception $e){
            $conn->rollBack();
        }finally{
            $conn = null;
        }

    }


}