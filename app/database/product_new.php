<?php

    header("Content-type: application/json");

    if(!isset($_POST['name'])){
        return print json_encode("false");
    }

    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $state = ($_POST['state'] == "Visible") ? '1' : '0';
    $price = filter_var(trim($_POST['price']), FILTER_SANITIZE_STRING);
    $description = filter_var(trim($_POST['description']), FILTER_SANITIZE_STRING);;
    $img = time();

    if($_FILES['img']['size'] > 512000){
        return print json_encode("img-size");
    }

    $ext = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
    if($ext == 'png' || $ext == 'jpg' || $ext == 'PNG' || $ext == 'JPG'){
        $img = $img . '.' . $ext;
        move_uploaded_file($_FILES['img']['tmp_name'],
            __DIR__ . '/../../public/img/products/'. $img);
    }
    else{
        return print(json_encode("img-ext"));
    }

    require_once __DIR__ . '/../model/Product.php';

    $product = new Product();

    $response = $product->insert($name, $price, $img, $description, $state);

    if($response){
        return print json_encode("true");
    }
    else{
        return print json_encode("false");
    }



