@extends('layout')
@section('imagen_entera')
    <div class="imagen-entera-container">
        <div class="image-container">
            <img src="{{ asset('../imagenes/fachada-cantina.png') }}" class="imagen-fija">
        </div>
        <div class="titulo-container">
            <h3>Trabaja en Cantina LAB</h3>
        </div>
    </div>
@endsection
@section('content')
    {{--**************************************************************************--}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(session('success'))
{{--        <a href="/" class="btn btn-primary">Volver al Inicio</a>--}}
    @endif
    {{--**************************************************************************--}}

    <form action="/submit_trabajo_form" method="post" enctype="multipart/form-data">{{--para que el formulario sepa que se va a añadir un archivo al formulario--}}
        @csrf
{{--te aseguras de que el form se a enviado desde la web --}}
        <h1>Quieres Trabajar Con Nosotros</h1>

        <label for="name">Nombre :</label><br>
        <input type="text" id="name" name="name" required><br>

        <label for="lastname">Apellido:</label><br>
        <input type="text" id="lastname" name="lastname" required><br>

        <label for="disponibility">Disponibilidad:</label><br>

        <select id="event_type" name="disponibility" required>
            <option value="corporativo">Mañana</option>
            <option value="social">Tarde</option>
            <option value="otro">Noche</option>
        </select><br>

        <label for="file">Adjunta Tu CV:</label><br>
        <input type="file" id="pdf_file" name="file" accept=".pdf" required><br><br>

        <input type="submit" value="Enviar">
    </form>

@endsection
