document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.slider');
    const slides = slider.querySelectorAll('.imagen');
    const sliderNav = document.getElementById('slider-nav');
  
    // Generar enlaces para cada slide
    slides.forEach((slide, index) => {
      const link = document.createElement('a');
      link.href = `#slide-${index + 1}`;
      sliderNav.appendChild(link);
    });
  
    // Iniciar desplazamiento automático
    autoSlide();
});
  
  function autoSlide() {
    const slider = document.querySelector('.slider');
    const slides = document.querySelectorAll('.imagen');
    let currentIndex = 0;

    setInterval(function() {
        currentIndex = (currentIndex + 1) % slides.length;
        const newPosition = slides[currentIndex].offsetLeft - slider.offsetLeft;
        slider.scrollTo({
            left: newPosition,
            behavior: 'smooth'
        });
    }, 5000);
}