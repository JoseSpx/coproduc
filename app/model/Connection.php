<?php

require_once __DIR__ . '/../config/env.php';

class Connection{

    public static function connect(){
        try{
            $conecction = new PDO(DATABASE['driver'] . ':host=' . DATABASE['host'] . ';dbname=' . DATABASE['db'],
                DATABASE['user'],DATABASE['pass']);

            $conecction->exec('SET CHARACTER SET utf8');
            $conecction->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conecction;
        }catch (PDOException $e){
            die("failed connection to database");
        }
        //return true;

    }


}