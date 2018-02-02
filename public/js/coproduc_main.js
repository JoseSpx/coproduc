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
                $("#alert-error").toggleClass("d-none");//alert(response);
            }
        },

        error : function () {
            $("#alert-error").toggleClass("d-none");
            //alert("error code");
        }

    });

    return false;
});
















