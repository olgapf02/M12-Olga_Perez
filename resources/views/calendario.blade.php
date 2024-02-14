@extends('layout')
@section('imagen_entera')
    <div class="imagen-entera-container">
        <div class="image-container">
            <img src="{{ asset('../imagenes/cantina.png') }}" class="imagen-fija">
        </div>
        <div class="titulo-container">
            <h3>{{__('next events')}}</h3>
        </div>
    </div>
@endsection
@section('content')

{{--    <div class="container">--}}
{{--        <div id='calendario'></div>--}}
{{--    </div>--}}

{{--    <!-- FullCalendar JS -->--}}
{{--    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.js'></script>--}}
{{--    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid/main.js'></script>--}}
{{--    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid/main.js'></script>--}}
{{--    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/interaction/main.js'></script>--}}

{{--    <!-- jQuery and Bootstrap JS -->--}}
{{--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>--}}
{{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>--}}

{{--    <script>--}}
{{--        document.addEventListener('DOMContentLoaded', function() {--}}
{{--            var eventos = {!! json_encode($eventos) !!};--}}

{{--            var calendarEl = document.getElementById('calendario');--}}
{{--            var calendar = new FullCalendar.Calendar(calendarEl, {--}}
{{--                plugins: ['dayGrid', 'timeGrid', 'interaction'],--}}
{{--                header: {--}}
{{--                    left: 'prev,next today',--}}
{{--                    center: 'title',--}}
{{--                    right: 'dayGridMonth,timeGridWeek,timeGridDay'--}}
{{--                },--}}
{{--                events: eventos,--}}
{{--                editable: true, // Habilitar edición de eventos--}}
{{--                eventDrop: function(info) {--}}
{{--                    // Lógica para actualizar la fecha al mover un evento--}}
{{--                    // Aquí puedes llamar a la ruta correspondiente para actualizar la fecha en la base de datos--}}
{{--                    // info.event.id contiene el ID del evento--}}
{{--                    // info.event.start contiene la nueva fecha de inicio--}}
{{--                    // info.event.end contiene la nueva fecha de fin--}}
{{--                },--}}
{{--                eventResize: function(info) {--}}
{{--                    // Lógica para actualizar la duración al redimensionar un evento--}}
{{--                    // Aquí puedes llamar a la ruta correspondiente para actualizar la duración en la base de datos--}}
{{--                    // info.event.id contiene el ID del evento--}}
{{--                    // info.event.start contiene la nueva fecha de inicio--}}
{{--                    // info.event.end contiene la nueva fecha de fin--}}
{{--                },--}}
{{--                eventClick: function(info) {--}}
{{--                    // Lógica para manejar el clic en un evento--}}
{{--                    // Puedes abrir un modal para editar o eliminar el evento--}}
{{--                }--}}
{{--            });--}}

{{--            calendar.render();--}}
{{--        });--}}
{{--    </script>--}}

@endsection
