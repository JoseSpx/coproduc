<?php
    header("Content-type: application/json");

    if(!isset($_POST['user']) || !isset($_POST['pass'])){
        return print json_encode("false");
    }




    return print json_encode("true");