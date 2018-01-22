
var nav = $('#navbar');
var link = $('.nav-link');


$(document).ready(function () {

    if($(document).scrollTop() > nav.height()) {
        $(nav).removeClass('navbar-on-top');
        $(nav).addClass('navbar-on-down');
        $(nav).removeClass('bg-transparent');
        $(nav).addClass('bg-white');
        $(nav).addClass('navbar-border-botton');
        $(link).removeClass('links-color-white');
        $(link).addClass('links-color-dark');
    }
    else{
        $(nav).addClass('navbar-on-top');
        $(nav).removeClass('navbar-on-down');
        $(nav).addClass('bg-transparent');
        $(nav).removeClass('bg-white');
        $(nav).removeClass('navbar-border-botton');
        $(link).addClass('links-color-white');
        $(link).removeClass('links-color-dark');
    }
});



var time = 1500;

$(window).scroll(function () {

    if($(document).scrollTop() > nav.height()) {
        $(nav).removeClass('navbar-on-top');
        $(nav).addClass('navbar-on-down');
        $(nav).removeClass('bg-transparent');
        $(nav).addClass('bg-white');
        $(nav).addClass('navbar-border-botton');
        $(link).removeClass('links-color-white');
        $(link).addClass('links-color-dark');
    }
    else{
        $(nav).addClass('navbar-on-top');
        $(nav).removeClass('navbar-on-down');
        $(nav).addClass('bg-transparent');
        $(nav).removeClass('bg-white');
        $(nav).removeClass('navbar-border-botton');
        $(link).addClass('links-color-white');
        $(link).removeClass('links-color-dark');
    }
});


$("#nav-home--large, #nav-home--smal").click(function() {
    $('html, body').animate({
        'scrollTop': $("#home").offset().top
    }, time);
});

$("#nav-products--large").click(function () {
    var offset = 30;
    $('html,body').animate({
        'scrollTop' : $("#products-title").offset().top - offset
    }, time)
});

$("#nav-us--large").click(function () {
    var offset = 30;
    $('html,body').animate({
        'scrollTop' : $("#us").offset().top - offset
    },time)
});

$("#nav-contact--large").click(function () {
    var offset = 30;
    $('html,body').animate({
        'scrollTop' : $("#contact").offset().top - offset
    },time)
});

/*
function alert() {
    swal({
        title: '',
        text: 'Mensaje enviado con éxito',
        type: 'success',
        confirmButtonText: 'Aceptar'
    })
}
*/