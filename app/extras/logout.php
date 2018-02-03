<?php

    require_once __DIR__ . '/../model/Connection.php';
    Connection::logout();

    header("location: / ");

