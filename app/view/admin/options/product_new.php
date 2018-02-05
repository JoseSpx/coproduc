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
            <div class="col-11 mx-auto ">
                <h1 class="mt-4 ml-4" style="padding-top: 15px"> Sección Productos
                    <small class="text-muted"> | Nuevo</small>
                </h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-10 mx-auto">
                <form action="/admin/product_create" method="post" enctype="multipart/form-data" id="form">
                    <div class="card card-body mb-5">
                        <div class="container">
                            <div class="row  py-1 div-main__topbar  d-flex align-items-center mb-3">
                                <div class="col-12 col-sm-5">
                                    <h4 class="card-title pt-2 text-white"> Nuevo Producto </h4>
                                </div>
                                <div class="col-6 col-sm-3 ml-auto">
                                    <button id="create" name="create" type="submit" class="btn btn-primary btn-block ">Guardar</button>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <a id="cancel" class="btn btn-dark btn-block text-white">Cancelar</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name"> Nombre </label>
                                                <input type="text" class="form-control form-inline" required
                                                       id="name" placeholder="Nombre del producto" name="name" maxlength="100">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="inputState">Estado </label>
                                                <select class="form-control" id="inputState" name="state">
                                                    <option selected>Visible</option>
                                                    <option> No Visible</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ">
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label for="inputName" class="">Imagen - 562 x 478 </label>
                                                    </div>
                                                </div>
                                                <div class="row no-gutters">
                                                    <div class="col-12 col-sm-12">
                                                        <!--input type="file" class="custom-file-input" id="customFile" name="image">
                                                        <label class="custom-file-label" for="customFile">Elegir</label-->
                                                        <input accept=".png,.jpg,.jpeg" id="img" type="file" name="img" required onchange="previewImage()">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 pt-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="div-main__loadimage mx-auto my-auto">
                                                <img id="img-prev" class="img-fluid" src="/public/img/admin/loadImage.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="inputNameEs">Precio</label>
                                                    <input type="text" class="form-control form-inline" id="inputNameEs" required
                                                           name="price" placeholder="Precio" maxlength="100">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="inputNameEn">Descripción</label>
                                                    <input type="text" class="form-control form-inline" id="inputNameEn" required
                                                           name="description" placeholder="Descripción" maxlength="200">
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- Main Col END -->

</div><!-- body-row END -->

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/public/libraries/js/sweetAlert2.js"></script>
<script src="/public/js/admin_new_product.min.js"></script>

</body>
</html>