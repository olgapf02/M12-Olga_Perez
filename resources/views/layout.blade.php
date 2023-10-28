<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/general_styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/evento-proveedor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tipografia.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/imagen_entera.css') }}">
</head>
<body>
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
{{--<!-- <link rel="stylesheet" href="{{ asset('js/footer.js') }}"> -->--}}
</body>
</html>
