<?php
    require_once __DIR__ . '/../../model/Order.php';
    session_start();

    if(!isset($_SESSION['user'])){
        header("location:/");
    }

    $order = new Order();
    $orderResultSet = $order->getAllOrdersFromAClient($_SESSION['user_dni']);
?>

<!DOCTYPE html>
<html lang="es" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <title>Coproduc</title>

    <link rel="shortcut icon" type="image/png" href="/public/img/icon.png"/>

    <!-- Open Graph -->
    <meta property="og:title" content="Coproduc : Venta de productos 100% naturales " />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.coproduc.com" />
    <meta property="og:image" content="" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:alt" content="Logo de Coproduc" />
    <meta property="og:description" content="Coproduc : Venta de productos 100% naturales">

    <meta name="author" content="Coproduc">
    <meta name="classification" content="all">
    <meta name="description" content="Coproduc es una empresa que se dedica a la venta de productos 100% naturales con la más pura calidad
        de ingredientes">
    <meta name="keywords" content="coproduc, queso, leche, manjar, productos naturales">

    <link rel="stylesheet" href="/public/libraries/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/public/libraries/font/css/icon.css">
    <link rel="stylesheet" href="/public/css/coproduc_user_order.min.css">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

</head>
<body>

<!-- navbar -->
<nav id="navbar" class="navbar navbar-expand-md navbar-light bg-white fixed-top position-fixed">
    <a class="navbar-brand" href="/">
        <img src="/public/img/logo.jpg" class="d-inline-block align-top " alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav  ml-auto d-flex align-items-center">
            <li class="nav-item ml-2">
                <a class="nav-link link-nav" href="/user/config"> Configuración </a>
            </li>
            <li class="nav-item ml-2">
                <a class="nav-link link-nav" href="/">Página Principal</a>
            </li>
        </ul>
    </div>
</nav>

<div class="margin">
</div>

<div class="container">

    <div class="row pt-4 pb-4">
        <div class="col-12 title d-flex justify-content-center text-uppercase">
            Lista de Pedidos
        </div>
    </div>

    <div class="row">
        <div class="col-12 ">
            <table class="table table-hover table-sm">
                <thead class="color-primary">
                    <tr>
                        <th class="text-center" scope="col">#</th>
                        <th class="text-center" scope="col">Producto</th>
                        <th class="text-center" scope="col">Cantidad</th>
                        <th class="text-center" scope="col">Fecha de Pedido</th>
                        <th class="text-center" scope="col">Fecha de Entrega</th>
                        <th class="text-center" scope="col">Estado</th>
                        <th class="text-center" scope="col">Pagos</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < count($orderResultSet); $i++): ?>
                        <tr>
                            <th class="text-center" scope="row"><?= $i + 1?></th>
                            <td class="text-center">
                                <?= $orderResultSet[$i]['product'] ?>
                            </td>
                            <td class="text-center">
                                <?= $orderResultSet[$i]['quantity'] ?>
                            </td>
                            <td class="text-center">
                                <?= $orderResultSet[$i]['date_order'] ?>
                            </td>
                            <td class="text-center">
                                <?php
                                $confirmation = $orderResultSet[$i]['date_confirmation'];
                                if( $confirmation == '' || $confirmation == null){
                                    echo "Desconocido";
                                }
                                else{
                                    echo $orderResultSet[$i]['state'];
                                }
                                ?>
                            </td>
                            <td class="text-center">
                                <?php
                                    $state= $orderResultSet[$i]['state'];
                                    if($state == 'P'){
                                        echo "Pagado";
                                    }
                                    elseif ($state == 'D'){
                                        echo "Debe";
                                    }
                                    else{
                                        echo "Anulado";
                                    }
                                ?>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-primary color-primary btn_pay">Ver</button>
                            </td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>


<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/public/libraries/js/sweetAlert2.js"></script>
</body>
</html>