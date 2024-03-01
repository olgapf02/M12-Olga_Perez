<header>
    <div class="menu2">
        <div class="logo">
            <a href="{{ url('/') }}">
{{--                <img src="{{ asset('imagenes/logo_rojo.png') }}" alt="Logo">--}}
                <img src="{{ asset('imagenes/usuarios.png') }}" alt="usuario" >

            </a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ url('admin/events') }}">eventos</a></li>
                <li><a href="{{ url('admin/proveedores') }}">proveedor</a></li>
                <li>Tel: 937 44 47 99</li>
            </ul>
        </div>
    </div>

{{--            <a href="{{ url('/') }}" class="usuario">--}}
{{--    <a href="{{ url('/login') }}" class="usuario">--}}
{{--        <img src="{{ asset('imagenes/usuarios.png') }}" alt="usuario">--}}
{{--    </a>--}}


</header>
