@extends('admin_pages/layout_adm')
@section('content')

    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card" style="width: 500px; max-width: 90%;">
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{ route('proveedores.update', $proveedorGeneral->id) }}" method="POST" >{{-- Formulario para actualizar un evento general con su título predefinido--}}
                    @csrf
                    <h1>Nuevo Proveedor</h1>
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
                        <input type="text" class="form-control" id="titulo" name="titulo" required value="{{ $proveedorGeneral->titulo }}">

                    </div>

                    <div class="mb-3">
                        <label for="texto" class="form-label">Texto</label>
                        <textarea class="form-control" id="texto" name="texto" rows="5" style="height: 150px;" required>{{ $proveedorGeneral->texto }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="url">URL:</label>
                        <input type="url" class="form-control" id="url" name="url" value="{{ $proveedorGeneral->url }}">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlFile1" class="form-label">Adjuntar Archivo</label>
                        <input type="file" class="form-control-file" id="archivo" name="archivo" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection

