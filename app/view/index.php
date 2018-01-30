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
    <link rel="stylesheet" href="/public/css/coproduc_main.css">

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
                    <div class="col-12 col-sm-6 col-lg-4 mt-5">
                        <div class="card">
                            <img class="card-img-top" src="/public/img/products/yogurt.jpg" alt="Card image cap">
                            <div class="card-body card-body-color">
                                <h5 class="card-title d-flex justify-content-center">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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


    <section>

    </section>


<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>