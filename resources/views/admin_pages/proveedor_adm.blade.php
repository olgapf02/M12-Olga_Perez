@extends('admin_pages/layout_adm')
@section('content')
    <div class="d-grid gap-2 col-8 mx-auto" style="margin-bottom: 20px;">
        <a href="{{ route('proveedores.create') }}" class="btn btn-primary" role="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
            </svg>
        </a>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center mt-4">
            <div class="col-lg-10 col-xl-8">
                @foreach( $proveedores as $proveedor)
                    <div class="card mb-4">
                        <!-- Agregamos la clase mb-4 para un margen inferior -->
                        <img src="{{ asset('/imagenes/' . $proveedor->imagen) }}" class="card-img-top" style="height: 250px; object-fit: cover;" alt="...">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title">{{ $proveedor->titulo }}</h5>
                                <p class="card-text text-start ms-4" style="font-size: 18px;">{{ $proveedor->texto }}</p>
                                <a href="{{ $proveedor->url }}" class="btn btn-primary" target="_blank">Ir a la URL</a>
                                <a href="{{ route('proveedores.edit', ['proveedorGeneral' => $proveedor->id]) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('proveedores.destroy', ['proveedorGeneral' => $proveedor->id]) }}" class="btn btn-primary">Delete</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                    {{ $proveedores->links() }}
            </div>


    </div>

@endsection
