<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div>
    <p for="organizer_name">Nombre del Organizador:</p>
    <p>{{ $datos['organizer_name'] }}</p>

    <p>Correo Electrónico:{{ $datos['email'] }}</p>

    <p for="phone">Teléfono:</p>
    <p>{{ $datos['phone'] }}</p>

    <p for="event_date">Fecha del Evento:</p>
    <p>{{ $datos['event_date'] }}</p>

    <p for="hora">Fecha del Evento:</p>
    <p>{{ $datos['hora'] }}</p>

    <p for="event_type">Tipo de Evento:</p>
    <p>{{ $datos['event_type'] }}</p>

    <p for="guest_count">Número de Invitados:</p>
    <p>{{ $datos['guest_count'] }}</p>

    <p for="additional_requests">Detalles del Evento y Necesidades:</p>
    <p>{{ $datos['additional_requests'] ?? 'Ninguno' }}</p>


</div>
</body>
</html>
