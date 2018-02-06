

$("#form-admin").bind("submit", function () {

    $.ajax({
        type : $(this).attr('method'),
        url : $(this).attr('action'),
        data : $(this).serialize(),

        success : function (response) {
            if (response === 'true'){
                window.location.href = '/admin/main';
            }
            else{
                swal({
                    title: 'Datos Incorrectos',
                    text: "",
                    type: 'error',
                    confirmButtonColor: '#F07925',
                    confirmButtonText: 'Aceptar'
                });
            }

        },

        error : function () {
            swal({
                title: 'Datos Incorrectos',
                text: "",
                type: 'error',
                confirmButtonColor: '#F07925',
                confirmButtonText: 'Aceptar'
            });
        }

    });

    return false;

});