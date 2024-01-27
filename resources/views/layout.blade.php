<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/general_styles.css') }}">
</head>
<body>

<div class="top-bar">
    <div class="social-icons">
        <span> tel: 937 44 47 99</span>
        <a target="_blank" href="https://www.facebook.com/cantinalab.coop/?locale=es_ES"><img
                src="https://lateral-production.s3.eu-west-3.amazonaws.com/public/icon/facebook.svg" alt="Facebook"></a>
        <a target="_blank" href="https://www.instagram.com/cantinalab.coop/"><img
                src="https://lateral-production.s3.eu-west-3.amazonaws.com/public/icon/instagram.svg"
                alt="Instagram"></a>
    </div>
{{--    <div class="language-icon">--}}
{{--        <img src="{{ asset('imagenes/idiomas.png') }}" alt="Icono de idiomas">--}}
{{--    </div>--}}

    <div class="language-icon">
        <div id="language-options" class="language-options">
            <a href="#" onclick="cambiarIdioma('es')">Esp |</a>
            <a href="#" onclick="cambiarIdioma('ing')">Ing |</a>
            <a href="#" onclick="cambiarIdioma('cat')">Cat</a>
        </div>
    </div>
<script>
    function cambiarIdioma(idioma) {
        fetch(`/change-language/${idioma}`)
            .then(response => response.json())
            .then(data => traducirPagina(data))
            .catch(error => console.error('Error al cargar el archivo de idioma', error));
    }

    function traducirPagina(data) {
        // Itera sobre las claves del objeto JSON y actualiza las cadenas en la página
        Object.keys(data).forEach(key => {
            const elementos = document.querySelectorAll(`[data-translate="${key}"]`);
            elementos.forEach(elemento => {
                elemento.innerHTML = data[key];
            });
        });
    }

    // Inicializa la página con el idioma almacenado en la cookie si existe
    const idiomaAlmacenado = getCookie('idioma');
    if (idiomaAlmacenado) {
        cambiarIdioma(idiomaAlmacenado);
    }

    // Función para obtener el valor de una cookie
    function getCookie(nombre) {
        const value = `; ${document.cookie}`;
        const partes = value.split(`; ${nombre}=`);
        if (partes.length === 2) return partes.pop().split(';').shift();
    }

</script>

</div>
@include('header')
<div>
    @yield('imagen_entera')
</div>
<div class="container">
    <div class="left-strip"></div>
    @yield('content')
    <div class="right-strip"></div>
</div>
@include('footer')
{{--<script src="{{ asset('resources/js/idioma.js') }}"></script>--}}
</body>
</html>
