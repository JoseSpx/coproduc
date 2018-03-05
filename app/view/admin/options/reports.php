<?php
    require_once __DIR__ . '/../../../model/Product.php';
    $p = new Product();
    $products = $p -> getAllProducts();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>cpanel</title>
    <link rel="shortcut icon" type="image/png" href="/public/img/icon.png"/>
    <meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">

    <link rel="stylesheet" href="/public/libraries/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/admin_main.min.css">
    <link rel="stylesheet" href="/public/css/admin_report_main.min.css">

</head>
<body id="top-page">

    <!--- sidebar -->
    <?php require_once __DIR__ . '/../inc/navbar.php'?>

    <!-- Bootstrap row -->
    <div class="row" id="body-row">
        <!-- Sidebar -->
        <?php require_once __DIR__ . '/../inc/sidebar.php' ?>

        <!-- MAIN -->
        <div class="container-fluid div-main my-5 my-md-0">
            <div class="row">
                <div class="col-11 mx-auto">
                    <div class="row">
                        <div class="card-deck">
                            <div class="col-10 offset-1 offset-md-0 col-md-4">
                                <div class="box">
                                    <div class="card">
                                       <div class="col-10 offset-1 my-3">
                                           <a href="/admin/reports_products">
                                               <img class="card-img-top" src="/public/img/shopping.png" alt="icono de una persona">
                                           </a>
                                       </div>
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Reporte de Productos</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 offset-1 offset-md-0 col-md-4">
                                <div class="box">
                                    <div class="card">
                                        <div class="col-10 offset-1 my-3">
                                            <a href="">
                                                <img class="card-img-top" src="/public/img/person.png" alt="icono de una persona">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Reporte de Clientes</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 offset-1 offset-md-0 col-md-4">
                                <div class="box">
                                    <div class="card">
                                        <div class="col-10 offset-1 my-3">
                                            <a href="">
                                                <img class="card-img-top" src="/public/img/report.png" alt="icono de una persona">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Reporte de Pedidos</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Main Col END -->

    </div><!-- body-row END -->

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>