<?php

class Bank{

    public function getAll(){
        $conn = Connection::connect();
        $ps = $conn->prepare("select id, name, code from banks");
        $ps->execute();
        return $ps->fetchAll(PDO::FETCH_ASSOC);
    }

}