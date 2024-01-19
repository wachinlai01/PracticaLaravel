<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update tren</title>
</head>
<body>
    <h2>Editar tren</h2>
    <form method="post" action="{{ route('trains.update', $train->id) }}">
        
        @csrf
        @method('PUT')

        <label for="name">Nombre del tren:</label>
        <input type="text" name="name" id="name" value="{{ old('name', $train->name) }}" required>
        <br>
        <br>
        <label for="passengers">Número de pasajeros:</label>
        <input type="number" name="passengers" id="passengers" value="{{ old('passengers', $train->passengers) }}" required>
        <br>
        <br>
        <label for="year">Año:</label>
        <input type="number" name="year" id="year" value="{{ old('year', $train->year) }}" required>
        <br>
        <br>
        <label for="train_type_id">Tipo de tren:</label>
        <select name="train_type_id" id="train_type_id" required>
            @foreach ($types as $type)
                <option value="{{ $type->id }}" {{ $train->train_type_id == $type->id ? 'selected' : '' }}>{{ $type->type }}</option>
            @endforeach
        </select>
        <br>
        <br>
        <button type="submit">Guardar Cambios</button>
        </form>
</body>
</html>