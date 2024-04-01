@extends('layout')
@section('imagen_entera')
    <div class="imagen-entera-container">
        <div class="image-container">
            <img src="{{ asset('../imagenes/cantina.png') }}" class="imagen-fija">
        </div>
        <div class="titulo-container">
            <h3> {{__('Our events')}}</h3>
        </div>
    </div>
@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <a >Próximos Eventos</a>
        </div>
        <div class="col">
            <a >Eventos Anteriores</a>
        </div>
    </div>
</div>

@endsection
