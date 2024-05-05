@extends('layout')
@section('imagen_entera')
<div class="imagen-entera-container">
    <div class="image-container">
        <img src="{{ asset('../imagenes/cantina.png') }}" class="imagen-fija">
    </div>
    <div class="titulo-container">
        <h3> {{__('past_events')}}</h3>
    </div>
</div>
@endsection
@section('content')


    @if ($eventos->isEmpty())
    <h1>{{ __('No havido eventos.') }}</h1>
    @else
    <div class="eventos-container">
        @foreach ($eventos as $evento)
        <div class="item">
            <div class="photo">
                <img src="{{ asset('/imagenes/' . $evento->imagen) }}" class="imagen" alt="">
            </div>
            <div class="contenido">
                <h3>{{ $evento->titulo }}</h3>
                <p>{{ $evento->texto }}</p>
                <h3>{{ $evento->fecha }}</h3>
            </div>
        </div>
        @endforeach
            <button class="btn-url">
                <a href="{{ url('/events')}}">Ver eventos</a>
            </button>
    </div>
    @endif






@endsection
