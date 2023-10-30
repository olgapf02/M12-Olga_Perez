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


{{--    <h1>Weather Information</h1>--}}
{{--    <p>City: {{ $data['name'] }}</p>--}}
{{--    <p>Weather: {{ $data['weather'][0]['description'] }}</p>--}}
{{--    <p>Temperature: {{ $data['main']['temp'] }} Kelvin</p>--}}
{{--    <div class="weather-data">--}}
{{--        <h1>Weekly Weather Forecast</h1>--}}
{{--        @if(isset($dailyWeather))--}}
{{--            @foreach($dailyWeather as $day)--}}
{{--                <p><strong>Date:</strong> {{ date('Y-m-d', $day['dt']) }}</p>--}}
{{--                <p><strong>Weather:</strong> {{ $day['weather'][0]['description'] }}</p>--}}
{{--                <p><strong>Temperature:</strong> {{ $day['temp']['day'] }}°C</p>--}}
{{--                <p><strong>Humidity:</strong> {{ $day['humidity'] }}%</p>--}}
{{--                <hr>--}}
{{--            @endforeach--}}
{{--        @else--}}
{{--            <p>No Hay Datos Del Tiempo Disponibles</p>--}}
{{--        @endif--}}
{{--    </div>--}}


    {{-----------------------------------------------------------------------}}
{{--    <div class="carousel">--}}
{{--        <div class="slides">--}}
{{--            <div class="slide">--}}
{{--                <img src="{{ asset('../imagenes/fachada-cantina.png') }}" alt="Imagen 1">--}}
{{--                <div class="caption">Fachada de la cantina</div>--}}
{{--            </div>--}}

{{--            <div class="slide">--}}
{{--                <img src="{{ asset('../imagenes/dj.png') }}" alt="Imagen 2">--}}
{{--                <div class="caption">Taller de DJ</div>--}}
{{--            </div>--}}

{{--            <div class="slide">--}}
{{--                <img src="{{ asset('../imagenes/baile.png') }}" alt="Imagen 3">--}}
{{--                <div class="caption">Baile</div>--}}
{{--            </div>--}}

{{--            <div class="slide">--}}
{{--                <img src="{{ asset('../imagenes/cine.png') }}" alt="Imagen 4">--}}
{{--                <div class="caption">Cine a la Fresca 1</div>--}}
{{--            </div>--}}

{{--            <div class="slide">--}}
{{--                <img src="{{ asset('../imagenes/lgtbi.png') }}" alt="Imagen 5">--}}
{{--                <div class="caption">Mani al Bar</div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{-----------------------------------------------------------------------}}
    <div class="container-horario">
        <table class="custom-table">
            <tr>
                <th>Día</th>
                <th>Horas</th>
            </tr>
            <tr>
                <td>Lunes</td>
                <td>12:00 - 00:00</td>
            </tr>
            <tr>
                <td>Martes</td>
                <td>12:00 - 17:00</td>
            </tr>
            <tr>
                <td>Miércoles</td>
                <td>12:00 - 00:00</td>
            </tr>
            <tr>
                <td>Jueves</td>
                <td>12:00 - 00:00</td>
            </tr>
            <tr>
                <td>Viernes</td>
                <td>12:00 - 00:00</td>
            </tr>
            <tr>
                <td>Sábado</td>
                <td>12:00 - 00:00</td>
            </tr>
            <tr>
                <td>Domingo</td>
                <td>12:00 - 00:00</td>
            </tr>
        </table>
    </div>
{{--    ---------------------------------------------------------------------}}
    <div class="cuadrado">
        <div class="left-section">
            <img src="{{ asset('imagenes/logo_cant.png') }}" class="imagen">
            <div class="texto">
                <p>Reserva una mesa para comer en nuestro bar</p>
            </div>
            <a href="https://www.calvalls.com/web/es/" target="_blank" class="button">reservar</a>
        </div>

        <div class="right-section">
            <img src="{{ asset('imagenes/logo_cant.png') }}" class="imagen">
            <div class="texto">
                <p>Quieres llevarte la comida de la
                    cantina lab a casa
                </p>
            </div>
            <a href="https://www.calvalls.com/web/es/" target="_blank" class="button">LAB para Casa</a>
        </div>
    </div>

    @endsection
