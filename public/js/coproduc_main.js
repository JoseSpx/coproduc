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

    let data1 = document.getElementsByClassName("user_no_registered_1");
    let data2 = document.getElementsByClassName("user_no_registered_2");

    for (let i = 0 ; i < data1.length ; i++){
        if(data1[i].classList.contains("d-none")){
            data1[i].classList.remove("d-none");
        }

        if(!data2[i].classList.contains("d-none")){
            data2[i].classList.add("d-none");
        }

    }

});


function isNumberKey(evt) {
    let charCode = (evt.which) ? evt.which : evt.keyCode;
    return (charCode === 8 || (charCode >= 48 && charCode <= 57 ));
}





