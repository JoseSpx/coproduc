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

    public function updateUsername($userActual, $userNew){
        $conn = Connection::connect();
        $ps = $conn->prepare("UPDATE account set user = :userNew WHERE user = :userActual");
        return $ps->execute(array(
           ':userNew' => $userNew,
           ':userActual' => $userActual
        ));
    }

    public function updatePassword($user, $passNew){
        $conn = Connection::connect();
        $ps =  $conn->prepare("UPDATE account set pass = :pass_new WHERE user = :user");
        return $ps->execute(array(
            ':user' => $user,
            ':pass_new' => $passNew
        ));
    }

    public function updateUserData($dni_old,$dni_new, $name, $lastName, $email, $phone1, $phone2,$id_ubication, $dpto, $prov, $dist,
                                   $urb, $address,
                                    $reference){

        $conn = Connection::connect();

        try{
            $conn->beginTransaction();

            $ps = $conn->prepare("update ubication set dpto = :dpto, prov = :prov, dist = :dist, urb = :urb, address = :address,
                                          reference = :reference WHERE id = :id");

            $ps->execute(array(
                ':dpto' => $dpto,
                ':prov' => $prov,
                ':dist' => $dist,
                ':urb' => $urb,
                ':address' => $address,
                ':reference' => $reference,
                ':id' => $id_ubication
            ));

            $ps =  $conn->prepare("update user_data set dni = :dni_new, name = :name, last_name = :last, email = :email, 
                                            telephone = :phone1,
                                            telephone2 = :phone2 WHERE dni = :dni_old");

            $ps->execute(array(
                ':dni_new' => $dni_new,
                ':name' => $name,
                ':last' => $lastName,
                ':email' => $email,
                ':phone1' => $phone1,
                ':phone2' => $phone2,
                ':dni_old' => $dni_old
            ));


            $conn->commit();
        } catch (Exception $e){
            $conn->rollBack();
        } finally{
            $conn = null;
        }

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

    public function getUserData($user){
        $conn = Connection::connect();
        $ps = $conn->prepare("SELECT user, pass, dni, name, last_name, email, telephone, telephone2, dpto,
            prov, dist, urb, address, reference, state, u.ubication_id AS id_ubication FROM account
            INNER JOIN user_data u ON account.user_data_dni = u.dni
            INNER JOIN ubication u2 ON u.ubication_id = u2.id
            WHERE user = :user ");
        $ps->execute(array(
           ':user' => $user
        ));

        $rs = $ps->fetchAll(PDO::FETCH_ASSOC);
        return $rs ;
    }

}