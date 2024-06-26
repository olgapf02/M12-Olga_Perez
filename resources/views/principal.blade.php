@extends('layout')
@section('imagen_entera')
    <div class="imagen-entera-container">
        <div class="image-container">
            <img src="{{ asset('../imagenes/la-cantina.png') }}" class="imagen-fija">
        </div>
        <div class="titulo-container">
            <h3>{{ __('about us') }}</h3>
        </div>
    </div>
@endsection
@section('content')


<div class="container-equipo">
    <div class="item">
        <div class="photo-equipo">
            <img src="{{ asset('../imagenes/equipo.jpg') }}" class="imagen">
        </div>
        <div class="contenido-equipo">
            <h3 class="texto equipo">{{ __('project') }}</h3>
            <p>{{ __('text project') }}</p>
            <p>

            </p>
        </div>
    </div>

    <div class="item">
        <div class="photo-equipo">
            <img src="{{ asset('imagenes/logo_cant.png') }}" class="imagen">
        </div>
        <div class="contenido-equipo">
            <h3 class="texto equipo">{{ __('what do we do')}}</h3>
            <p> {{ __('text what we do')}} </p>
        </div>
    </div>

    <div class="item">
        <div class="photo-equipo">
            <img src="{{ asset('imagenes/canbatllo.png') }}" class="imagen">
        </div>
        <div class="contenido-equipo">
            <h3 class="texto equipo">{{ __('Our values')}}</h3>
            <p>{{ __('text_Our_values')}}</p>
        </div>
    </div>
    <!-- {{-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------}} -->
    <div class="mapa">
        <h1>{{ __('Location_of_La_Cantina_Lab')}}</h1>
        <p>{{__("location")}}</p>
        @if(!empty($mapa))
            <iframe width="600" height="450" style="border:0"
                    src="https://www.openstreetmap.org/export/embed.html?bbox={{ $mapa[0]['lon'] }},{{ $mapa[0]['lat'] }},{{ $mapa[0]['lon'] }},{{ $mapa[0]['lat'] }}&amp;layer=mapnik" allowfullscreen></iframe>
        @else
            <p>No se encontraron datos de ubicación para el lugar especificado.</p>
        @endif
    </div>
</div>

@endsection
