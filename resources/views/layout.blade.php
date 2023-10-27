<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
</head>
<body>
    <div class="container">
        <div class="left-strip"></div>
        @yield('content')
        <div class="right-strip"></div>
    </div>
</body>
</html>