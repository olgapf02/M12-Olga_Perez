var images = [
    "{{ url('/') }}",
    "{{ asset('ruta-a-tu-imagen-1.jpg') }}",
    "{{ asset('ruta-a-tu-imagen-2.jpg') }}",
    "{{ asset('ruta-a-tu-imagen-3.jpg') }}",
    "{{ asset('ruta-a-tu-imagen-4.jpg') }}",
    "{{ asset('ruta-a-tu-imagen-5.jpg') }}"
];

var currentImageIndex = 0;
var imageElement = document.querySelector("#carousel img");

function changeImage() {
    if (currentImageIndex === images.length) {
        currentImageIndex = 0;
    }
    imageElement.src = images[currentImageIndex];
    currentImageIndex++;
}

setInterval(changeImage, 2000);
