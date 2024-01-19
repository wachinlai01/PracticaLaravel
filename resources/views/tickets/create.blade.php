<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Ticket</title>
</head>
<body>
    <h2>Crear Nuevo Ticket</h2>

    <form method="post" action="{{ route('tickets.store') }}">
        @csrf
        <label for="date">Fecha:</label>
        <input type="date" name="date" id="date" required>
        <br>
        <br>
        <label for="price">Precio:</label>
        <input type="number" step="0.01" name="price" id="price" required>
        <br>
        <br>
        <label for="train_id">Nombre del tren:</label>
        <select name="train_id" id="train_id" required>
            @foreach ($trains as $train)
                <option value="{{ $train->id }}">{{ $train->name }}</option>
            @endforeach
        </select>
        <br>
        <br>
        <label for="ticket_type_id">Tipo de billet:</label>
        <select name="ticket_type_id" id="ticket_type_id" required>
            @foreach ($types as $type)
                <option value="{{ $type->id }}">{{ $type->type }}</option>
            @endforeach
        </select>
        <br>
        <br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>