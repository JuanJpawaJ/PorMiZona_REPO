
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