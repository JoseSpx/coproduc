$('body').scrollspy({
    target: '#navbar',
    offset: 150
});


$(".scroll").click(function (e) {
    e.preventDefault();
    $('html,body').animate({scrollTop : $(this.hash).offset().top - 100}, 1200 );

});


$("#form-login").bind("submit", function () {
    $.ajax({
        type: $(this).attr('method'),
        url : $(this).attr('action'),
        data : $(this).serialize(),

        success: function (response) {
            if (response === 'true'){
                //alert(response);
                location.reload();
            }
            else{
                let divError = $("#alert-error");
                if(divError.hasClass("d-none")){
                    divError.removeClass("d-none");
                }
            }
        },

        error : function () {
            let divError = $("#alert-error");
            if(divError.hasClass("d-none")){
                divError.removeClass("d-none");
            }
        }

    });

    return false;
});


$(".form-modal").bind("submit",function () {

    $.ajax({
        type : $(this).attr('method'),
        url : $(this).attr('action'),
        data : $(this).serialize(),

        success : function (response) {
            if (response === 'true'){
                swal('Pedido Realizado');
                $(".modal").modal('hide');
            }
            else if (response === 'false'){
                swal('No se puede realizar el pedido');
                //$(".modal").modal('hide');
            }
            else if (response === 'cbx'){
                swal('Confirme el pedido');
            }
            else{
                let no_client = document.getElementById(response + "_no_client");
                if (no_client.classList.contains("d-none")){
                    no_client.classList.remove("d-none");
                }

                let data_main = document.getElementById(response + "_no_client_2");
                if (data_main.classList.contains("d-none") === false){
                    data_main.classList.add("d-none");
                }
            }
        },

        error : function () {
            swal('No se puede realizar el pedido - error');
            $(".modal").modal('hide');
        }


    });

    return false;

});


$(".btn-modal").click(function () {
    $(".na_te").val("");
});












