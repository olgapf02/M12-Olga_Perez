<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div>
    <label for="name">Nombre del Organizador:</label>
    <p>{{ $datos['name'] }}</p>

    <p>Correo Electrónico:{{ $datos['lastname'] }}</p>

    <label for="email">email:</label>
    <p>{{ $datos['email'] }}</p>

    <label for="phone">Teléfono:</label>
    <p>{{ $datos['phone'] }}</p>

    <label for="comment">Opinion:</label>
    <p>{{ $datos['comment'] ?? 'Ninguno' }}</p>

</div>
</body>
</html>
