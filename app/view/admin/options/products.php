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
                    <h1 style="padding-top: 15px"> Sección Productos <small class="text-muted"> | Lista de Productos</small></h1>
                    <p>
                        Este apartado te permite modificar, eliminar o agregar nuevos productos.
                        Los campos requeridos para cada producto son Nombre, Descripción, y la imagen del producto.
                    </p>
                    <a class="btn btn-primary text-white" href="/admin/product_new">+ NUEVO PRODUCTO</a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-10 mx-auto">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">N°</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            for ($i = 0; $i < count($products); $i++):
                        ?>
                            <tr>
                                <td> <?= $i + 1 ?> </td>
                                <td> <?= $products[$i]['name'] ?></td>
                                <td>
                                    <a href="/admin/product_update_view/<?= $products[$i]['id'] ?>" class="btn btn-sm btn-warning text-white"> Editar </a>
                                    <button content="/admin/product_delete/<?= $products[$i]['id'] ?>" class="btn btn-sm btn-danger text-white delete"> Eliminar </button>
                                </td>
                            </tr>
                        <?php
                            endfor;
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- Main Col END -->

    </div><!-- body-row END -->

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/public/libraries/js/sweetAlert2.js"></script>
    <script src="/public/js/admin_delete_product.min.js"></script>
    
</body>
</html>