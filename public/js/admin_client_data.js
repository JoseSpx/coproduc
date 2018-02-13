/*
$("#form_update_username").bind("submit",function () {

    $.ajax({
        type : $(this).attr('method'),
        url : $(this).attr('action'),
        data : $(this).serialize(),

        success : function (response) {
            if (response === 'true'){
                swal({
                    title: 'Actualizado',
                    text : 'Nombre de usuario se actualizó',
                    type: 'success',
                    confirmButtonColor: '#FFD238',
                    confirmButtonText: 'Aceptar'
                });
            }
            else{
                swal({
                    title: 'Ocurrio una acción inesperada',
                    text : '',
                    type : 'error',
                    confirmButtonColor: '#FFD238',
                    confirmButtonText: 'Aceptar'
                });
            }
        },
        error : function () {
            swal({
                title: 'Ocurrio una acción inesperada',
                text : '',
                type : 'error',
                confirmButtonColor: '#FFD238',
                confirmButtonText: 'Aceptar'
            });
        }

    });

    return false;

});
*/

$("#form_update_data").bind("submit", function () {

    $.ajax({
        type : $(this).attr('method'),
        url : $(this).attr('action'),
        data : $(this).serialize(),

        success : function (response) {
            if (response === 'true'){
                swal({
                    title: 'Actualizado',
                    text : 'Los datos se actualizaron',
                    type: 'success',
                    confirmButtonText: 'Aceptar'
                }).then(function () {
                    let id = document.getElementById("inputDNI").value;
                    window.location.href = "/admin/client_data/" + id;
                });
            }
            else if (response === 'dni_exists'){
                let dni = document.getElementById("error-dni");
                if (dni.classList.contains("d-none")){
                    dni.classList.remove("d-none");
                }
            }
            else{
                swal({
                    title: 'Ocurrio una acción inesperada',
                    text : '',
                    type: 'error',
                    confirmButtonColor: '#FFD238',
                    confirmButtonText: 'Aceptar'
                });
            }
        },
        error : function () {
            swal({
                title: 'Ocurrio una acción inesperada',
                text : '',
                type: 'error',
                confirmButtonColor: '#FFD238',
                confirmButtonText: 'Aceptar'
            });
        }

    });

    return false;

});


$("#btn_eliminate").click(function () {

    swal({
        title: '¿ Seguro de eliminar cliente ?',
        text: "",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar',
        cancelButtonText : "Cancelar"
    }).then((result) => {
        if (result.value) {
            let dni = document.getElementById("dni_old").value;
            window.location.href = "/admin/client_eliminate/" + dni;
        }
    })


});


/*
$("#btn_view_pass").click(function () {
    let pass = $("#inputPass");
    if (pass.attr("type") === 'text'){
        pass.attr("type","password");
    }
    else{
        pass.attr("type","text");
    }
});

*/