var boton_hamburguesa = document.getElementById("boton_hamburguesa");
var elementos_navegador = document.getElementById("cont_elementos_navegador");

var boton_desplegado = false;

function desplegarBotonHamburguesa() {
    console.log("Botón hamburguesa clicado"); // Log para verificar si la función se ejecuta
    if (boton_desplegado == false) {
        elementos_navegador.style.display = "block";
        boton_desplegado = true;
    } else {
        elementos_navegador.style.display = "none";
        boton_desplegado = false;
    }
}
