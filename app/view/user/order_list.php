<?php
    require_once __DIR__ . '/../../model/Order.php';
    session_start();

    if(!isset($_SESSION['user'])){
        header("location:/");
    }

    if(empty($id)){
        header("location:/");
    }

    if(is_array($id)){
        $id = $id[0];
    }


    $order = new Order();
    $orderResultSet = $order->getAllFinancialfromAOrder($id);

    $name_product = $order->getNameOfTheProduct($id);

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
                <a class="nav-link link-nav" href="/user/order"> Lista de Pedidos </a>
            </li>
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

    <!--div class="row pt-4 pb-4">
        <div class="col-10 offset-1 offset-sm-0 col-sm-12 title d-flex justify-content-center text-uppercase">
            Lista de Pagos
        </div>
    </div-->

    <div class="row pt-4 pb-4 d-flex justify-content-center">
        <div class="col-auto text-uppercase title">
            Lista de Pagos
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-12 ">
            <span class="text-dark">Los datos son referidos a pagos realizados en alguna entidad bancaria.</span>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-12 ">
            Nombre del producto : <span class="font-weight-bold"><?= $name_product ?></span>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-4 col-md-3 col-lg-2">
            <form class="form_order_detail" action="/user/order_detail" method="post">
                <input type="hidden" name="id_order" value="<?= $id ?>">
                <button type="submit" class="form-control btn btn-sm color-btn ">Agregar Pago</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12 ">
            <table class="table table-hover table-sm">
                <thead class="color-primary">
                    <tr>
                        <th class="text-center d-none d-sm-block" scope="col">#</th>
                        <th class="text-center" scope="col">Cod. Operación</th>
                        <th class="text-center" scope="col">Fecha</th>
                        <th class="text-center d-none d-sm-block"" scope="col">Hora</th>
                        <th class="text-center" scope="col">Entidad</th>
                        <th class="text-center" scope="col">Monto</th>

                    </tr>
                </thead>
                <tbody>

                    <?php if(count($orderResultSet) == 0): ?>

                        <tr class="alert-dark">
                            <td colspan="6">
                                No hay ninguna orden de Pago
                            </td>
                        </tr>

                    <?php else: ?>
                        <?php for ($i = 0; $i < count($orderResultSet); $i++): ?>
                            <input type="hidden" value="<?= $orderResultSet[$i]['id'] ?>" title="code" name="cod_financial">
                            <tr>
                                <td class="text-center d-none d-sm-block" scope="row"><?= $i + 1?></td>
                                <td class="text-center">
                                    <?= $orderResultSet[$i]['cod_op'] ?>
                                </td>
                                <td class="text-center">
                                    <?= $orderResultSet[$i]['date'] ?>
                                </td>
                                <td class="text-center d-none d-sm-block">
                                    <?= ($orderResultSet[$i]['time'] != null) ? $orderResultSet[$i]['time'] : "No asignado" ?>
                                </td>
                                <td class="text-center">
                                    <?= $orderResultSet[$i]['entity'] ?>
                                </td>
                                <td class="text-center">
                                    <?= $orderResultSet[$i]['monto'] ?>
                                </td>
                            </tr>
                        <?php endfor; ?>
                    <?php endif; ?>
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