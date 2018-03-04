<?php
    require_once __DIR__ . '/../../../model/Order.php';

    if(empty($id)){
        $id = 1;
    }

    if(is_array($id)){
        $id = $id[0];
    }

    $o = new Order();
    $total_orders = $o->getTotalLastOrders();
    $nro_pages = ceil($total_orders / 8);
    $orders = $o->getLastOrders($id, 8);

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
                <div class="col-11 mx-auto">
                    <a href="/admin/clients_search/" class="btn btn-primary" >Buscar Cliente</a>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-11 mx-auto">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">DNI</th>
                                <th scope="col">Nombres y Apellidos</th>
                                <th scope="col">Producto</th>
                                <th scope="col">Delivery</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Pagos</th>
                                <th scope="col">Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            for ($i = 0; $i < count($orders); $i++):
                        ?>
                            <tr>
                                <td> <?= $orders[$i]['user_data_dni'] ?></td>
                                <td> <?= ($orders[$i]['last_name'] == null || $orders[$i]['last_name'] == '')
                                            ? $orders[$i]['user_name'] . ' ' . $orders[$i]['last_name'] . ' (NR)'
                                            : $orders[$i]['user_name'] . ' ' . $orders[$i]['last_name'] ?></td>
                                <td> <?= $orders[$i]['name_product'] ?></td>
                                <td> <?= ($orders[$i]['delivered'] == 0) ? "No Enviado" : "Enviado"  ?></td>
                                <td> <?php
                                        if($orders[$i]['state'] == 'P'){
                                            echo "Pagado";
                                        }
                                        else if($orders[$i]['state'] == 'D'){
                                            echo "Debe";
                                        }
                                        else{
                                            echo "Anulado";
                                        }
                                    ?>
                                </td>
                                <td>
                                    <a href="/admin/client_orders_pays/<?= $orders[$i]['id'] ?>" class="btn btn-sm btn-warning text-white"> Pagos </a>
                                </td>
                                <td>
                                    <a href="/admin/client_order_edit/<?= $orders[$i]['id'] ?>" class="btn btn-sm btn-danger text-white "> Editar </a>
                                </td>
                            </tr>
                        <?php
                            endfor;
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="row mb-4">
                <div class="col-11 mx-auto d-flex justify-content-center">
                    <nav aria-label="...">
                        <ul class="pagination">

                            <?php if($id == 1): ?>
                                <li class="page-item disabled">
                                    <a class="page-link" href="/admin/orders" tabindex="-1">Anterior</a>
                                </li>
                            <?php else: ?>
                                <li class="page-item">
                                    <a class="page-link" href="/admin/orders<?= $id - 1 ?>" tabindex="-1">Anterior</a>
                                </li>
                            <?php endif; ?>


                            <?php for ($i = 1 ; $i < $nro_pages + 1 ; $i++): ?>
                                <?php if($id == $i): ?>
                                    <li class="page-item active">
                                        <a class="page-link" href="#"><?= $id ?><span class="sr-only">(current)</span></a>
                                    </li>
                                <?php else: ?>
                                    <li class="page-item">
                                        <a class="page-link" href="/admin/orders/<?= $i ?>"><?= $i ?></a>
                                    </li>
                                <?php endif; ?>
                            <?php endfor; ?>

                            <?php if($id == $nro_pages): ?>
                                <li class="page-item disabled">
                                    <a class="page-link" href="/admin/orders" tabindex="-1">Siguiente</a>
                                </li>
                            <?php else: ?>
                                <li class="page-item">
                                    <a class="page-link" href="/admin/orders/<?= $id + 1 ?>" tabindex="-1">Siguiente</a>
                                </li>
                            <?php endif; ?>


                        </ul>
                    </nav>
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