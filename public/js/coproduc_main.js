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
















