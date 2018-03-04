
$("#form_search").bind("submit", function () {

    $.ajax({
        type : $(this).attr('method'),
        url : $(this).attr('action'),
        data : $(this).serialize(),

        success : function (response) {

            //console.log(response);
            //console.log("tam : " + response.length);
            //console.log("data response[0]['name'] : " + response[0]['name']);

            $("#table_body").empty();

            if (response === 'false' || response === null){
                return;
            }

            let tableBody = document.getElementById("table").getElementsByTagName("tbody")[0];



            let  newRow, newCell, newText;

            for(let i = 0; i < response.length ; i++){
                newRow = tableBody.insertRow(tableBody.rows.length);

                newCell = newRow.insertCell(0);
                newText = document.createTextNode((i+1).toString());
                newCell.appendChild(newText);
                newCell.style.textAlign = 'center';

                newCell = newRow.insertCell(1);
                newText = document.createTextNode(response[i]['name']);
                newCell.appendChild(newText);
                newCell.style.textAlign = 'center';

                newCell = newRow.insertCell(2);
                newText = document.createTextNode(response[i]['description']);
                newCell.appendChild(newText);
                newCell.style.textAlign = 'center';

                newCell = newRow.insertCell(3);
                newText = document.createTextNode(response[i]['total_quantity']);
                newCell.appendChild(newText);
                newCell.style.textAlign = 'center';


                /*for(let j = 0; j < response[i].length ; j++){
                    let newCell = newRow.insertCell(j);
                    let newText = document.createTextNode(response[i][j]);
                    newCell.appendChild(newText);
                }*/
            }

        },

        error : function () {
            swal({
                title: 'Error al realizar la búsqueda',
                text: "",
                type: 'error',
                confirmButtonText: 'Aceptar'
            });
        }

    });

    return false;

});