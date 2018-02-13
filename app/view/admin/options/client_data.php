<?php
require_once __DIR__ . '/../../../model/User.php';

if(is_array($id)){
    $dni = $id[0];
}

$u = new User();
$data = $u->getUserDataByDni($dni);
$data = $data[0];

$districts = ['La Esperanza','Víctor Larco ','Trujillo','El Porvenir','Huanchaco','Florencia de Mora',
    'Laredo', 'Moche', 'Salaverry', 'Poroto', 'Simbal'];

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
    <!--link rel="stylesheet" href="/public/css/admin_client_data.css"-->

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

        <div class="row mt-4 mb-2">
            <div class="col-10 offset-1 ">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-config" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="row mt-3 mt-lg-0">
                            <div class="col-8 ">
                                <p>En esta sección puede ver sus datos generales.</p>
                            </div>
                            <div class="col-4 d-flex justify-content-end">
                                <!--form id="form_eliminate" action="/admin/client_eliminate" method="post"-->
                                    <!--input name="dni" type="hidden" value="<?= $data['dni'] ?>"-->
                                    <button id="btn_eliminate" type="button" class="btn btn-danger">Eliminar</button>
                                <!--/form-->
                            </div>
                            
                        </div>
                        <div class="row ">
                            <div class="col-12">
                                <form id="form_update_data" action="/user/update_data" method="post">

                                    <!-- data default --->
                                    <input id="dni_old" name="dni_old" type="hidden" value="<?= $data['dni'] ?>">
                                    <input name="id_ubication" type="hidden" value="<?= $data['id_ubication'] ?>">

                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-3 col-lg-2 d-flex justify-content-end align-items-center">
                                                    <label for="inputDNI"> DNI </label>
                                                </div>
                                                <div class="col-9 col-lg-10">
                                                    <input  name="dni_new" value="<?= $data['dni'] ?>" type="number" class="form-control form-control-sm" id="inputDNI" max="99999999" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-9 col-lg-10 offset-3 offset-lg-2">
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
                                            <button type="submit" class="form-control btn-primary">Actualizar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div><!-- Main Col END -->

    <!-- pagination -->



</div><!-- body-row END -->

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/public/libraries/js/sweetAlert2.js"></script>
<script src="/public/js/admin_client_data.min.js"></script>

</body>
</html>