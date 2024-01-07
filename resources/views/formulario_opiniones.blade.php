@extends('layout')
@section('imagen_entera')
    <div class="imagen-entera-container">
        <div class="image-container">
            <img src="{{ asset('../imagenes/fachada-cantina.png') }}" class="imagen-fija">
        </div>
        <div class="titulo-container">
            <h3>Cantina LAB</h3>
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
    <form action="{{ url('/submit_opinion_form') }}" method="post">
        @csrf
        <h1>Tu Opinion Nos Importa</h1>

        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="name" required><br>

        <label for="lastname">Apellido:</label><br>
        <input type="text" id="lastname" name="lastname" required><br>

        <label for="email">Correo Electrónico:</label><br>
        <input type="email" id="email" name="mail" required><br>

        <label for="phone">Teléfono de Contacto:</label><br>
        <input type="text" id="phone" name="phone" required><br>

        <label for="comment">Mensaje:</label><br>
        <textarea id="comment" name="comment" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>

@endsection
