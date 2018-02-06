

$("#form-admin").bind("submit", function () {

    $.ajax({
        type : $(this).attr('method'),
        url : $(this).attr('action'),
        data : $(this).serialize(),

        success : function (response) {
            if (response === 'true'){

            }

        },

        error : function () {

        }

    });

    return false;

});