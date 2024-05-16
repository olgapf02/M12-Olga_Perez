@extends('layout')
@section('imagen_entera')
    <div class="imagen-entera-container">
        <div class="image-container">
            <img src="{{ asset('../imagenes/platos.png') }}" class="imagen-fija">
        </div>
        <div class="titulo-container">
            <h3> menu</h3>
        </div>
    </div>
@endsection
@section('content')

<div class="weather-container">
    <div class="weather-info">
        <div class="weather-info terrassa-info">
            <h1>Informacion de la terraza</h1>
        </div>
        @if ($nombre)
            <p>Nombre: {{ $nombre['name'] }}</p>
            <p>Descripción: {{ $nombre['weather'][0]['description'] }}</p>
            <p>Temperatura: {{ $nombre['main']['temp'] }} K</p>
            <p>Humedad: {{ $nombre['main']['humidity'] }}%</p>
            <!-- Puedes acceder a más datos aquí según lo que necesites mostrar -->
        @else
            <p>No se pudo obtener la información del clima.</p>
        @endif
    </div>

</div>



@endsection
