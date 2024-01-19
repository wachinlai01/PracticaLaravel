<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear nuevo tipo de tren</title>
</head>
<body>
    <h2>Nuevo tipo de tren</h2>

    <form method="post" action="{{ route('trainType.store') }}">
        @csrf
        <label for="type">Nuevo tipo de tren:</label>
        <input type="text" name="type" id="type" required>
        <br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>