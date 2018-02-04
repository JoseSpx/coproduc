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
                <a class="nav-link link-nav" href="/user/pedidos"> Pedidos </a>
            </li>
            <li class="nav-item ml-2">
                <a class="nav-link link-nav" href="/">Página Principal</a>
            </li>
        </ul>
    </div>
</nav>

<!-- form -->
<div class="container mb-0 mt-4">

    <!--div class="row ">
        <div class="col-10 offset-1 offset-lg-0 col-lg-12 d-flex justify-content-center h4 title-register">
            Datos del cliente
        </div>
    </div-->

    <div class="row">
        <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active text-center border-link-init" id="tab-config" data-toggle="pill" href="#v-pills-config" role="tab" aria-controls="v-pills-config" aria-selected="true">
                    Configuración General
                </a>
                <a class="nav-link text-center border-link-end" id="tab-account" data-toggle="pill" href="#v-pills-account" role="tab" aria-controls="v-pills-account" aria-selected="false">
                    Cuenta
                </a>
            </div>
        </div>

        <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-config" role="tabpanel" aria-labelledby="v-pills-home-tab">

                    <div class="row">
                        <div class="col-10 offset-1 offset-lg-0 col-lg-12">

                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-2 d-flex justify-content-end align-items-center">
                                            <label class="d-block" for="inputDNI"> DNI </label>
                                        </div>
                                        <div class="col-10">
                                            <input name="dni" type="text" class="form-control form-control-sm" id="inputDNI" maxlength="9" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-10 offset-2">
                                            <small id="error-dni" class="alert alert-danger form-text text-muted d-none">
                                                DNI ya registrado
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-2 d-flex justify-content-end align-items-center">
                                            <label class="d-block" for="inputName"> Nombre </label>
                                        </div>
                                        <div class="col-10">
                                            <input name="name" type="text" class="form-control form-control-sm" id="inputName" maxlength="99" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-2 d-flex justify-content-end align-items-center">
                                            <label class="d-block" for="inputLast"> Apellidos </label>
                                        </div>
                                        <div class="col-10">
                                            <input name="lastName" type="text" class="form-control form-control-sm" id="inputLast" maxlength="99" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-2 d-flex justify-content-end align-items-center">
                                            <label class="d-block" for="inputEmail"> Email </label>
                                        </div>
                                        <div class="col-10">
                                            <input name="email" type="email" class="form-control form-control-sm" id="inputEmail" maxlength="100" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-2 col-lg-2 d-flex justify-content-end align-items-center">
                                            <label class="d-block" for="inputPhone1"> Teléfono </label>
                                        </div>
                                        <div class="col-9 col-lg-4">
                                            <input name="phone1" type="number" class="form-control form-control-sm" id="inputPhone1" maxlength="20" required>
                                        </div>
                                        <div class="col-3 col-lg-2 mt-3 mt-lg-0 d-flex justify-content-end align-items-center">
                                            <label class="d-block" for="inputPhone2"> Teléfono Opcional</label>
                                        </div>
                                        <div class="col-9 col-lg-4  mt-3 mt-lg-0">
                                            <input name="phone2" type="number" class="form-control form-control-sm" id="inputPhone2" maxlength="20" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-2 d-flex justify-content-end align-items-center">
                                            <label class="d-block" for="inputAddress"> Dirección </label>
                                        </div>
                                        <div class="col-10">
                                            <input name="address" type="text" class="form-control form-control-sm" id="inputAddress" maxlength="200" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-2 d-flex justify-content-end align-items-center">
                                            <label class="d-block" for="inputReference"> Referencia  </label>
                                        </div>
                                        <div class="col-10">
                                            <input name="reference" type="text" class="form-control form-control-sm" id="inputReference" maxlength="300" required>
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
                                            <select name="departments" class="custom-select custom-select-sm" id="departments" onchange="changeProvinces()">
                                                <option value="10000" disabled selected>Elegir</option>
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
                                                <option value="Junin">Junin</option>
                                                <option value="La Libertad" >La Libertad</option>
                                                <option value="Lambayeque">Lambayeque</option>
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
                                                <option value="Ucayali">Ucayali</option>
                                            </select>
                                        </div>

                                        <div class="col-3 col-lg-2 mt-3 mt-lg-0 d-flex justify-content-end align-items-center">
                                            <label for="provinces" class="d-block">Provincia</label>
                                        </div>
                                        <div class="col-9 col-lg-4 mt-3 mt-lg-0">
                                            <select name="provinces" class="custom-select custom-select-sm" id="provinces" onchange="changeDistricts()">
                                                <option value="10000" disabled selected>Elegir</option>
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
                                                <option value="10000" disabled selected>Elegir</option>
                                            </select>
                                        </div>

                                        <div class="col-3 col-lg-2 mt-3 mt-lg-0 d-flex justify-content-end align-items-center">
                                            <label for="inputUrb" class="d-block">Urbanización</label>
                                        </div>
                                        <div class="col-9 col-lg-4 mt-3 mt-lg-0">
                                            <input name="urb" type="text" class="form-control form-control-sm" id="inputUrb" placeholder="Opcional">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-4 offset-4">
                                    <button type="submit" class="form-control btn-color">Actualizar</button>
                                </div>
                            </div>

                        </div>
                </div>

                </div>
                <div class="tab-pane fade" id="v-pills-account" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="row">
                        <div class="col-10 offset-1 offset-lg-2 col-lg-8">

                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-3 col-lg-4 d-flex justify-content-end align-items-center">
                                            <label class="d-block" for="inputUser">Usuario </label>
                                        </div>
                                        <div class="col-9 col-lg-8">
                                            <input name="user" type="text" class="form-control form-control-sm" id="inputUser" required>
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
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-3 col-lg-4 d-flex justify-content-end align-items-center">
                                            <label class="d-block" for="inputPass">Contraseña </label>
                                        </div>
                                        <div class="col-9 col-lg-8">
                                            <input name="pass" type="password" class="form-control form-control-sm" id="inputPass" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-3 col-lg-4 d-flex justify-content-end align-items-center">
                                            <label class="d-block" for="inputPass2">Repetir Contraseña </label>
                                        </div>
                                        <div class="col-9 col-lg-8">
                                            <input name="pass2" type="password" class="form-control form-control-sm" id="inputPass2" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-9 offset-3 offset-lg-4 col-lg-8">
                                            <small id="error-pass" class="alert alert-danger form-text text-muted d-none">
                                                Contraseña no coincide
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-6 offset-3">
                                    <button class="btn btn-color form-control" type="submit">Actualizar Datos</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--form id="form-register" method="post" action="/register/register_user">
        <div class="row">
            <div class="col-10 offset-1 offset-lg-0 col-lg-6">
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3 d-flex justify-content-end align-items-center">
                                <label class="d-block" for="inputDNI"> DNI </label>
                            </div>
                            <div class="col-9">
                                <input name="dni" type="text" class="form-control form-control-sm" id="inputDNI" maxlength="9" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-9 offset-3">
                                <small id="error-dni" class="alert alert-danger form-text text-muted d-none">
                                    DNI ya registrado
                                </small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3 d-flex justify-content-end align-items-center">
                                <label class="d-block" for="inputName"> Nombre </label>
                            </div>
                            <div class="col-9">
                                <input name="name" type="text" class="form-control form-control-sm" id="inputName" maxlength="99" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3 d-flex justify-content-end align-items-center">
                                <label class="d-block" for="inputLast"> Apellidos </label>
                            </div>
                            <div class="col-9">
                                <input name="lastName" type="text" class="form-control form-control-sm" id="inputLast" maxlength="99" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3 d-flex justify-content-end align-items-center">
                                <label class="d-block" for="inputEmail"> Email </label>
                            </div>
                            <div class="col-9">
                                <input name="email" type="email" class="form-control form-control-sm" id="inputEmail" maxlength="100" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3 col-lg-3 d-flex justify-content-end align-items-center">
                                <label class="d-block" for="inputPhone1"> Teléfono </label>
                            </div>
                            <div class="col-9 col-lg-3">
                                <input name="phone1" type="number" class="form-control form-control-sm" id="inputPhone1" maxlength="20" required>
                            </div>
                            <div class="col-3 col-lg-3 mt-3 mt-lg-0 d-flex justify-content-end align-items-center">
                                <label class="d-block" for="inputPhone2"> Teléfono Opcional</label>
                            </div>
                            <div class="col-9 col-lg-3  mt-3 mt-lg-0">
                                <input name="phone2" type="number" class="form-control form-control-sm" id="inputPhone2" maxlength="20" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3 d-flex justify-content-end align-items-center">
                                <label class="d-block" for="inputAddress"> Dirección </label>
                            </div>
                            <div class="col-9">
                                <input name="address" type="text" class="form-control form-control-sm" id="inputAddress" maxlength="200" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3 d-flex justify-content-end align-items-center">
                                <label class="d-block" for="inputReference"> Referencia  </label>
                            </div>
                            <div class="col-9">
                                <input name="reference" type="text" class="form-control form-control-sm" id="inputReference" maxlength="300" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3 col-lg-3 d-flex justify-content-end align-items-center">
                                <label for="departments" class="d-block">Departamento</label>
                            </div>
                            <div class="col-9 col-lg-3">
                                <select name="departments" class="custom-select custom-select-sm" id="departments" onchange="changeProvinces()">
                                    <option value="10000" disabled selected>Elegir</option>
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
                                    <option value="Junin">Junin</option>
                                    <option value="La Libertad" >La Libertad</option>
                                    <option value="Lambayeque">Lambayeque</option>
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
                                    <option value="Ucayali">Ucayali</option>
                                </select>
                            </div>

                            <div class="col-3 col-lg-3 mt-3 mt-lg-0 d-flex justify-content-end align-items-center">
                                <label for="provinces" class="d-block">Provincia</label>
                            </div>
                            <div class="col-9 col-lg-3 mt-3 mt-lg-0">
                                <select name="provinces" class="custom-select custom-select-sm" id="provinces" onchange="changeDistricts()">
                                    <option value="10000" disabled selected>Elegir</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3 col-lg-3 d-flex justify-content-end align-items-center">
                                <label for="districts" class="d-block">Distrito</label>
                            </div>
                            <div class="col-9 col-lg-3">
                                <select name="districts" class="custom-select custom-select-sm" id="districts">
                                    <option value="10000" disabled selected>Elegir</option>
                                </select>
                            </div>

                            <div class="col-3 col-lg-3 mt-3 mt-lg-0 d-flex justify-content-end align-items-center">
                                <label for="inputUrb" class="d-block">Urbanización</label>
                            </div>
                            <div class="col-9 col-lg-3 mt-3 mt-lg-0">
                                <input name="urb" type="text" class="form-control form-control-sm" id="inputUrb" placeholder="Opcional">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10 offset-1 offset-lg-0 col-lg-6">

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3 col-lg-4 d-flex justify-content-end align-items-center">
                                <label class="d-block" for="inputUser">Usuario </label>
                            </div>
                            <div class="col-9 col-lg-8">
                                <input name="user" type="text" class="form-control form-control-sm" id="inputUser" required>
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
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3 col-lg-4 d-flex justify-content-end align-items-center">
                                <label class="d-block" for="inputPass">Contraseña </label>
                            </div>
                            <div class="col-9 col-lg-8">
                                <input name="pass" type="password" class="form-control form-control-sm" id="inputPass" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3 col-lg-4 d-flex justify-content-end align-items-center">
                                <label class="d-block" for="inputPass2">Repetir Contraseña </label>
                            </div>
                            <div class="col-9 col-lg-8">
                                <input name="pass2" type="password" class="form-control form-control-sm" id="inputPass2" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-9 offset-3 offset-lg-4 col-lg-8">
                                <small id="error-pass" class="alert alert-danger form-text text-muted d-none">
                                    Contraseña no coincide
                                </small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-6 offset-3">
                        <button class="btn btn-color form-control" type="submit">Actualizar Datos</button>
                    </div>
                </div>

            </div>
        </div>
    </form-->
</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/public/libraries/js/sweetAlert2.js"></script>
<script src="/public/js/coproduc_user_update.js.min.js"></script>
</body>
</html>