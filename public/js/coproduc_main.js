$(function () {

    $('body').scrollspy({
        target: '#navbar',
        offset: 150
    });


    $(".scroll").click(function (e) {
        e.preventDefault();
        $('html,body').animate({scrollTop : $(this.hash).offset().top - 100}, 1200 );

    });

});