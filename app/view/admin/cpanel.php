<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>cpanel</title>
    <meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">

    <link rel="shortcut icon" type="image/png" href="/public/img/icon.png"/>
    <link rel="stylesheet" href="/public/libraries/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/admin_main.min.css">

</head>
<body id="top-page">

    <!--- sidebar -->
    <?php require_once __DIR__ . '/inc/navbar.php'?>

    <!-- Bootstrap row -->
    <div class="row" id="body-row">
        <!-- Sidebar -->
        <?php require_once __DIR__ . '/inc/sidebar.php' ?>

        <!-- MAIN -->
        <div class="container-fluid div-main">
        <div class="col">
            <section class="container-fluid" id="Main">
                <h1 style="padding-top: 15px;">
                    Coproduc
                    <small class="text-muted"> | Panel Administrativo</small>
                </h1>

                <div class="card">
                    <h4 class="card-header">Descripción Panel Administrativo</h4>
                    <div class="card-body" style="text-align: justify;">
                        <p>
                            En este apartado se te permite modificar, eliminar o agregar la información de los productos a vender, así
                            como tambien poder ver los pedidos realizados por los clientes y verificar su respectiva información
                        </p>
                    </div>
                </div>
            </section>


        </div>
        </div><!-- Main Col END -->

    </div><!-- body-row END -->

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/public/js/admin_main.min.js"></script>
    
</body>
</html>