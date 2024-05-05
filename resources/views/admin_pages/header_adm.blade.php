
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom bg-light">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">La Cantina: Admin</span>
    </a>

    <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{ url('admin/home') }}" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="{{ url('admin/events') }}" class="nav-link">Eventos</a></li>
        <li class="nav-item"><a href="{{ url('admin/proveedores') }}" class="nav-link">proveedor</a></li>
{{--        <li class="nav-item"><a href="{{ url('admin/prox_events') }}" class="nav-link">proximos eventos</a></li>--}}
    </ul>
</header>
