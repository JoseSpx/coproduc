
$("#form_order_update").bind("submit", function () {

    $.ajax({
        type : $(this).attr("method"),
        url : $(this).attr("action"),
        data : $(this).serialize(),
        
        beforeSend : function (xhr) {
            let quantity = document.getElementById("inputQuantity").value;
            let quantityError = document.getElementById("quantity-error");
            if (isFloat(quantity)){
                if (!quantityError.classList.contains("d-none")){
                    quantityError.classList.add("d-none");
                }
            }
            else{
                if (quantityError.classList.contains("d-none")){
                    quantityError.classList.remove("d-none");
                }
                xhr.abort();

            }


            let priceUnit = document.getElementById("inputPriceUnit").value;
            let priceUnitError = document.getElementById("priceUnit-error");
            if (isFloat(priceUnit)){
                if (!priceUnitError.classList.contains("d-none")){
                    priceUnitError.classList.add("d-none");
                }
            }
            else{
                if (priceUnitError.classList.contains("d-none")){
                    priceUnitError.classList.remove("d-none");
                }
                xhr.abort();
            }

        },
        
        success : function (response) {
            if (response === "true"){
                swal(
                    'Pedido Actualizado',
                    '',
                    'success'
                )
            }
            else{
                swal(
                    'Ocurrió una acción inesperada',
                    '',
                    'error'
                )
            }
        },
        
        
        error : function () {
            swal(
                'Ocurrió una acción inesperada',
                '',
                'error'
            )
        }
    });
    
    return false;

});