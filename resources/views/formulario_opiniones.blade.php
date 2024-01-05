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

    <form action="{{ url('/submit_event_form') }}" method="post">
        <h1>Tu Opinion Nos Importa</h1>

        <label for="organizer_name">Nombre:</label><br>
        <input type="text" id="organizer_name" name="organizer_name" required><br>

        <label for="organizer_lastname">Apellido:</label><br>
        <input type="text" id="organizer_lastname" name="organizer_lastname" required><br>

        <label for="email">Correo Electrónico:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="phone">Teléfono de Contacto:</label><br>
        <input type="text" id="phone" name="phone" required><br>

        <label for="additional_requests">Mensaje:</label><br>
        <textarea id="additional_requests" name="additional_requests" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>

@endsection
