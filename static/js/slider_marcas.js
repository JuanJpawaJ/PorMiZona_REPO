document.addEventListener("DOMContentLoaded", function() {
    function configureSlider(sliderId) {
        // Obtener el contenedor del slider
        var sliderTrack = document.getElementById(sliderId);

        // Verificar que el slider exista
        if (!sliderTrack) return;

        // Obtener las imágenes originales
        var originalSlides = sliderTrack.querySelectorAll(".slide");

        // Clonar y agregar los divs de imágenes originales al slider según sea necesario
        var totalSlides = originalSlides.length;
        for (var i = 0; i < totalSlides * 2; i++) {
            var originalSlide = originalSlides[i % totalSlides]; // Utilizamos el operador de módulo para ciclar los divs de imágenes
            var clonedSlide = originalSlide.cloneNode(true); // Clonar el div de la imagen
            sliderTrack.appendChild(clonedSlide); // Agregar el clon al slider
        }

        // Modificar el valor de la variable CSS
        var rootStyle = document.documentElement.style;
        rootStyle.setProperty('--cantidad_de_imagenes_de_marca', totalSlides.toString());
    }

    // Configurar sliders para los IDs sliderTrack y sliderTrack2
    configureSlider("sliderTrack");
    configureSlider("sliderTrack2");
});

