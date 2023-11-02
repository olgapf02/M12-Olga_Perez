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

<form action="/submit_event_form" method="post">
    <h1>Quieres hacer un Evento Con Nosotros</h1>

    <label for="organizer_name">Nombre del Organizador:</label><br>
    <input type="text" id="organizer_name" name="organizer_name" required><br>

    <label for="email">Correo Electrónico:</label><br>
    <input type="email" id="email" name="email" required><br>

    <label for="phone">Teléfono :</label><br>
    <input type="text" id="phone" name="phone" required><br>

    <label for="event_date">Fecha del Evento:</label><br>
    <input type="date" id="event_date" name="event_date" required><br>

    <label for="event_type">Tipo de Evento:</label><br>
    <select id="event_type" name="event_type" required>
        <option value="corporativo">Empresa</option>
        <option value="social">Informal</option>
        <option value="otro">Otro</option>
    </select><br>

    <label for="guest_count">Número de Invitados:</label><br>
    <input type="number" id="guest_count" name="guest_count" required><br>

    <label for="additional_requests">Explicacion del Evento y Necesidades:</label><br>
    <textarea id="additional_requests" name="additional_requests" rows="4" cols="50"></textarea><br><br>

    <input type="submit" value="Enviar">
</form>

@endsection
