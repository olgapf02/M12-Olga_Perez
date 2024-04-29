@extends('layout')
@section('imagen_entera')
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
