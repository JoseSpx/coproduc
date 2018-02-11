
$("#form_pay").bind("submit", function () {

    $.ajax({

        type : $(this).attr('method'),
        url  : $(this).attr('action'),
        data : $(this).serialize(),

        beforeSend : function (xhr) {
            verifyCbx(xhr);
            verifyIfCodeIsInteger(xhr);
            verifyIfMontoIsFloat(xhr);
        },

        success : function (response) {
            alert("suceess");
        },

        error : function () {
            alert("error");
        }

    });

    return false;

});

function verifyCbx(xhr) {
    let cbx = document.getElementById("inputCbx");
    if (!cbx.checked){
        /*let error = document.getElementById("monto-error");
        if (error.classList.contains("d-none")){
            error.classList.remove("d-none");
        }*/
        xhr.abort();
    }
}


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