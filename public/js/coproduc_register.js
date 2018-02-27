let libertad_provinces = [
    'Viru','Ascope','Bolivar','Chepen','Gran Chimu','Julcan,Otuzco','Pacasmayo','Pataz', 'Sanchez Carrion', 'Santiago de Chuco', 'Trujillo'
];

let libertad_districts = [
    "El Porvenir","Florencia De Mora","Huanchaco","La Esperanza", "Moche", "Salaverry", "Simbal", "Trujillo", "Victor Larco"
];

function changeProvinces() {
    let depar = document.getElementById("departments").value;
    //console.log(depar);
    if (depar === "La Libertad") {
        $('#provinces').html('');
        $.each(libertad_provinces, function (index, value) {
            $('#provinces').append($('<option/>', {
                value: value,
                text: value
            }));
        });
    }
}

function changeDistricts() {
    let province = document.getElementById("provinces").value;
    //console.log(depar);
    if (province === "Trujillo") {
        $('#districts').html('');
        $.each(libertad_districts, function (index, value) {
            $('#districts').append($('<option/>', {
                value: value,
                text: value
            }));
        });
    }
}


/*
* Register User function
* */

function validatePasswords(xhr) {
    let pass1 = document.getElementById("inputPass").value;
    let pass2 = document.getElementById("inputPass2").value;
    let alertError = document.getElementById("error-pass");
    if (pass1 !== pass2){
        xhr.abort();
        if (alertError.classList.contains("d-none")){
            alertError.classList.remove("d-none");
        }
    }
    else{
        if (!alertError.classList.contains("d-none")){
            alertError.classList.add("d-none");
        }
    }
}

$("#form-register").bind("submit",function () {
   $.ajax({
       type : $(this).attr('method'),
       url : $(this).attr('action'),
       data: $(this).serialize(),
       beforeSend : function (xhr) {
           validatePasswords(xhr);
       },
       success : function (response) {
        //alert("exito");
           let alertDni = document.getElementById("error-dni");
           let alertUser = document.getElementById("error-user");

           if (response.dni === 'true'){
               if (alertDni.classList.contains("d-none")){
                   alertDni.classList.remove("d-none");
               }
           }
           else{
               if (!alertDni.classList.contains("d-none")){
                   alertDni.classList.add("d-none");
               }
           }

           if (response.user === 'true'){
               if (alertUser.classList.contains("d-none")){
                   alertUser.classList.remove("d-none");
               }
           }
           else{
               if (!alertUser.classList.contains("d-none")){
                   alertUser.classList.add("d-none");
               }
           }

           if (response.ok === 'true'){
               swal({
                   title: 'Usuario Registrado',
                   text : '',
                   type: 'success',
                   confirmButtonColor: '#FFD238',
                   confirmButtonText: 'Aceptar'
               }).then(function () {
                   window.location.href = "/";
               });
           }
           else{
               //swal("Ocurrió un error inseperado");
           }

       },
       error : function (response) {
           alert(response);
       },
       complete : function () {
           
       }
   });

   return false;

});

/*

$(function () {
   $("#inputDNI").val("76197141");
   $("#inputName").val("jose alfred");
   $("#inputLast").val("suarez");
   $("#inputEmail").val("jose@gmail.com");
   $("#inputPhone1").val("123");
   $("#inputPhone2").val("123");
   $("#inputAddress").val("calle");
   $("#inputReference").val("taxi");
   $("#departments").val("La Libertad");
   $("#inputUrb").val("La rinconada");
   $("#inputUser").val("admin");
   $("#inputPass").val("123");
   $("#inputPass2").val("123");
});

*/