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
