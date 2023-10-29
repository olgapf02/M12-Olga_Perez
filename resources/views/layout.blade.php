<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/general_styles.css') }}">

</head>
<body>
@include('section')
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
<script><link rel="stylesheet" href="{{ asset('js/carusell.js') }}"></script>
</body>
</html>
