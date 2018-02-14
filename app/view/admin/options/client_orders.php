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
                    <h1 style="padding-top: 15px"> Sección Pedidos <small class="text-muted"> | Lista de Pedidos</small></h1>
                    <!--a class="btn btn-primary text-white mt-1" href="/admin/product_new">+ NUEVO PRODUCTO</a-->
                </div>
            </div>


            <div class="row">
                <div class="col-11 mx-auto ">
                    <table class="table table-hover table-light">
                        <thead class=" thead-dark">
                        <tr>
                            <th class="text-center" scope="col">#</th>
                            <th class="text-center" scope="col">Producto</th>
                            <th class="text-center" scope="col">Cantidad</th>
                            <th class="text-center" scope="col">Fecha de Pedido</th>
                            <th class="text-center" scope="col">Fecha de Entrega</th>
                            <th class="text-center" scope="col">Estado</th>
                            <th class="text-center" scope="col">Pagos</th>
                            <th class="text-center" scope="col">Editar</th>
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
                                <td class="text-center d-none d-sm-block">
                                    <?php
                                    $confirmation = $orderResultSet[$i]['date_delivery'];
                                    if( $confirmation == '' || $confirmation == null){
                                        echo "Desconocido";
                                    }
                                    else{
                                        echo $orderResultSet[$i]['date_delivery'];
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
                                    <a href="/admin/client_orders_pays/<?= $orderResultSet[$i]['order_id'] ?>" type="submit" class=" btn btn-sm btn-warning text-white ">Ver</a>
                                </td>
                                <td class="text-center">
                                    <a href="/admin/client_order_edit/<?= $orderResultSet[$i]['order_id'] ?>" type="submit" class=" btn btn-sm btn-danger text-white ">Editar</a>
                                </td>
                            </tr>

                        <?php endfor; ?>
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