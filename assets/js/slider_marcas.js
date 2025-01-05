document.addEventListener("DOMContentLoaded", function() {
    // Obtener el contenedor del slider
    var sliderTrack = document.getElementById("sliderTrack");

    // Obtener las imágenes originales
    var originalSlides = sliderTrack.querySelectorAll(".slide");

    // Clonar y agregar los divs de imágenes originales al slider según sea necesario
    var totalSlides = originalSlides.length;
    for (var i = 0; i < totalSlides * 2; i++) {
        var originalSlide = originalSlides[i % totalSlides]; // Utilizamos el operador de módulo para ciclar los divs de imágenes
        var clonedSlide = originalSlide.cloneNode(true); // Clonar el div de la imagen
        sliderTrack.appendChild(clonedSlide); // Agregar el clon al slider
    }

    var rootStyle = document.documentElement.style;

    // Modificar el valor de la variable CSS
    rootStyle.setProperty('--cantidad_de_imagenes_de_marca', totalSlides.toString());

});

