<?php
    require_once __DIR__ . '/../../../model/Order.php';

    if(is_array($id)){
        $id = $id[0];
    }

    $order = new Order();
    $orderResultSet = $order->getAllFinancialfromAOrder($id);

    $name_product = $order->getNameOfTheProduct($id);

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
                    <h1 style="padding-top: 15px"> Sección Pagos del Pedido <small class="text-muted"> | Lista de Pedidos</small></h1>
                    <a class="btn btn-primary text-white mt-1" href="/admin/client_order_pay_new/<?= $id ?>">+ Agregar Pago</a>
                </div>
            </div>


            <div class="row mt-3">
                <div class="col-11 mx-auto ">
                    <table class="table table-hover table-light">
                        <thead class=" thead-dark">
                        <tr>
                            <th class="text-center" scope="col">#</th>
                            <th class="text-center" scope="col">Cod. Operación</th>
                            <th class="text-center" scope="col">Fecha</th>
                            <th class="text-center" scope="col">Hora</th>
                            <th class="text-center" scope="col">Entidad</th>
                            <th class="text-center" scope="col">Monto</th>
                            <th class="text-center" scope="col">Editar</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php if(count($orderResultSet) == 0): ?>

                            <tr class="alert-dark">
                                <td colspan="7">
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
                                    <td class="text-center">
                                        <a href="/admin/client_order_pay_edit/<?= $orderResultSet[$i]['id'] ?>" type="submit" class=" btn btn-sm btn-danger text-white ">Editar</a>
                                    </td>
                                </tr>
                            <?php endfor; ?>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div><!-- Main Col END -->

        <!-- pagination -->



    </div><!-- body-row END -->

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/public/libraries/js/sweetAlert2.js"></script>
    <script src="/public/js/admin_delete_product.min.js"></script>
    
</body>
</html>