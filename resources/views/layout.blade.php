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
        <div id="language-options" class="language-options">
            <a href="{{ route('change.language', ['language' => 'es']) }}">Esp |</a>
            <a href="{{ route('change.language', ['language' => 'ing']) }}">Ing |</a>
            <a href="{{ route('change.language', ['language' => 'cat']) }}">Cat</a>
        </div>
    </div>


{{--    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>--}}

    <script>
        function cambiarIdioma(language) {
            // Utiliza el método replace de JavaScript para insertar el valor de language
            var url = '/change.language/' + language;

            // Realiza una petición AJAX para cambiar el idioma
            $.ajax({
                url: url,
                type: 'GET',
                success: function(translations) {
                    console.log('Idioma cambiado exitosamente');
                    aplicarTraducciones(translations);
                },
                error: function() {
                    console.error('Error al cambiar el idioma');
                }
            });
        }

        function aplicarTraducciones(translations) {
            $('[data-translate]').each(function() {
                var key = $(this).data('translate');
                if (translations[key]) {
                    $(this).text(translations[key]);
                }
            });
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
