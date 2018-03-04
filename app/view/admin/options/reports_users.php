<?php
    require_once __DIR__ . '/../../../model/Order.php';

    if(is_array($id)){
        $id = $id[0];
    }

    $order = new Order();
    $orderResultSet = $order->getAllOrdersFromAClient($id);

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

</head>
<body id="top-page">

    <!--- sidebar -->
    <?php require_once __DIR__ . '/../inc/navbar.php'?>

    <!-- Bootstrap row -->
    <div class="row" id="body-row">
        <!-- Sidebar -->
        <?php require_once __DIR__ . '/../inc/sidebar.php' ?>

        <!-- MAIN -->
        <div class="container-fluid div-main">
            <div class="row">
                <div class="col-11 mx-auto mt-4">
                    <h1 style="padding-top: 15px"> Reporte <small class="text-muted"> | Usuarios</small></h1>
                    <p>Usuarios que mas compras han realizado en un rango de fechas</p>
                    <!--a class="btn btn-primary text-white mt-1" href="/admin/product_new">+ NUEVO PRODUCTO</a-->
                </div>
            </div>

            <div class="row mt-1">
                <div class="col-11 mx-auto">
                    <form action="/admin/report_db_users" method="post" id="form_search">
                        <div class="row">
                            <div class="col-2 d-flex flex-column justify-content-center">
                                <b class="text-center">Fecha Inicial : </b>
                            </div>
                            <div class="col-3">
                                <input class="form-control" type="date" title="fecha inicial" name="date_init"
                                       value="<?= strftime('%Y-%m-%d', strtotime(date('Y-m-d'))) ?>" required>
                            </div>
                            <div class="col-2 d-flex flex-column justify-content-center">
                                <b class="text-center">Fecha Final : </b>
                            </div>
                            <div class="col-3">
                                <input class="form-control" type="date" title="fecha inicial" name="date_end"
                                    value="<?= strftime('%Y-%m-%d', strtotime(date('Y-m-d'))) ?>" required>
                            </div>
                            <div class="col-2">
                                <button class="btn-primary form-control" type="submit">Consultar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="row mt-4">
                <div class="col-11 mx-auto ">
                    <div class="row">
                        <div class="col-12">
                            <table class="table" id="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th class="text-center">N°</th>
                                        <th class="text-center">Nombre y Apellidos</th>
                                        <th class="text-center">DNI</th>
                                        <th class="text-center">Tipo</th>
                                        <th class="text-center">Cantidad</th>
                                    </tr>
                                </thead>
                                <tbody class="table-light" id="table_body">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- Main Col END -->

        <!-- pagination -->



    </div><!-- body-row END -->

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/public/libraries/js/sweetAlert2.js"></script>
    <script src="/public/js/admin_report_user.js"></script>
    
</body>
</html>