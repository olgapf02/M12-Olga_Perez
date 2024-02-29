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
    <h2 class="carta-title">{{__('canteen experiences')}}</h2>
    <div class="carousel-container">
        <div class="carousel-slider" id="slider">
            <div class="carousel-item">
                <img src="{{ asset('imagenes/salchichada.png') }}" class="ima">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imagenes/swing.jpg') }}" class="ima">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imagenes/aniversario-2.png') }}" class="ima">
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
                <img src="{{ asset('imagenes/tortilla.jpg') }}" class="ima">
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
            <div class="carousel-item">
                <img src="{{ asset('imagenes/aniversario-1.png') }}" class="ima">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imagenes/ensalada.png') }}" class="ima">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imagenes/blablabar-2.png') }}" class="ima">
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
    <h2 class="carta-title">{{__('canteen hours')}}</h2>
    <div class="container-horario">
        <table class="custom-table">
            <h1></h1>
            <tr>
                <th>{{ __('Day') }}</th>
                <th>{{ __('Hora') }}</th>
            </tr>
            <tr>
                <td>{{ __('Monday') }}</td>
                <td>12:00 - 00:00</td>
            </tr>
            <tr>
                <td>{{ __('Tuesday') }}</td>
                <td>12:00 - 18:00</td>
            </tr>
            <tr>
                <td>{{ __('Wednesday') }}</td>
                <td>12:00 - 00:00</td>
            </tr>
            <tr>
                <td>{{ __('Thursday') }}</td>
                <td>12:00 - 00:00</td>
            </tr>
            <tr>
                <td>{{ __('Friday') }}</td>
                <td>12:00 - 00:00</td>
            </tr>
            <tr>
                <td>{{ __('Saturday') }}</td>
                <td>12:00 - 00:00</td>
            </tr>
            <tr>
                <td>{{ __('Sunday') }}</td>
                <td>12:00 - 00:00</td>
            </tr>
        </table>
    </div>


    {{---------------------------------------------------------------------------------------------------------------------------------------}}
    <h2 class="carta-title">{{__('Our restaurant')}}</h2>
    <div class="galeria">
        <div class="photo" onclick="zoomIn(this)">
            <img src="{{ asset('imagenes/logo_cant.png') }}" alt="foto 1">
        </div>
        <div class="photo" onclick="zoomIn(this)">
            <img src="{{ asset('imagenes/can-batllo.jpg') }}" alt="foto 2">
        </div>
        <div class="photo" onclick="zoomIn(this)">
            <img src="{{ asset('imagenes/cantina-cerrada.png') }}" alt="foto 3">
        </div>
        <div class="photo" onclick="zoomIn(this)">
            <img src="{{ asset('imagenes/equipo.jpg') }}" alt="foto 4">
        </div>
        <div class="photo" onclick="zoomIn(this)">
            <img src="{{ asset('imagenes/cantina-noche.png') }}" alt="foto 5">
        </div>
        <div class="photo" onclick="zoomIn(this)">
            <img src="{{ asset('imagenes/primera-cantina.png') }}" alt="foto 6">
        </div>
        <div class="photo" onclick="zoomIn(this)">
            <img src="{{ asset('imagenes/opertura.png') }}" alt="foto 7">
        </div>
        <div class="photo" onclick="zoomIn(this)">
            <img src="{{ asset('imagenes/plantas-cantina.png') }}" alt="foto 8">
        </div>
        <div class="photo" onclick="zoomIn(this)">
            <img src="{{ asset('imagenes/terraza.png') }}" alt="foto 9">
        </div>
        <div class="photo" onclick="zoomIn(this)">
            <img src="{{ asset('imagenes/terraza-sol.png') }}" alt="foto 9">
        </div>
        <div class="photo" onclick="zoomIn(this)">
            <img src="{{ asset('imagenes/terraza-dia.jpg') }}" alt="foto 9">
        </div>
    </div>

    {{---------------------------------------------------------------------------------------------------------------------------------------}}

    <div class="cuadrado">
        <div class="left-section">
            <img src="{{ asset('imagenes/logo_cant.png') }}" class="imagen-cuadrado">
            <div class="texto">
                <p>{{ __('Reserve a table to eat at our bar') }}</p>
            </div>
            <a  href="https://www.dish.co/ES/es/" target="_blank" class="button">{{ __('Reserve') }}</a>
        </div>

        <div class="right-section">
            <img src="{{ asset('imagenes/logo_cant.png') }}" class="imagen-cuadrado">
            <div class="texto">
                <p>{{ __('Do you want to take the food from the canteen lab home') }}
                </p>
            </div>
            <a href="https://mensakas.coopcycle.org/es/" target="_blank" class="button">{{ __('home Lab') }}</a>
        </div>
    </div>
</div>

@endsection
