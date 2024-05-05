@extends('admin_pages/layout_adm')
@section('content')
<div class="d-grid gap-2 col-8 mx-auto" style="margin-bottom: 20px;">
    <a href="{{ route('eventosGenerales.create') }}" class="btn btn-primary" role="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
        </svg>
    </a>
</div>

<div class="container-fluid">
    <div class="row justify-content-center mt-4">
        <div class="col-lg-10 col-xl-8">
            @foreach($eventos as $evento)
                <div class="card mb-4">
                    <!-- Agregamos la clase mb-4 para un margen inferior -->
                    <img src="{{ asset('/imagenes/' . $evento->imagen) }}" class="card-img-top" style="height: 250px; object-fit: cover;" alt="...">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title">{{ $evento->titulo }}</h5>
                            <p class="card-text text-start ms-4" style="font-size: 18px;">{{ $evento->texto }}</p>
                            <a href="{{ route('eventosGenerales.edit', ['eventoGeneral' => $evento->id]) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('eventosGenerales.destroy', ['eventoGeneral' => $evento->id]) }}" class="btn btn-primary">Delete</a>
                        </div>
                    </div>
                </div>
            @endforeach
                {{ $eventos->links() }}
        </div>

    </div>
</div>
@endsection

