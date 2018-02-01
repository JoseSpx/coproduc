
$("#form-contact").bind("submit",function () {

    $.ajax({
        type : $(this).attr("method"),
        url : $(this).attr("action"),
        data : $(this).serialize(),

        beforeSend: function () {
            swal({
                text : 'Enviando Mensaje',
                timer : 2000,
                onOpen: function () {
                    swal.showLoading();
                }
            });
        },

        success : function (response) {
            if (response === 'true'){
                swal({
                    title: 'Mensaje Enviado',
                    text : '',
                    type: 'success',
                    confirmButtonColor: '#FFD238',
                    confirmButtonText: 'Aceptar'
                });
            }
            else{
                swal({
                    title: 'Mensaje No Enviado',
                    text : '',
                    type : 'error',
                    confirmButtonColor: '#FFD238',
                    confirmButtonText: 'Aceptar'
                });
            }
        },
        
        error : function () {
            swal({
                title : 'Mensaje No Enviado',
                text : 'Ocurrio un error al enviar el mensaje',
                type : 'error',
                confirmButtonColor : '#FFD238',
                confirmButtonText : 'Aceptar'
            });
        }
    });

    return false;
});