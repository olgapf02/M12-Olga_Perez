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
                <li>Tel: 937 44 47 99</li>
            </ul>
        </var>
    </div>

    <div class="container-menu-2">
        <div class="botones">
            <a href="{{ url('/events') }}">
                <button>Reservar</button>
            </a>
            <a href="{{ url('/events') }}">
                <button>LAB a casa</button>
            </a>
        </div>
        <div class="iconos">
            <a href="https://tupagina.com"><img src="{{ asset('imagenes/idiomas.png') }}" alt="Icono de usuario"></a>
        </div>
    </div>
</header>
