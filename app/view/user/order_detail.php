<?php
require_once __DIR__ . '/../../model/Order.php';
session_start();

if(!isset($_SESSION['user'])){
    header("location:/");
}

?>

<!DOCTYPE html>
<html lang="es" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <title>Coproduc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="/public/css/coproduc_user_order_detail.css">

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

    <div class="row pt-4 pb-4 d-flex justify-content-center">
        <div class="col-auto text-uppercase title">
            Pago del Pedido
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-10 offset-1 col-lg-6 offset-lg-3 ">

            <form id="form_pay" method="post" action="/user/order_detail_save">

                <input type="hidden" id="id_order" name="id_order" value="<?= $_POST['id_order'] ?>">

                <div class="form-group">
                    <label for="inputCode">Código de Operación</label>
                    <input name="code" type="text" class="form-control" id="inputCode" placeholder="Código" maxlength="20" required>
                    <small id="code-error" class="monto-error text-danger d-none">No se acepta letras u otro carácteres</small>
                </div>

                <div class="form-group ">
                    <label for="inputMonto">Monto</label>
                    <input name="monto" type="text" class="form-control" id="inputMonto" placeholder="Código" maxlength="20" required>
                    <small id="monto-error" class="monto-error text-danger d-none">No se acepta letras u otro carácteres (excepto el punto) .</small>
                </div>


                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="inputDate">Fecha</label>
                            <input name="date" type="date" class="form-control" id="inputDate" placeholder="" required>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="inputTime">Hora</label>
                            <input name="time" type="time" class="form-control" id="inputTime" placeholder="Hora">
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <label for="bank">Tipo de Banco</label>
                    <select class="form-control" name="bank" id="bank" required>
                        <option disabled value="" selected >Elegir</option>
                        <option value="Banco Central del Perú">Banco Central del Perú</option>
                        <option value="Interbank">Interbank</option>
                    </select>
                </div>

                <div class="custom-control custom-checkbox">
                    <input name="cbx" type="checkbox" class="custom-control-input" id="inputCbx">
                    <label class="custom-control-label" for="inputCbx">Datos ingresados verificados</label>
                    <small id="cbx-error" class="monto-error text-danger d-none">Confirme</small>
                </div>


                <div class="row d-flex justify-content-between mt-4">

                    <div class="col-6">
                        <button type="submit" class="form-control btn btn-primary btn_save">Guardar</button>
                    </div>

                    <div class="col-6">
                        <a href="/user/order_list/<?= $_POST['id_order'] ?>" class="form-control btn btn-primary btn_cancel">Cancelar</a>
                    </div>

                </div>

            </form>


        </div>
    </div>

</div>


<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/public/libraries/js/sweetAlert2.js"></script>
<script src="/public/js/validations.min.js"></script>
<script src="/public/js/user_order_detail.min.js"></script>
</body>
</html>