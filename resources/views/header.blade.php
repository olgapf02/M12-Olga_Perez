<header>
    <div class="logo">
        <a href="{{ url('/') }}">
            <img src="{{ asset('imagenes/logo_rojo.png') }}" alt="Logo">
        </a>


    </div>
    <div class="menu">
        <var>
            <ul>
                <li><a href="{{ url('/quienes-somos') }}">Quienes Somos</a></li>
                <li><a href="{{ url('/events') }}">Eventos</a></li>
                <li><a href="{{ url('/proveedor') }}">Proveedores</a></li>
                <li><a href="{{ url('/menu') }}">Carta</a></li>
                <li>Tel: 937 44 47 99</li>
            </ul>
        </var>
    </div>


        <a href="{{ url('/') }}" class="usuario">
            <img src="{{ asset('imagenes/usuarios.png') }}" alt="usuario">
        </a>

</header>
