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

$("#form_update_pass").bind("submit", function () {

    $.ajax({
        type : $(this).attr('method'),
        url : $(this).attr('action'),
        data : $(this).serialize(),

        success : function (response) {
            if (response === 'true'){
                swal({
                    title: 'Actualizado',
                    text : 'La contraseña se actualizó',
                    type: 'success',
                    confirmButtonColor: '#FFD238',
                    confirmButtonText: 'Aceptar'
                });
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

$("#btn_view_pass").click(function () {
    let pass = $("#inputPass");
    if (pass.attr("type") === 'text'){
        pass.attr("type","password");
    }
    else{
        pass.attr("type","text");
    }
});