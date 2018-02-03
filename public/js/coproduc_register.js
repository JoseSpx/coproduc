let libertad_provinces = [
    'Viru','Ascope','Bolivar','Chepen','Gran Chimu','Julcan,Otuzco','Pacasmayo','Pataz', 'Sanchez Carrion', 'Santiago de Chuco', 'Trujillo'
];

let libertad_districts = [
    "El Porvenir","Florencia De Mora","Huanchaco","La Esperanza", "Moche", "Salaverry", "Simbal", "Trujillo", "Victor Larco"
];

function changeProvinces() {
    let depar = document.getElementById("departments").value;
    //console.log(depar);
    if (depar === "La Libertad") {
        $('#provinces').html('');
        $.each(libertad_provinces, function (index, value) {
            $('#provinces').append($('<option/>', {
                value: value,
                text: value
            }));
        });
    }
}

function changeDistricts() {
    let province = document.getElementById("provinces").value;
    //console.log(depar);
    if (province === "Trujillo") {
        $('#districts').html('');
        $.each(libertad_districts, function (index, value) {
            $('#districts').append($('<option/>', {
                value: value,
                text: value
            }));
        });
    }
}