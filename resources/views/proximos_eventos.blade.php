@extends('layout')
@section('imagen_entera')
    <div class="imagen-entera-container">
        <div class="image-container">
            <img src="{{ asset('../imagenes/cantina.png') }}" class="imagen-fija">
        </div>
        <div class="titulo-container">
            <h3> {{__('next_events')}}</h3>
        </div>
    </div>
@endsection
@section('content')


    @if ($eventos->isEmpty())
        <h1>{{ __('No hay próximos eventos.') }}</h1>
    @else
        <div class="eventos-container">
            @foreach ($eventos as $evento)
                <div class="item">
                    <div class="photo">
                        <img src="{{ asset($evento->imagen) }}" class="imagen" alt="">
                    </div>
                    <div class="contenido">
                        <h3>{{ $evento->titulo }}</h3>
                        <p>{{ $evento->texto }}</p>
                        <h3>{{ $evento->fecha }}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    @endif



@endsection
