<?php

    require_once __DIR__ . '/../model/Admin.php';
    $admin = new Admin();
    $admin->logout();

    header('location: /admin');
