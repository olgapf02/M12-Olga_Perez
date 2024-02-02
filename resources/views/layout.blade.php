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
            <a href="{{ route('change.language', ['language' => 'en']) }}">Ing |</a>
            <a href="{{ route('change.language', ['language' => 'cat']) }}">Cat</a>
        </div>
    </div>



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


{{--<script src="{{ asset('resources/js/idioma.js') }}"></script>--}}
</body>
</html>
