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
{{--**************************************************************************--}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(session('success'))
{{--        <a href="/" class="btn btn-primary">Volver al Inicio</a>--}}
    @endif
{{--**************************************************************************--}}
    <form action="/submit_event_form" method="post">
        @csrf
    <h1>{{ __('Do you want to do an event with us?')}}</h1>

    <label for="organizer_name">{{ __('name organizer')}}</label><br>
    <input type="text" id="organizer_name" name="organizer_name" required><br>

    <label for="email">{{ __('mail')}}</label><br>
    <input type="email" id="email" name="email" required><br>

    <label for="phone">{{ __('tel')}}</label><br>
    <input type="text" id="phone" name="phone" required><br>

    <label for="event_date">{{ __('about us')}}</label><br>
    <input type="date" id="event_date" name="event_date" required><br>

    <label for="hora">{{ __('hour')}}Hora:</label><br>
    <input type="time" id="hora" name="hora" required><br>

    <label for="event_type">{{ __('tipe of event')}}</label><br>
    <select id="event_type" name="event_type" required>
        <option value="corporativo">{{ __('company')}}</option>
        <option value="social">{{ __('informal')}}</option>
        <option value="otro">{{ __('other')}}</option>
    </select><br>

    <label for="guest_count">{{ __('number of people')}}</label><br>
    <input type="number" id="guest_count" name="guest_count" required><br>

    <label for="additional_requests">{{ __('needs')}}</label><br>
    <textarea id="additional_requests" name="additional_requests" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Enviar">
</form>


@endsection
