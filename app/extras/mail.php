<?php

header("Content-type: application/json");

if(!empty($_POST['name'])){

    $to = "jose95sp@outlook.com";
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
    $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);

    $title = "Consulta de Coproduc";
    $message = $message . "\r\n" . "Mi telefono es : " . $phone;
    $header = 'Content-type: text/html; charset=utf-8' . "\r\n";
    $header.= 'To: Coproduc <'. $to .'>' . "\r\n";
    $header.= 'From: ' . $name .' <' . $email . '>' . "\r\n";

    mail($to, $title, $message, $header);

    return print(json_encode("true"));
}
else{
    return print(json_encode("false"));
}