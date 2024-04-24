@extends('admin_pages/layout_adm')
@section('content')

    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card" style="width: 500px; max-width: 90%;">
            <div class="card-body">
                <form method="POST" action="{{ route('proveedores.store') }}">
                    @csrf
                    <h1>Nuevo Proveedor</h1>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                    </div>

                    <div class="mb-3">
                        <label for="texto" class="form-label">Texto</label>
                        <textarea class="form-control" id="texto" name="texto" rows="5" style="height: 150px;" required></textarea>
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


