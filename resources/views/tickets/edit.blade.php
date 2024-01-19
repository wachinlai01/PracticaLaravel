<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Billete</title>
</head>
<body>
    <h2>Editar billete</h2>
    <form method="post" action="{{ route('tickets.update', $ticket->id) }}">
        
        @csrf
        @method('PUT')

        <label for="date">Fecha del billete:</label>
        <input type="date" name="date" id="date" value="{{ old('date', $ticket->date) }}" required>
        <br>
        <br>
        <label for="price">Precio:</label>
        <input type="number" step="0.01" name="price" id="price" value="{{ old('price', $ticket->price) }}" required>
        <br>
        <br>
        <label for="train_id">Nombre del tren:</label>
        <select name="train_id" id="train_id" required>
            @foreach ($trains as $train)
                <option value="{{ $train->id }}" {{ $ticket->train_id == $train->id ? 'selected' : '' }}>{{ $train->name }}</option>
            @endforeach
        </select>
        <br>
        <br>
        <label for="ticket_type_id">Tipo de billete:</label>
        <select name="ticket_type_id" id="ticket_type_id" required>
            @foreach ($types as $type)
                <option value="{{ $type->id }}" {{ $ticket->ticket_type_id == $type->id ? 'selected' : '' }}>{{ $type->type }}</option>
            @endforeach
        </select>
        <br>
        <br>

        <button type="submit">Guardar Cambios</button>
        </form>
</body>
</html>