<?php
    require_once __DIR__ . '/../../model/User.php';
    session_start();

    if(!isset($_SESSION['user'])){
        header("location:/");
    }

    $user = new User();
    $data = $user->getUserData($_SESSION['user']);
    $data = $data[0];

    $districts = ['La Esperanza','Víctor Larco ','Trujillo','El Porvenir','Huanchaco','Florencia de Mora',
                    'Laredo', 'Moche', 'Salaverry', 'Poroto', 'Simbal'];

?>

<!DOCTYPE html>
<html lang="es" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <title>Coproduc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <link rel="stylesheet" href="/public/libraries/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/public/libraries/font/css/icon.css">
    <link rel="stylesheet" href="/public/css/coproduc_user_config.min.css">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

</head>
<body>

<!-- navbar -->
<nav id="navbar" class="navbar navbar-expand-md navbar-light bg-white ">
    <a class="navbar-brand" href="/">
        <img src="/public/img/logo.jpg" class="d-inline-block align-top " alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav  ml-auto d-flex align-items-center">
            <li class="nav-item ml-2">
                <a class="nav-link link-nav" href="/user/order"> Pedidos </a>
            </li>
            <li class="nav-item ml-2">
                <a class="nav-link link-nav" href="/">Página Principal</a>
            </li>
        </ul>
    </div>
</nav>

<!-- form -->
<div class="container mb-0 mt-4">

    <div class="row">
        <div class="col-10 offset-1 offset-lg-0 col-lg-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active text-center border-link-init" id="tab-config" data-toggle="pill" href="#v-pills-config" role="tab" aria-controls="v-pills-config" aria-selected="true">
                    Configuración General
                </a>
                <a class="nav-link text-center border-link-end" id="tab-account" data-toggle="pill" href="#v-pills-account" role="tab" aria-controls="v-pills-account" aria-selected="false">
                    Cuenta
                </a>
            </div>
        </div>

        <div class="col-10 offset-1 offset-lg-0 col-lg-9 mb-2">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-config" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="row mt-3 mt-lg-0">
                        <div class="col-12  ml-lg-3">
                            <p class="sub-title">En esta sección puede ver sus datos generales.</p>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12">
                            <form id="form_update_data" action="/user/update_data" method="post">

                                <!-- data default --->
                                <input name="dni_old" type="hidden" value="<?= $data['dni'] ?>">
                                <input name="id_ubication" type="hidden" value="<?= $data['id_ubication'] ?>">

                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-3 col-lg-2 d-flex justify-content-end align-items-center">
                                            <label for="inputDNI"> DNI </label>
                                        </div>
                                        <div class="col-9 col-lg-10">
                                            <input name="dni_new" value="<?= $data['dni'] ?>" type="text" class="form-control form-control-sm" id="inputDNI" minlength="8" maxlength="8" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-9 col-lg-10 offset-3 offset-lg-2">
                                            <small id="error-dni" class="alert alert-danger form-text text-muted d-none">
                                                DNI no válido o ya registrado
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-3 col-lg-2 d-flex justify-content-end align-items-center">
                                            <label class="d-block" for="inputName"> Nombre </label>
                                        </div>
                                        <div class="col-9 col-lg-10">
                                            <input name="name" value="<?= $data['name'] ?>" type="text" class="form-control form-control-sm" id="inputName" maxlength="99" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-3 col-lg-2 d-flex justify-content-end align-items-center">
                                            <label class="d-block" for="inputLast"> Apellidos </label>
                                        </div>
                                        <div class="col-9 col-lg-10">
                                            <input name="lastName" value="<?= $data['last_name'] ?>" type="text" class="form-control form-control-sm" id="inputLast" maxlength="99" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-3 col-lg-2 d-flex justify-content-end align-items-center">
                                            <label class="d-block" for="inputEmail"> Email </label>
                                        </div>
                                        <div class="col-9 col-lg-10">
                                            <input name="email" value="<?= $data['email'] ?>" type="text" class="form-control form-control-sm" id="inputEmail" maxlength="100" >
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-3 col-lg-2 d-flex justify-content-end align-items-center">
                                            <label class="d-block" for="inputPhone1"> Teléfono </label>
                                        </div>
                                        <div class="col-9 col-lg-4">
                                            <input name="phone1" value="<?= $data['telephone'] ?>" type="number" class="form-control form-control-sm" id="inputPhone1" maxlength="20" required>
                                        </div>
                                        <div class="col-3 col-lg-2 mt-3 mt-lg-0 d-flex justify-content-end align-items-center">
                                            <label class="d-block" for="inputPhone2"> Teléfono Opcional</label>
                                        </div>
                                        <div class="col-9 col-lg-4  mt-3 mt-lg-0">
                                            <input name="phone2" value="<?= $data['telephone2'] ?>" type="number" class="form-control form-control-sm" id="inputPhone2" maxlength="20">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-3 col-lg-2 d-flex justify-content-end align-items-center">
                                            <label class="d-block" for="inputAddress"> Dirección </label>
                                        </div>
                                        <div class="col-9 col-lg-10">
                                            <input name="address" value="<?= $data['address'] ?>" type="text" class="form-control form-control-sm" id="inputAddress" maxlength="200" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-3 col-lg-2 d-flex justify-content-end align-items-center">
                                            <label class="d-block" for="inputReference"> Referencia  </label>
                                        </div>
                                        <div class="col-9 col-lg-10">
                                            <input name="reference" value="<?= $data['reference'] ?>" type="text" class="form-control form-control-sm" id="inputReference" maxlength="300" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-3 col-lg-2 d-flex justify-content-end align-items-center">
                                            <label for="departments" class="d-block">Departamento</label>
                                        </div>
                                        <div class="col-9 col-lg-4">
                                            <select name="departments" class="custom-select custom-select-sm" id="departments">
                                                <!--option value="10000" disabled selected>Elegir</option>
                                                <option value="Amazonas">Amazonas</option>
                                                <option value="Ancash">Ancash</option>
                                                <option value="Apurimac">Apurimac</option>
                                                <option value="Arequipa">Arequipa</option>
                                                <option value="Ayacucho">Ayacucho</option>
                                                <option value="Cajamarca">Cajamarca</option>
                                                <option value="Callao">Callao</option>
                                                <option value="Cusco">Cusco</option>
                                                <option value="Huancavelica">Huancavelica</option>
                                                <option value="Huanuco">Huanuco</option>
                                                <option value="Ica">Ica</option>
                                                <option value="Junin">Junin</option-->
                                                <option value="La Libertad" >La Libertad</option>
                                                <!--    option value="Lambayeque">Lambayeque</option>
                                                <option value="Lima">Lima</option>
                                                <option value="Loreto">Loreto</option>
                                                <option value="Madre De Dios">Madre De Dios</option>
                                                <option value="Moquegua">Moquegua</option>
                                                <option value="Pasco">Pasco</option>
                                                <option value="Piura">Piura</option>
                                                <option value="Puno">Puno</option>
                                                <option value="San Martin">San Martin</option>
                                                <option value="Tacna">Tacna</option>
                                                <option value="Tumbes">Tumbes</option>
                                                <option value="Ucayali">Ucayali</option-->
                                            </select>
                                        </div>

                                        <div class="col-3 col-lg-2 mt-3 mt-lg-0 d-flex justify-content-end align-items-center">
                                            <label for="provinces" class="d-block">Provincia</label>
                                        </div>
                                        <div class="col-9 col-lg-4 mt-3 mt-lg-0">
                                            <select name="provinces" class="custom-select custom-select-sm" id="provinces">
                                                <option value="Trujillo">Trujillo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-3 col-lg-2 d-flex justify-content-end align-items-center">
                                            <label for="districts" class="d-block">Distrito</label>
                                        </div>
                                        <div class="col-9 col-lg-4">
                                            <select name="districts" class="custom-select custom-select-sm" id="districts">
                                                <?php foreach ($districts as $district):
                                                            if($district == $data['dist']){
                                                                echo "<option value='$district' selected>$district</option>";
                                                            }
                                                            else{
                                                                echo "<option value='$district'>$district</option>";
                                                            }
                                                      endforeach;
                                                ?>
                                            </select>
                                        </div>

                                        <div class="col-3 col-lg-2 mt-3 mt-lg-0 d-flex justify-content-end align-items-center">
                                            <label for="inputUrb" class="d-block">Urbanización</label>
                                        </div>
                                        <div class="col-9 col-lg-4 mt-3 mt-lg-0">
                                            <input name="urb" value="<?= $data['urb'] ?>" type="text" class="form-control form-control-sm" id="inputUrb" placeholder="Opcional">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-4 offset-4">
                                    <button type="submit" class="form-control btn btn-color">Actualizar</button>
                                </div>
                            </div>
                            </form>
                        </div>

                </div>

                </div>
                <div class="tab-pane fade" id="v-pills-account" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="row">
                        <div class="col-12 ml-lg-3 mt-3 mt-lg-0">
                            <p class="sub-title">Si desea cambiar su nombre de Usuario, escriba otro nombre y actualize. &nbsp;(mínimo 3 carácteres)</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10 offset-1 offset-lg-2 col-lg-8">

                            <form id="form_update_username" action="/user/update_username" method="post">
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-3 col-lg-4 d-flex justify-content-end align-items-center">
                                                <label class="d-block" for="inputUser">Nombre de Usuario </label>
                                            </div>
                                            <div class="col-9 col-lg-8">
                                                <input value="<?= $data['user'] ?>" name="user_actual" type="hidden" class="form-control form-control-sm" id="inputUser" >
                                                <input value="<?= $data['user'] ?>" minlength="4" maxlength="20" name="user_new" type="text" class="form-control form-control-sm" id="inputUser" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-9 offset-3 col-lg-8 offset-lg-4">
                                                <small id="error-user" class="alert alert-danger form-text text-muted d-none">
                                                    Usuario ya existe
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-6 offset-3 offset-lg-4 col-lg-4">
                                        <button class="btn btn-color form-control" type="submit">Actualizar</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-10 offset-1 offset-lg-0 col-lg-12 ml-3 mt-4">
                            <p class="sub-title">Si desea cambiar su contraseña, escriba una nueva contraseña y actualize.</p>
                        </div>
                    </div>
                    <div class="row mt-3 ">
                        <div class="col-10 offset-1 offset-lg-2 col-lg-8">

                            <form id="form_update_pass" action="/user/update_pass" method="post">
                                <div class="row ">
                                    <div class="col-3 col-lg-4 d-flex justify-content-end align-items-center">
                                        <label class="d-block" for="inputPass">Contraseña Nueva </label>
                                    </div>
                                    <div class="col-9 col-lg-8 d-flex flex-row">
                                        <input name="pass" type="password" class="form-control form-control-sm" id="inputPass" required>
                                        <button id="btn_view_pass" class="btn btn-color" type="button"><i class="icon-eye"></i></button>
                                    </div>
                                </div>


                                <div class="row mt-3 mb-3">
                                    <div class="col-6 offset-3 offset-lg-4 col-lg-4 ">
                                        <button class="btn btn-color form-control" type="submit">Actualizar</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/public/libraries/js/sweetAlert2.js"></script>
<script src="/public/js/validations.min.js"></script>
<script src="/public/js/coproduc_user_config.min.js"></script>
</body>
</html>