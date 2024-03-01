<header>
    <div class="menu2">
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('imagenes/logo_rojo.png') }}" alt="Logo">
            </a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ url('/quienes-somos') }}">{{ __('about us') }}</a></li>
                <li><a href="{{ url('/events') }}">{{ __('events') }}</a></li>
                <li><a href="{{ url('/proveedor') }}">{{ __('suppliers') }}</a></li>
                <li><a href="{{ url('/menu') }}">{{ __('food cart') }}</a></li>
                <li>Tel: 937 44 47 99</li>
            </ul>
        </div>
    </div>

{{--        <a href="{{ url('/') }}" class="usuario">--}}
        <a href="{{ url('/login') }}" class="usuario">
            <img src="{{ asset('imagenes/usuarios.png') }}" alt="usuario" >
        </a>

</header>
