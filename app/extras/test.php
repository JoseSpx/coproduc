<?php

header("Content-type: application/json");
require_once __DIR__ . '/Connection.php';

if(!isset($_POST['user'])){
    return print json_encode($_POST['pass']);
}

$conn = Connection::connect();

return print json_encode($_POST['user']);