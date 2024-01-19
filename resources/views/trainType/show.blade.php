<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver tipo tren</title>
</head>
<body>
    <h2>Detalles del Tipo Tren</h2>

    <p><b>ID:</b> {{ $train_type->id }}</p>
    <p><b>Tipo:</b> {{ $train_type->type }}</p>

    <a href="{{ route('trainType.index') }}">Volver a la Lista</a>
</body>
</html>