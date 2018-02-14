<?php
    require_once __DIR__ . '/../../../model/Order.php';

    if(is_array($id)){
        $id = $id[0];
    }

    $order = new Order();
    $orderResultSet = $order->getOrderFormClient($id);
    $orderResultSet = $orderResultSet[0];

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
                    <h1 class="pt-4"> Editar Pedido</h1>
                    <!--a class="btn btn-primary text-white mt-1" href="/admin/product_new">+ Agregar Pago</a-->
                </div>
            </div>

            <div class="row mt-1">
                <div class="col-11 mx-auto">
                    <p class=" h6"><span class="font-weight-bold">Producto :</span> <span>queso</span></p>
                    <p class=" h6"><span class="font-weight-bold">Nombre del cliente : </span><span><?= $orderResultSet['name'] . ' ' . $orderResultSet['last_name'] ?></span></p>
                </div>
            </div>

            <form id="form_order_update" action="/admin/client_order_update" method="post">
                <input name="id_order" type="hidden" value="<?= $id ?>">
            <div class="row mt-1">
                <div class="col-11 mx-auto">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="inputQuantity">Cantidad</label>
                                <input name="quantity" type="text" class="form-control" id="inputQuantity" placeholder="Ingrese Cantidad"
                                    value="<?= $orderResultSet['quantity'] ?>">
                                <small id="quantity-error" class="form-text text-danger d-none">Solo se acepta números enteros o decimales</small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="inputPriceUnit">Precio c/u</label>
                                <input name="price_unit" type="text" class="form-control" id="inputPriceUnit" placeholder="Ingrese Precio por Unidad"
                                       value="<?= $orderResultSet['price_unit'] ?>">
                                <small id="priceUnit-error" class="form-text text-danger d-none">Solo se acepta números enteros o decimales</small>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row mt-1">
                <div class="col-11 mx-auto">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="inputDateOrder">Fecha de Pedido</label>
                                <input name="date_order" type="date" class="form-control" id="inputDateOrder" disabled
                                       value="<?= strftime('%Y-%m-%d', strtotime($orderResultSet['date_order'])) ?>">
                             </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="inputDateConfirmation">Fecha de Confirmación</label>
                                <input name="date_confirmation" type="date" class="form-control" id="inputDateConfirmation"
                                       value="<?= ($orderResultSet['date_confirmation'] != null)
                                           ? strftime('%Y-%m-%d', strtotime($orderResultSet['date_confirmation']))
                                           : null ?>">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row mt-1">
                <div class="col-11 mx-auto">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="inputDateDelivery">Fecha de Delivery</label>
                                <input name="date_delivery" type="date" class="form-control" id="inputDateDelivery"
                                       value="<?= ($orderResultSet['date_delivery'] != null)
                                           ? strftime('%Y-%m-%d', strtotime($orderResultSet['date_delivery']))
                                           : null ?>">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="inputStateOrder">Estado del Pago</label>
                                <select name="state_order" class="form-control" id="inputStateOrder">

                                    <?php if($orderResultSet['state'] == "A"): ?>
                                        <option selected value="A">Anulado</option>
                                        <option value="D">Debe</option>
                                        <option value="P">Pagado</option>
                                    <?php elseif ($orderResultSet['state'] == "D"): ?>
                                        <option value="A">Anulado</option>
                                        <option selected value="D">Debe</option>
                                        <option value="P">Pagado</option>
                                    <?php elseif ($orderResultSet['state'] == "P"): ?>
                                        <option value="A">Anulado</option>
                                        <option value="D">Debe</option>
                                        <option selected value="P">Pagado</option>
                                    <?php else: ?>
                                        <option selected value="E">Elegir</option>
                                        <option value="A">Anulado</option>
                                        <option value="D">Debe</option>
                                        <option value="P">Pagado</option>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row mt-1">
                <div class="col-11 mx-auto">
                    <div class="row">

                        <div class="col-6">
                            <div class="form-group">
                                <label for="inputStateDelivery">Estado del Delivery</label>
                                <select name="state_delivery" class="form-control" id="inputStateDelivery">

                                    <?php if ($orderResultSet['delivered'] == "1"): ?>
                                        <option selected value="1">Entregado</option>
                                        <option value="0">No Entregado</option>
                                    <?php else: ?>
                                        <option value="1">Entregado</option>
                                        <option selected value="0">No Entregado</option>
                                    <?php endif; ?>

                                </select>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-11 mx-auto">
                    <div class="col-4 offset-4">
                        <div>
                            <button type="submit" class="form-control btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>

            </form>


        </div><!-- Main Col END -->

        <!-- pagination -->



    </div><!-- body-row END -->

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/public/libraries/js/sweetAlert2.js"></script>
    <script src="/public/js/validations.min.js"></script>
    <script src="/public/js/admin_client_order_edit.min.js"></script>
    
</body>
</html>