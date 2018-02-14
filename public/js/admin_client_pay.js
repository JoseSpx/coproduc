
$("#eliminate_order").click(function (e) {

    e.preventDefault();

    swal({
        title: '¿Estás Seguro?',
        text: "¡Se eliminará el pago!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'No'
    }).then(function (result) {
        if (result.value) {
            window.location.href = $("#eliminate_order").attr("href");
        }
    });

});


$("#form_pay").bind("submit", function () {

    $.ajax({

        type: $(this).attr("method"),
        url : $(this).attr("action"),
        data : $(this).serialize(),

        beforeSend : function (xhr) {
            verifyIfCodeIsInteger(xhr);
            verifyIfMontoIsFloat(xhr);
        },

        success : function (response) {
            swal(
                "Datos Actualizados",
                '',
                'success'
            )
        },

        error : function () {
            swal(
                "Ocurrio una accion inesperada",
                '',
                'error'
            )
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