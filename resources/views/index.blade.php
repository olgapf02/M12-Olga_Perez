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

    <div class="weather-container">
        <h2>{{ date('l, jS F Y') }}</h2>
        <div class="weather-info">
            <h2>Condiciones meteorológicas en {{ $infoTiempo['name'] }}</h2>
            <p><strong>Temperatura:</strong> {{ $infoTiempo['main']['temp'] - 273.15 }}°C</p>
            <p><strong>Descripción del clima:</strong> {{ $infoTiempo['weather'][0]['description'] }}</p>
            <p><strong>Velocidad del viento:</strong> {{ $infoTiempo['wind']['speed'] }} m/s</p>
            <p><strong>Nubes:</strong> {{ $infoTiempo['clouds']['all'] }}%</p>
        </div>

        <div class="terraza-info">
            @if ($infoTiempo['weather'][0]['id'] === 801 || $infoTiempo['weather'][0]['id'] === 802)
                <h3>Hoy hay algunas nubes en la zona. ¡Puede ser un buen día para disfrutar de la terraza!</h3>
            @else
                <h3>Hoy no parece ser un día ideal para la terraza debido a las condiciones climáticas.</h3>
            @endif
        </div>
    </div>


    {{-----------------------------------------------------------------------}}
    <div id="carousel">
        <img src="{{ url('/') }}" width="150" height="100" />
    </div>
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
