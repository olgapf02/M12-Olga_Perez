const slides = document.querySelector('.slides');
const images = slides.children;
let currentSlide = 0;

function nextSlide() {
    currentSlide = (currentSlide + 1) % images.length;
    updateSlide();
}

function updateSlide() {
    slides.style.transform = `translateX(-${currentSlide * 100}%)`;
}

setInterval(nextSlide, 2000);

