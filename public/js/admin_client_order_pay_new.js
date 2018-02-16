
$("#canceled_order").click(function () {
    window.history.back();
});


$("#form_pay").bind("submit", function () {

    $.ajax({

        type : $(this).attr('method'),
        url  : $(this).attr('action'),
        data : $(this).serialize(),

        beforeSend : function (xhr) {
            verifyIfCodeIsInteger(xhr);
            verifyIfMontoIsFloat(xhr);
        },

        success : function (response) {
            if (response === 'true'){
                swal({
                    title: 'Pago Registrado',
                    text: "",
                    type: 'success',
                    confirmButtonText: 'Aceptar'
                }).then(function () {
                    window.history.back();
                });
            }
            else{
                swal({
                    title: 'No se pudo registrar el pago',
                    text: "",
                    type: 'error',
                    confirmButtonText: 'Aceptar'
                });
            }
        },

        error : function () {
            swal({
                title: 'No se pudo registrar el pago',
                text: "",
                type: 'error',
                confirmButtonText: 'Aceptar'
            });
        }

    });

    return false;

});



function verifyIfMontoIsFloat(xhr) {
    let monto = document.getElementById("inputMonto").value;
    let band = isFloat(monto);

    if (!band){
        let error = document.getElementById("monto-error");
        if (error.classList.contains("d-none")){
            error.classList.remove("d-none");
        }
        xhr.abort();
    }
    else{
        let error = document.getElementById("monto-error");
        if (!error.classList.contains("d-none")){
            error.classList.add("d-none");
        }
    }
}

function verifyIfCodeIsInteger(xhr) {
    let code = document.getElementById("inputCode").value;
    let band = isInteger(code);

    if (!band){
        let error = document.getElementById("code-error");
        if (error.classList.contains("d-none")){
            error.classList.remove("d-none");
        }
        xhr.abort();
    }
    else{
        let error = document.getElementById("code-error");
        if (!error.classList.contains("d-none")){
            error.classList.add("d-none");
        }
    }
}