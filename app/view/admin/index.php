<!DOCTYPE html>
<html lang="es" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <title>Coproduc</title>

    <link rel="shortcut icon" type="image/png" href="/public/img/icon.png"/>

    <!-- Open Graph -->
    <meta property="og:title" content="Coproduc : Venta de productos 100% naturales " />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.coproduc.com" />
    <meta property="og:image" content="" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:alt" content="Logo de Coproduc" />
    <meta property="og:description" content="Coproduc : Venta de productos 100% naturales">

    <meta name="author" content="Coproduc">
    <meta name="classification" content="all">
    <meta name="description" content="Coproduc es una empresa que se dedica a la venta de productos 100% naturales con la más pura calidad
        de ingredientes">
    <meta name="keywords" content="coproduc, queso, leche, manjar, productos naturales">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100" rel="stylesheet">
    <link rel="stylesheet" href="/public/libraries/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/public/libraries/font/css/icon.css">
    <link rel="stylesheet" href="/public/css/admin_login.min.css">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-10 offset-1  offset-md-3    col-md-6 ">
                <img class="img-fluid" src="/public/img/logo_sin_fondo.png" alt="">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-10 offset-1 offset-md-4 col-md-4">
                <form id="form-admin" method="post" action="/admin/login">
                    <div class="form-group">
                        <div class="d-flex justify-content-center">
                            <label class="text-white h5" for="user">Usuario</label>
                        </div>
                        <input name="user" type="text" class="form-control " id="user"  placeholder="Ingrese usuario">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-center">
                            <label class="text-white h5"  for="pass">Contraseña</label>
                        </div>
                        <input name="pass" type="password" class="form-control " id="pass" placeholder="Ingrese Contraseña">
                    </div>
                    <div class="row mt-4">
                        <div class="col-4 offset-4">
                            <button type="submit" class="btn btn-primary">Ingresar</button>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-2 offset-5 text-white">
                            <a class="text-white" href="/">Salir</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>



<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/public/libraries/js/sweetAlert2.js"></script>
<script src="/public/js/admin_login.min.js"></script>
</body>
</html>