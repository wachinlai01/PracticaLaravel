<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver tren</title>
</head>
<body>
    <h2>Detalles del Tren</h2>

    <p><b>ID:</b> {{ $train->id }}</p>
    <p><b>Nombre:</b> {{ $train->name }}</p>
    <p><b>Número de Pasajeros:</b> {{ $train->passengers }}</p>
    <p><b>Año:</b> {{ $train->year }}</p>
    <p><b>Tipo de Tren:</b> {{ $train->trainType->type }}</p>

    <a href="{{ route('trains.index') }}">Volver a la Lista</a>

</body>
</html>
