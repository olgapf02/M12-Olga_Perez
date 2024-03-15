@extends('admin_pages/layout_adm')
@section('content')

    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card" style="width: 500px; max-width: 90%;">
            <div class="card-body">
                <form action="{{ route('submit_event') }}" method="POST">
                    @csrf
                    <h1>Nuevo Evento</h1>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                    </div>

                    <div class="mb-3">
                        <label for="texto" class="form-label">Texto</label>
                        <textarea class="form-control" id="texto" name="texto" rows="5" style="height: 150px;" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlFile1" class="form-label">Adjuntar Archivo</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>

@endsection


{{--@extends('admin_pages/layout_adm')--}}
{{--@section('content')--}}

{{--    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">--}}
{{--        <div class="card" style="width: 500px; max-width: 90%;">--}}
{{--            <div class="card-body">--}}
{{--                <form action="{{ route('submit_event') }}" method="POST" enctype="multipart/form-data">--}}
{{--                    @csrf--}}
{{--                    <h1>Nuevo Evento</h1>--}}
{{--                    <div class="mb-3">--}}
{{--                        <label for="titulo" class="form-label">Título</label>--}}
{{--                        <input type="text" class="form-control @error('titulo') is-invalid @enderror" id="titulo" name="titulo" required>--}}
{{--                        @error('titulo')--}}
{{--                        <div class="invalid-feedback">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

{{--                    <div class="mb-3">--}}
{{--                        <label for="texto" class="form-label">Texto</label>--}}
{{--                        <textarea class="form-control @error('texto') is-invalid @enderror" id="texto" name="texto" rows="5" style="height: 150px;" required></textarea>--}}
{{--                        @error('texto')--}}
{{--                        <div class="invalid-feedback">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

{{--                    <div class="mb-3">--}}
{{--                        <label for="fecha" class="form-label">Fecha</label>--}}
{{--                        <input type="date" class="form-control @error('fecha') is-invalid @enderror" id="fecha" name="fecha" required>--}}
{{--                        @error('fecha')--}}
{{--                        <div class="invalid-feedback">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

{{--                    <div class="mb-3">--}}
{{--                        <label for="archivo" class="form-label">Adjuntar Archivo</label>--}}
{{--                        <input type="file" class="form-control-file @error('archivo') is-invalid @enderror" id="archivo" name="archivo">--}}
{{--                        @error('archivo')--}}
{{--                        <div class="invalid-feedback">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

{{--                    <button type="submit" class="btn btn-primary">Enviar</button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--@endsection--}}
