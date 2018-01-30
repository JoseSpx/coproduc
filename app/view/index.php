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
    <link rel="stylesheet" href="/public/libraries/fonts/css/icon.css">
    <link rel="stylesheet" href="/public/css/coproduc_main.min.css">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

</head>
<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top position-fixed">
        <a class="navbar-brand" href="#">
            <img src="/public/img/logo.jpg" class="d-inline-block align-top " alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav  ml-auto d-flex align-items-center">
                <li class="nav-item ml-2">
                    <a class="nav-link" href="#">INICIO <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ml-2">
                    <a class="nav-link " href="#">PRODUCTOS</a>
                </li>
                <li class="nav-item ml-2">
                    <a class="nav-link" href="#">NOSOTROS</a>
                </li>
                <li class="nav-item ml-2">
                    <a class="nav-link" href="#">CONTACTO</a>
                </li>
                <li class="nav-item ml-2">
                    <a class="nav-link" href="#">INICIAR SESION</a>
                </li>
            </ul>
        </div>
    </nav>

    <!--  slider  -->
    <div class="main-slide">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/public/img/slider/slider1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/public/img/slider/slider2.jpg" alt="Second slide">
                </div>
                <!--div class="carousel-item">
                    <img class="d-block w-100" src="/public/img/slider/cheese.jpg" alt="Third slide">
                </div-->
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
    <section class="products mt-5">

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
    <section class="mt-5">
        <div class="container-fluid">
            <div class="row ">
                <img class="img-fluid " src="/public/img/about-us.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- contact -->
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <h2 class="titles">CONTACTO</h2>
                </div>
            </div>
        </div>
        <div class="container mt-4 contact">
            <form action="">
                <div class="row ">
                    <div class="col-10 offset-1">
                        <div class="row contact-data">
                            <div class="col-6 d-flex flex-column">
                                <div class="form-group">
                                    <!--label for="inputName"></label-->
                                    <input type="text" class="form-control" id="inputName" aria-describedby="emailHelp" placeholder=" Nombre">
                                </div>
                                <div class="form-group mt-3">
                                    <!--label for="inputEmail">Email</label-->
                                    <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder=" Email">
                                </div>
                                <div class="form-group mt-3">
                                    <!--label for="inputTelephone">Telefono</label-->
                                    <input type="number" class="form-control" id="inputTelephone" aria-describedby="emailHelp" placeholder=" Teléfono">
                                </div>
                            </div>
                            <div class="col-6 d-flex flex-column justify-content-between">
                                <div class="form-group contact-message">
                                    <!--label for="inputMessage">Password</label-->
                                    <textarea spellcheck="false" type="text" class="form-control" id="inputPass" placeholder="Mensaje"></textarea>
                                </div>
                                <div class="d-flex flex-column ">
                                    <button type="submit" class="btn btn-primary contact-submit">ENVIAR</button>
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
                        <p class="text-white text-center"><i class="icon-location"></i> Av. Sánchez Carrión #420 Trujillo - Perú </p>
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
                        <p class="text-white text-center"><i class="icon-location"></i> Av. Sánchez Carrión #420 Trujillo - Perú </p>
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
                        <p class="text-center">©DEVELOPED BY <a target="_blank" class="text-white font-weight-bold" href="http://www.ticognitivas.com/"> TIcognitivas</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>