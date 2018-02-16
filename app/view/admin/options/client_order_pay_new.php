<?php
    require_once __DIR__ . '/../../../model/Order.php';

    if(is_array($id)){
        $id = $id[0];
    }

    $banks = ["Banco Central del Perú", "Interbank", "Pago Efectivo"];

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
                    <h1 class="mt-4" > Sección Pagos <small class="text-muted"> | Editar Pago</small></h1>
                    <!--a class="btn btn-primary text-white mt-1" href="/admin/product_new">+ NUEVO PRODUCTO</a-->
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-11 mx-auto ">
                    <form id="form_pay" method="post" action="/user/order_detail_save">

                        <input type="hidden" id="id_order" name="id_order" value="<?= $id ?>">

                        <div class="form-group">
                            <label for="inputCode">Código de Operación <small class="text-info">( Si el pago es por efectivo, se debe dejar el campo en cero )</small> </label>
                            <input name="code" type="text" class="form-control" id="inputCode" placeholder="Código" maxlength="20" required>
                            <small id="code-error" class="monto-error text-danger d-none">No se acepta letras u otro carácteres</small>
                        </div>

                        <div class="form-group ">
                            <label for="inputMonto">Monto</label>
                            <input name="monto" type="text" class="form-control" id="inputMonto" placeholder="Monto" maxlength="20" required>
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
                                <?php foreach ($banks as $b): ?>
                                        <option value="<?= $b ?>"><?= $b ?></option>
                                <?php endforeach;?>
                            </select>
                        </div>

                        <div class="row d-flex justify-content-between mt-4">

                            <div class="col-6">
                                <button type="submit" class="form-control btn btn-primary btn_save">Guardar</button>
                            </div>

                            <div class="col-6">
                                <button id="canceled_order" class="form-control btn btn-danger">Cancelar</button>
                            </div>

                        </div>

                    </form>
                </div>
            </div>

        </div><!-- Main Col END -->

        <!-- pagination -->


    </div><!-- body-row END -->

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/public/libraries/js/sweetAlert2.js"></script>
    <script src="/public/js/validations.min.js"></script>
    <script src="/public/js/admin_client_order_pay_new.min.js"></script>
    
</body>
</html>