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

    <div class="language-dropdown">
        <button onclick="toggleLanguageDropdown()">Seleccionar Idioma</button>
        <div id="language-options" class="language-options">
            <a href="{{ route('change.language', ['language' => 'es']) }}">Español</a>
            <a href="{{ route('change.language', ['language' => 'ing']) }}">English</a>
            <a href="{{ route('change.language', ['language' => 'cat']) }}">Catalan</a>
        </div>
    </div>

    <script>
        function toggleLanguageDropdown() {
            var dropdown = document.getElementById("language-options");
            dropdown.classList.toggle("show");
        }
        // Cierra el menú si el usuario hace clic fuera de él
        window.onclick = function (event) {
            if (!event.target.matches('.language-dropdown button')) {
                var dropdowns = document.getElementsByClassName("language-options");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
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
<script src="{{ asset('js/carusell.js') }}"></script>
{{--<script src="{{ asset('js/calendario.js') }}"></script>--}}
</body>
</html>
