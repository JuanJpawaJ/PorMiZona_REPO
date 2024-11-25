document.addEventListener("DOMContentLoaded", function() {
    const navbar = document.querySelector("#navbar");

    window.addEventListener("scroll", function() {
        // Detectar si el usuario ha hecho scroll
        if (window.scrollY > 50) {
            navbar.classList.remove("transparente");
            navbar.classList.add("color");
        } else {
            navbar.classList.remove("color");
            navbar.classList.add("transparente");
        }
    });
});

const boton = document.getElementById('boton_hamburguesa');
const cont_menu = document.getElementById('menu');


boton_hamburguesa.addEventListener('click', () => {
    if (cont_menu.style.display === 'none' || cont_menu.style.display === '') {
        cont_menu.style.display = 'flex'; // Mostrar el div
    } else {
        cont_menu.style.display = 'none'; // Ocultar el div
    }
});