<?php
    session_start();

?>

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
    <link rel="stylesheet" href="/public/css/coproduc_main.min.css">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

</head>
<body>

    <!-- navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top position-fixed">
        <a class="navbar-brand" href="#main">
            <img src="/public/img/logo.jpg" class="d-inline-block align-top " alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav  ml-auto d-flex align-items-center">
                <li class="nav-item ml-2">
                    <a class="nav-link link-nav scroll" href="#main">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ml-2">
                    <a class="nav-link link-nav scroll" href="#products">Productos</a>
                </li>
                <li class="nav-item ml-2">
                    <a class="nav-link link-nav scroll" href="#about-us">Nosotros</a>
                </li>
                <li class="nav-item ml-2">
                    <a class="nav-link link-nav scroll" href="#contact">Contacto</a>
                </li>

                <?php if(!isset($_SESSION['user'])):  ?>
                    <li class="nav-item ml-2 ">
                        <button type="button" data-toggle="modal" data-target="#modalLogin" class="nav-link btn btn-color text-white" >Iniciar Sesión</button>
                    </li>
                <?php else: ?>
                    <li class="ml-2">
                        <div class="dropdown">
                            <button class="btn btn-color dropdown-toggle text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php
                                    $user = $_SESSION['user'];
                                    $user = substr($user,0,10);
                                    echo $user;
                                ?>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Configuracion</a>
                                <a class="dropdown-item" href="/coproduc/logout">Salir</a>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

    <!-- login modal -->
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5  class="modal-title" id="exampleModalLabel">COPRODUC</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="modal-close">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row mt-2">
                            <div class="col-10 offset-1 d-flex justify-content-center login-title text-uppercase">
                                Iniciar Sesión
                            </div>
                        </div>

                        <form id="form-login" action="/coproduc/login" method="post">
                            <div class="row">
                                <div class="col-10 offset-1 mt-1">
                                    <div class="row no-gutters">
                                        <div class="col-2 d-flex flex-row justify-content-center align-items-center icon-container">
                                            <label class="icon-label" for="inputUser"> <i class="icon-user icon-label"></i></label>
                                        </div>
                                        <div class="col-10">
                                            <input required name="user" type="text" class="form-control form-icon" id="inputUser" aria-describedby="" placeholder="Usuario o DNI">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-10 offset-1">
                                    <div class="row no-gutters">
                                        <div class="col-2 d-flex flex-row justify-content-center align-items-center icon-container">
                                            <label class="icon-label" for="inputPass"> <i class="icon-key icon-label"></i></label>
                                        </div>
                                        <div class="col-10">
                                            <input required name="pass" type="password" class="form-control form-icon" id="inputPass" aria-describedby="" placeholder="Contraseña">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-10 offset-1">
                                    <div id="alert-error" class="alert alert-danger d-none">
                                        Usuario o Contraseña incorrecta
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-10 offset-1 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-color">INGRESAR</button>
                                </div>
                            </div>

                            <div class="row mt-2 mb-3">
                                <div class="col-10 offset-1 login-register d-flex justify-content-center">
                                    ¿No está registrado? &nbsp;<a href="/register">Regístrate Aquí.</a>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
                <!--div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
                    <button type="button" class="btn btn-primary">Ingresar</button>
                </div-->
            </div>
        </div>
    </div>


    <!--  slider  -->
    <div id="main" class="main-slide">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/public/img/slider/slider3.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/public/img/slider/slider1.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/public/img/slider/slider2.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <!-- productos -->
    <section id="products" class="products mt-5">

        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <h2 class="titles">PRODUCTOS</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <?php for ($i = 0 ; $i < 6 ; $i++): ?>
                    <div class="col-10 offset-1 col-sm-12 offset-sm-0 col-md-6  col-lg-4 mt-5">
                        <div class="card">
                            <div class="hovereffect">
                                <img class="card-img-top" src="/public/img/products/yogurt.jpg" alt="Card image cap">
                                <div class="overlay">
                                    <h2>Descripción</h2>
                                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur libero mollitia nesciunt quod sed velit.</p>
                                </div>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center font-weight-bold">Card title</h5>
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary btn-color">
                                        Comprar
                                        <i class="icon-basket"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>

            </div>
        </div>
    </section>


    <!-- about us --->
    <section id="about-us" class="mt-5">
        <div class="container-fluid">
            <div class="row ">
                <img class="img-fluid " src="/public/img/about-us.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- contact -->
    <section id="contact" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <h2 class="titles">CONTACTO</h2>
                </div>
            </div>
        </div>
        <div class="container mt-4 contact">
            <form id="form-contact" action="/coproduc/mail" method="post">
                <div class="row ">
                    <div class="col-10 offset-1">
                        <div class="row contact-data">
                            <div class="col-6 d-flex flex-column">
                                <div class="form-group">
                                    <!--label for="inputName"></label-->
                                    <input name="name" required type="text" class="form-control" id="inputName" aria-describedby="emailHelp" placeholder=" Nombre">
                                </div>
                                <div class="form-group mt-3">
                                    <!--label for="inputEmail">Email</label-->
                                    <input name="email" required type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder=" Email">
                                </div>
                                <div class="form-group mt-3">
                                    <!--label for="inputTelephone">Telefono</label-->
                                    <input name="phone" required type="number" class="form-control" id="inputTelephone" aria-describedby="emailHelp" placeholder=" Teléfono">
                                </div>
                            </div>
                            <div class="col-6 d-flex flex-column justify-content-between">
                                <div class="form-group contact-message">
                                    <!--label for="inputMessage">Password</label-->
                                    <textarea name="message" required spellcheck="false" type="text" class="form-control" id="inputPass" placeholder="Mensaje"></textarea>
                                </div>
                                <div class="d-flex flex-column ">
                                    <button name="submit" type="submit" class="btn btn-primary contact-submit">ENVIAR</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- footer -->
    <section class="mt-5 footer pb-2">
        <div class="container-fluid">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-8 offset-2 col-sm-4 offset-sm-4  mt-5 mb-4">
                        <img class="img-fluid" src="/public/img/logo_sin_fondo.png" alt="">
                    </div>
                </div>
                <div class="col-2 mt-2 mb-3 offset-5 d-flex justify-content-around">
                    <a href="" class="text-white"><i class="icon-facebook-squared"></i></a>
                    <a href="" class="text-white"><i class="icon-youtube"></i></a>
                    <a href="" class="text-white"><i class="icon-instagram"></i></a>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="divider">
                        </div>
                    </div>
                </div>
                <div class="row d-none d-md-flex">
                    <div class="col-4 mt-3">
                        <p class="text-white text-center"><i class="icon-location"></i> Trujillo - Cajamarca - Perú </p>
                    </div>
                    <div class="col-4 mt-3">
                        <p class="text-white text-center"><i class="icon-mail-alt"></i> info@coproduc.com </p>
                    </div>
                    <div class="col-4 mt-3">
                        <p class="text-white text-center"><i class="icon-phone"></i> 949212970 - 949212970 </p>
                    </div>
                </div>
                <div class="row d-flex d-md-none flex-column">
                    <div class="col-12 mt-3">
                        <p class="text-white text-center"><i class="icon-location"></i> Trujillo - Cajamarca - Perú </p>
                    </div>
                    <div class="col-12 mt-3">
                        <p class="text-white text-center"><i class="icon-mail-alt"></i> info@coproduc.com </p>
                    </div>
                    <div class="col-12 mt-3">
                        <p class="text-white text-center"><i class="icon-phone"></i> 949212970 - 949212970 </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center text-white text-justify">
                        Copyright © 2018 - Coproduc. Todos los derechos reservados.
                    </div>
                    <div class="col-12 d-flex justify-content-center text-white">
                        <p class="text-center">©DEVELOPED BY <a target="_blank" class="font-weight-bold link-developer" href="http://www.ticognitivas.com/"> TIcognitivas</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/public/libraries/js/sweetAlert2.js"></script>
<script src="/public/js/coproduc_main.min.js"></script>
<script src="/public/js/mail.js"></script>
</body>
</html>