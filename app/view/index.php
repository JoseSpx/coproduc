<?php
    $nameEnterprise = "Orlando";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/public/img/logo.svg">
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/styleHoverEffect.css">
    <link rel="stylesheet" href="/public/css/stylesCoproduc.css">
    <title><?= $nameEnterprise ?></title>
</head>
<body>
    <nav class="navbar bg-transparent  navbar-expand-md fixed-top navbar-on-top d-none d-md-flex" id="navbar">
        <a href="index.php" class="navbar-brand text-white">
            <img src="/public/img/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            <?= $nameEnterprise ?>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto text-center">
                <a id="nav-home--large" href="#" class="nav-item nav-link links-color-white mr-4 navbar-nav__a">INICIO</a>
                <a id="nav-products--large" href="#" class="nav-item nav-link links-color-white mr-4 navbar-nav__a">PRODUCTOS</a>
                <a id="nav-us--large" href="#" class="nav-item nav-link links-color-white mr-4 navbar-nav__a">¿QUIENES SOMOS?</a>
                <a id="nav-contact--large" href="#" class="nav-item nav-link links-color-white mr-4 navbar-nav__a">CONTACTO</a>
                <a id="d" href="#" class="nav-item nav-link mr-4 btn button-primary">
                    Iniciar Sesion
                </a>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top navbar-on-top--small d-flex d-md-none" >
        <a href="index.php" class="navbar-brand text-white">
            <img src="/public/img/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            <?= $nameEnterprise ?>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbardatasmall"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbardatasmall">
            <div class="navbar-nav ml-auto text-center">
                <a id="nav-home--smal" href="#" class="nav-item nav-link text-white">INICIO</a>
                <a href="#" class="nav-item nav-link text-white">PRODUCTOS</a>
                <a href="#" class="nav-item nav-link text-white">¿QUIENES SOMOS?</a>
                <a href="#" class="nav-item nav-link text-white">CONTACTO</a>
            </div>
        </div>
    </nav>


    <div id="home">
        <div class="image-principal">
            <div class="imgText  d-none d-md-flex">
                <p class="imgPrimaryText" style="font-size: 60px;text-shadow: 0 0 10px black">LOS MEJORES QUESOS</p>
                <p class="imgSecondaryText" style="font-size: 20px; text-shadow: 0 0 10px black">Ver todos nuestros deliciosos productos</p
            </div>

        </div>
        <div class="image-principal--small">
            <div class="imgText--small d-flex d-md-none">
                <p class="imgPrimaryText--small">LOS MEJORES QUESOS</p>
            </div>
        </div>
    </div>


    <section class="container-fluid information pt-5 pb-4  d-none d-md-block" id="products-title">
        <div class="row">
            <div class="col-12 justify-content-center d-flex">
                <p class="information__first">Ofrecemos los mejores productos para tu consumo</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 justify-content-center information__second d-flex" >
                <p class="information__second">100% de la más pura calidad</p>
            </div>
        </div>
    </section>


    <section class="container">
        <div class="row">
            <div class="col-8 offset-2 offset-sm-0 col-lg-4 col-md-4 col-sm-6 col-xs-6 mt-4">
                <div class="hovereffect">
                    <img class="img-responsive img-thumbnail" src="/public/img/mantequilla_small.jpg" alt="">
                    <div class="overlay">
                        <h2>Mantequilla del Perú</h2>
                        <p>
                            <a href="#">Ver más</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-8 offset-2 offset-sm-0 col-lg-4 col-md-4 col-sm-6 col-xs-6 mt-4">
                <div class="hovereffect">
                    <img class="img-responsive img-thumbnail" src="/public/img/queso_small.jpg" alt="">
                    <div class="overlay">
                        <h2>Queso del Perú</h2>
                        <p>
                            <a href="#">Ver más</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-8 offset-2 offset-sm-0 col-lg-4 col-md-4 col-sm-6 col-xs-6 mt-4">
                <div class="hovereffect">
                    <img class="img-responsive img-thumbnail" src="/public/img/yogurt_small.jpg" alt="">
                    <div class="overlay">
                        <h2>Effect 13</h2>
                        <p>
                            <a href="#">LINK HERE</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-8 offset-2 offset-sm-0 col-lg-4 col-md-4 col-sm-6 col-xs-6 mt-4">
                <div class="hovereffect">
                    <img class="img-responsive img-thumbnail" src="/public/img/yogurt_small.jpg" alt="">
                    <div class="overlay">
                        <h2>Effect 13</h2>
                        <p>
                            <a href="#">LINK HERE</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-8 offset-2 offset-sm-0 col-lg-4 col-md-4 col-sm-6 col-xs-6 mt-4">
                <div class="hovereffect">
                    <img class="img-responsive img-thumbnail" src="/public/img/yogurt_small.jpg" alt="">
                    <div class="overlay">
                        <h2>Effect 13</h2>
                        <p>
                            <a href="#">LINK HERE</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-8 offset-2 offset-sm-0 col-lg-4 col-md-4 col-sm-6 col-xs-6 mt-4">
                <div class="hovereffect">
                    <img class="img-responsive img-thumbnail" src="/public/img/yogurt_small.jpg" alt="">
                    <div class="overlay">
                        <h2>Effect 13</h2>
                        <p>
                            <a href="#">LINK HERE</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="my-5" id="us">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
                        <p class="text-center us-title">¿Quienes somos?</p>
                        <p class="text-center us-description">
                            Somos una empresa agroindustrial ubicada en la hermosa ciudad de cajamarca, 100% comprometida con el bienestar de la familia,
                            por eso nos esmeramos en que cada producto sea lo mas natural posible para que pueda degustar con
                            total confianza y seguridad
                        </p>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid rounded" src="/public/img/farm.jpg" alt="">
                </div>
            </div>
        </div>
    </section>


    <section class="container-fluid py-5 p-4 contact" id="contact">
        <div class="row">

            <div class="col-12 col-md-6 offset-md-3">
                <div class="d-flex justify-content-center h2">
                    Contactanos
                </div>
                <div>
                    <form>
                        <div class="form-group">
                            <label for="contact_name">Nombre</label>
                            <input type="text" class="form-control" id="contact_nombre" placeholder="Escribe tu nombre">
                        </div>
                        <div class="form-group">
                            <label for="contact_lastname">Apellido</label>
                            <input type="text" class="form-control" id="contact_lastname" placeholder="Escribe tu apellido">
                        </div>
                        <div class="form-group">
                            <label for="contact_lastname">Telefono</label>
                            <input type="number" class="form-control" id="contact_lastname" placeholder="Escribe tu telefono">
                        </div>
                        <div class="form-group">
                            <label for="contact_lastname">E-mail</label>
                            <input type="email" class="form-control" id="contact_lastname" placeholder="Escribe tu E-mail">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-color" onclick="alert()">Enviar</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </section>

    <footer class="bg-dark">
        <div class="container">
            <div class="row py-4 footer justify-content-center">
                <?= date('Y')  . " " . $nameEnterprise ?>. Todos los derechos reservados
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <!--script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script-->
    <script src="/public/js/sweet.js"></script>
    <script src="/public/js/scriptIndex.js"></script>
</body>
</html>