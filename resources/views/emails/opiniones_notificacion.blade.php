<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div>
    <label for="name">Nombre :</label>
    <p>{{ $datos['name'] }}</p>

    <p>Correo Electrónico:{{ $datos['lastname'] }}</p>

    <label for="mail">email:</label>
    <p>{{ $datos['mail'] }}</p>

    <label for="phone">Teléfono:</label>
    <p>{{ $datos['phone'] }}</p>

    <label for="comment">Opinion:</label>
    <p>{{ $datos['comment'] ?? 'Ninguno' }}</p>

</div>
</body>
</html>
