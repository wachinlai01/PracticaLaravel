<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Tren</title>
</head>
<body>
    <h2>Crear Nuevo Tren</h2>

    <form method="post" action="{{ route('trains.store') }}">
        @csrf
        <label for="name">Nombre del tren:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="passengers">Número de pasajeros:</label>
        <input type="number" name="passengers" id="passengers" required>
        <br>
        <label for="year">Año:</label>
        <input type="text" name="year" id="year" required>
        <br>
        <label for="train_type_id">Tipo de tren:</label>
        <select name="train_type_id" id="train_type_id" required>
            @foreach ($types as $type)
                <option value="{{ $type->id }}">{{ $type->type }}</option>
            @endforeach
        </select>
        <br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>