$(function () {

    $("#cancel").click(function () {

        swal({
            title: '¿Estás Seguro?',
            text: "¡No se guardarán los cambios realizados!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si',
            cancelButtonText: 'No'
        }).then(function (result) {
            if (result.value) {
                window.location.href = "/cpanel/products";
            }
        });

    });

});


$("#form").bind("submit", function () {
    //console.log($(this).attr('action'));

    let formData = new FormData(this);

    $.ajax({
        type : $(this).attr('method'),
        url : $(this).attr('action'),
        data : formData,
        contentType: false,
        cache: false,
        processData: false,
        beforeSend : function () {
            swal({
                text : 'Registrando Producto',
                timer : 3000,
                onOpen : function () {
                    swal.showLoading();
                }
            });
            //console.log("enviando");
        },
        success: function (response) {
            //alert(response);
            if (response === "true"){
                swal({
                    title: 'Producto Registrado',
                    text: "",
                    type: 'success',
                    confirmButtonColor: '#E19D9D',
                    confirmButtonText: 'Aceptar'
                }).then(function (result) {
                    if (result.value) {
                        window.location.href = '/admin/products';
                    }
                });
                //console.log("se envio sms");
            }
            else if(response === "img-size"){
                swal({
                    title: 'Imagen',
                    text: "El peso de la imagen supera los 500kb",
                    type: 'error',
                    confirmButtonColor: '#E19D9D',
                    confirmButtonText: 'Aceptar'
                });
                //console.log("no se pudo enviar envio sms");
            }
            else if(response === "img-ext"){
                swal({
                    title: 'Imagen',
                    text: "Solo se permiten exteniones png o jpg",
                    type: 'error',
                    confirmButtonColor: '#E19D9D',
                    confirmButtonText: 'Aceptar'
                });
                //console.log("no se pudo enviar envio sms");
            }
            else if(response === "false"){
                swal({
                    title: 'Error al crear nuevo producto',
                    text: "",
                    type: 'error',
                    confirmButtonColor: '#E19D9D',
                    confirmButtonText: 'Aceptar'
                });
                //console.log("no se pudo enviar envio sms");
            }
        },
        error: function () {
            swal({
                title: 'No se puede crear un nuevo producto',
                text: "",
                type: 'error',
                confirmButtonColor: '#E19D9D',
                confirmButtonText: 'Aceptar'
            });
        }
    });

    return false;

});


function previewImage() {
    let oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("img").files[0]);

    oFReader.onload = function (oFREvent) {
        document.getElementById("img-prev").src = oFREvent.target.result;
    };
}

