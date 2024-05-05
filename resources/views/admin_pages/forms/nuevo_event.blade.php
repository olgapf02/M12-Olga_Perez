@extends('admin_pages/layout_adm')
@section('content')

    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;" >
        <div class="card" style="width: 500px; max-width: 90%;">
            <div class="card-body">
                <form method="POST" action="{{ route('eventosGenerales.store') }}" enctype="multipart/form-data" >
                    @csrf
                    <h1>Nuevo Evento</h1>

                    {{-- esto validara las validaciones del controller--}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $key => $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {{-- esto validara si hay un mensaje de error en la session--}}
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required value="{{ old('titulo') }}">
                    </div>

                    <div class="mb-3">
                        <label for="texto" class="form-label">Texto</label>
                        <textarea class="form-control" id="texto" name="texto" rows="5" style="height: 150px;" required>{{ old('texto') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" required  value="{{ old('fecha') }}">
                    </div>

                    <div class="mb-3">
                        <label for="archivo" class="form-label">Adjuntar Archivo</label>
                        <input type="file" class="form-control-file" id="archivo" name="archivo" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
{{--    action="{{ route('submit.event') }}" method="POST"--}}

@endsection

