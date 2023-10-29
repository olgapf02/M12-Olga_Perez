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
{{--<link rel="stylesheet" href="{{ asset('js/carusell.js') }}">--}}
</body>
</html>
