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

    <form action="/submit_event_form" method="post">
        <h1>Quieres Trabajar Con Nosotros</h1>

        <label for="name">Nombre :</label><br>
        <input type="text" id="organizer_name" name="_name" required><br>

        <label for="lastname">Apellido:</label><br>
        <input type="text" id="organizer_name" name="lastname" required><br>

        <label for="phone">Disponibilidad:</label><br>
        <select id="event_type" name="event_type" required>
            <option value="corporativo">Mañana</option>
            <option value="social">Tarde</option>
            <option value="otro">Noche</option>
        </select><br>

        <label for="file">Adjunta Tu CV:</label><br>
        <input type="file" id="pdf_file" name="file" accept=".pdf" required><br><br>

        <input type="submit" value="Enviar">
    </form>

@endsection
