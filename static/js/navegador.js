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

var boton_hamburguesa = document.getElementById("boton_hamburguesa");
var elementos_navegador = document.getElementById("cont_elementos_navegador");

var boton_desplegado = false;

function desplegarBotonHamburguesa(){
    if(boton_desplegado == false){
        elementos_navegador.style.display = "block"
        boton_desplegado = true;
        console.log(boton_desplegado);
    }else{
        elementos_navegador.style.display = "none"
        boton_desplegado = false;
        console.log(boton_desplegado);
    }
}
