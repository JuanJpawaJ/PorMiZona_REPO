const selectUbiButton = document.getElementById('select_ubi');
const botonActivarUbi = document.getElementById('activar_ubi');
const ubicacionText = selectUbiButton.querySelector('p');
const latitudInput = document.getElementById('latitud');
const longitudInput = document.getElementById('longitud');
const ciudadInput = document.getElementById('ciudad');

let latitud = null;
let longitud = null;


botonActivarUbi.addEventListener('click', function () {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            // Obtiene las coordenadas
            latitud = position.coords.latitude;
            longitud = position.coords.longitude;

            ubicacionText.textContent = `Lat: ${latitud.toFixed(5)}, Lon: ${longitud.toFixed(5)}`;

            latitudInput.value = latitud;
            longitudInput.value = longitud;
            ciudadInput.value = ""

        }, function (error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    ubicacionText.textContent = "Permiso denegado";
                    break;
                case error.POSITION_UNAVAILABLE:
                    ubicacionText.textContent = "Ubicación no disponible";
                    break;
                case error.TIMEOUT:
                    ubicacionText.textContent = "Tiempo de espera agotado";
                    break;
                default:
                    ubicacionText.textContent = "Error desconocido";
                    break;
            }
        });
    } else {
        ubicacionText.textContent = "Geolocalización no soportada";
    }
});

document.querySelector('.principal').addEventListener('submit', function (event) {
    if (!latitud && !longitud && !ciudad) {
        event.preventDefault();
        alert('Por favor, selecciona tu ubicación antes de buscar.');
    }
});