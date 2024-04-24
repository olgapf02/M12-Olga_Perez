@extends('layout')
@section('imagen_entera')
{{--    <div class="imagen-entera-container">--}}
{{--        <div class="image-container">--}}
{{--            <img src="{{ asset('../imagenes/cantina.png') }}" class="imagen-fija">--}}
{{--        </div>--}}
{{--        <div class="titulo-container">--}}
{{--            <h3> {{__('Our events')}}</h3>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
@section('content')

    <div class="container text-center mt-5 custom-padding">
        <div class="row">
            <div class="col">
                <a href="{{ url('/anteriores_eventos') }}" class="btn custom-btn">Eventos Pasados</a>
                <a href="{{ url('/eventos_proximos') }}" class="btn custom-btn">Proximos Eventos</a>
            </div>
        </div>
    </div>


@endsection
