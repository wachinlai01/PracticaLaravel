<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar tipo tren</title>
</head>
<body>
    <h2>Editar tipo Tren</h2>
    <form method="post" action="{{ route('trainType.update', $train_type->id) }}">
        
        @csrf
        @method('PUT')

        <label for="type">Tipo de ticket:</label>
        <input type="text" name="type" id="type" value="{{ old('type', $train_type->type) }}" required>

        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>