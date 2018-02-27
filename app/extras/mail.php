<?php

header("Content-type: application/json");

//if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['message'])){

    $to = "jose95sp@outlook.com";
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
    $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);

    $title = "Consulta de Coproduc";
    $message = $message . "\r\n" . 'Mi telefono es ' . $phone . '.';
    $message = $message . "\r\n" . 'Mi correo es ' . $email;

    /*$header = 'Content-type: text/html; charset=utf-8' . "\r\n";
    $header.= 'To: Coproduc <'. $to .'>' . "\r\n";
    $header.= 'From: ' . $name .' <' . $email . '>' . "\r\n";
    */

    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();


    if(mail($to, $title, $message, $headers)){
        return print(json_encode("true"));
    }
    return print(json_encode("false"));
//}
//else{
  //  return print(json_encode("false"));
//}