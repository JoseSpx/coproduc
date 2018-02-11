
function isFloat(value) {
    let band = true;
    let nroPoints = 0;

    for (let i = 0; i <value.length ; i++){
        if (!Number.isInteger(parseInt(value[i]))){

            if (value[i] === '.'){
                nroPoints++;
            }
            else{
                band = false;
                break;
            }

        }

    }

    if (nroPoints >= 2){
        band = false;
    }


    return band;
}

function isInteger(value) {
    let band = true;
    for (let i = 0; i <value.length ; i++){
        if (!Number.isInteger(parseInt(value[i]))){
            band = false;
            break;
        }
    }

    return band;
}