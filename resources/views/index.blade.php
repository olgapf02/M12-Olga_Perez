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

<div class="home">
    <h2 class="carta-title">Experiencias de La Cantina LAB</h2>
    <div class="carousel-container">
        <div class="carousel-slider" id="slider">
            <div class="carousel-item">
                <img src="{{ asset('imagenes/cine.png') }}" class="ima">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imagenes/doppler.png') }}" class="ima">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imagenes/lgtbi.png') }}" class="ima">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imagenes/logo_rojo.png') }}" class="ima">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imagenes/baile.png') }}" class="ima">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imagenes/blablabar.png') }}" class="ima">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imagenes/logo_cant.png') }}" class="ima">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imagenes/calcotada.png') }}" class="ima">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imagenes/baile.png') }}" class="ima">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imagenes/dj.png') }}" class="ima">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imagenes/volante-flamenco.png') }}" class="ima">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imagenes/vermut.png') }}" class="ima">
            </div>
            <button class="prev-btn" onclick="changeSlide(-1)">❮</button>
            <button class="next-btn" onclick="changeSlide(1)">❯</button>
        </div>

    </div>
    <script>
        let currentIndex = 0;

        function changeSlide(direction) {
            const slider = document.getElementById('slider');
            const totalItems = document.querySelectorAll('.carousel-item').length;
            const items = document.querySelectorAll('.carousel-item');

            currentIndex = (currentIndex + direction + totalItems) % totalItems;

            items.forEach(item => {
                item.style.transform = `translateX(-${currentIndex * 100}%)`;
            });
        }
    </script>

{{---------------------------------------------------------------------------------------------------------------------------------------}}
    <h2 class="carta-title">Horarios La Cantina LAB</h2>
    <div class="container-horario">
        <table class="custom-table">
            <h1></h1>
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
                <td>12:00 - 18:00</td>
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

    {{---------------------------------------------------------------------------------------------------------------------------------------}}
    <h2 class="carta-title">Nuestro Restaurante</h2>
    <div class="galeria">
        <div class="photo">
            <img src="{{ asset('imagenes/logo_cant.png') }}" alt="foto 1">
        </div>
        <div class="photo">
            <img src="{{ asset('imagenes/can-batllo.jpg') }}" alt="foto 2">
        </div>
        <div class="photo">
            <img src="{{ asset('imagenes/cantina-cerrada.png') }}" alt="foto 3">
        </div>
        <div class="photo">
            <img src="{{ asset('imagenes/equipo.jpg') }}" alt="foto 4">
        </div>
        <div class="photo">
            <img src="{{ asset('imagenes/cantina-noche.png') }}" alt="foto 5">
        </div>
        <div class="photo">
            <img src="{{ asset('imagenes/primera-cantina.png') }}" alt="foto 6">
        </div>
        <div class="photo">
            <img src="{{ asset('imagenes/opertura.png') }}" alt="foto 7">
        </div>
        <div class="photo">
            <img src="{{ asset('imagenes/plantas-cantina.png') }}" alt="foto 8">
        </div>
        <div class="photo">
            <img src="{{ asset('imagenes/terraza.png') }}" alt="foto 9">
        </div>
{{--        <div class="photo">--}}
{{--            <img src="{{ asset('imagenes/ensalada.png') }}" alt="foto 10">--}}
{{--        </div>--}}
{{--        <div class="photo">--}}
{{--            <img src="{{ asset('imagenes/postre.png') }}" alt="foto 11">--}}
{{--        </div>--}}
{{--        <div class="photo">--}}
{{--            <img src="{{ asset('imagenes/logo_rojo.png') }}" alt="foto 12">--}}
{{--        </div>--}}

    </div>
    {{---------------------------------------------------------------------------------------------------------------------------------------}}


    <div class="cuadrado">
        <div class="left-section">
            <img src="{{ asset('imagenes/logo_cant.png') }}" class="imagen-cuadrado">
            <div class="texto">
                <p>{{ __('Reserve a table to eat at our bar') }}</p>
            </div>
            <a  href="https://www.dish.co/ES/es/" target="_blank" class="button">reservar</a>
        </div>

        <div class="right-section">
            <img src="{{ asset('imagenes/logo_cant.png') }}" class="imagen-cuadrado">
            <div class="texto">
                <p>Quieres llevarte la comida de la
                    cantina lab a casa
                </p>
            </div>
            <a href="https://mensakas.coopcycle.org/es/" target="_blank" class="button">LAB para Casa</a>
        </div>
    </div>
</div>



@endsection
