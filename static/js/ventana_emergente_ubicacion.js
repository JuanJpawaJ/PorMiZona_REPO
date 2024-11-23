// Obtener los elementos de los botones y los divs
const boton1 = document.getElementById('boton1');
const boton2 = document.getElementById('boton2');
const div1 = document.getElementById('div1');
const div2 = document.getElementById('div2');

const boton_select_ubi = document.getElementById('select_ubi');
const ventana_emergente_ubi = document.getElementById('ventana_emergente_ubicacion');

const boton_activar_ubi = document.getElementById('activar_ubi');
const boton_aceptar_ciudad = document.getElementById('aceptar_ciudad');

// Función para mostrar div1 y ocultar div2
boton1.addEventListener('click', function() {
    div1.style.display = 'flex';  // Muestra div1
    div2.style.display = 'none';   // Oculta div2
    boton1.classList.add('seleccionado');
    boton2.classList.remove('seleccionado');
});

// Función para mostrar div2 y ocultar div1
boton2.addEventListener('click', function() {
    div1.style.display = 'none';   // Oculta div1
    div2.style.display = 'flex';  // Muestra div2
    boton2.classList.add('seleccionado');
    boton1.classList.remove('seleccionado');
});


boton_select_ubi.addEventListener('click', function() {
    if (ventana_emergente_ubi.style.display === 'none') {
        ventana_emergente_ubi.style.display = 'block'; // Muestra el div
    } else {
        ventana_emergente_ubi.style.display = 'none'; // Oculta el div
    }
});


boton_activar_ubi.addEventListener('click', function(){
    ventana_emergente_ubi.style.display = 'none';
});

boton_aceptar_ciudad.addEventListener('click', function(){
    ventana_emergente_ubi.style.display = 'none';
});


const ubicacionText_mismo = boton_select_ubi.querySelector('p');


const selectElement = document.getElementById('selector_ciudad');

boton_aceptar_ciudad.addEventListener('click', function() {
    // Obtiene el texto de la opción seleccionada
    const selectedOption = selectElement.options[selectElement.selectedIndex].value;
	const selectedOptionText = selectElement.options[selectElement.selectedIndex].text;
    
    // Modifica el contenido del p con el texto de la opción seleccionada
    ubicacionText_mismo.textContent = selectedOptionText;

    latitudInput.value = "";
    longitudInput.value = "";
    ciudadInput.value = selectedOption
});

document.querySelector('.principal').addEventListener('submit', function (event) {
    if (ubicacionText_mismo.textContent == "Seleccionar ubicación") {
        event.preventDefault();
        alert('Por favor, selecciona tu ubicación antes de buscar.');
    }
});