<?php
    if(empty($id)){
        die("error");
    }

    require_once __DIR__ . '/../model/Product.php';

    $product = new Product();

    if($product->delete($id)){
        header("location:/admin/products");
    }
    else{
        die("Error al eliminar el productos");
    }


