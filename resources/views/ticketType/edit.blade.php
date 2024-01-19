<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar tipo Ticket</title>
</head>
<body>
    <h2>Editar tipo Ticket</h2>
    <form method="post" action="{{ route('ticketType.update', $ticket_type->id) }}">
        
        @csrf
        @method('PUT')

        <label for="type">Tipo de ticket:</label>
        <input type="text" name="type" id="type" value="{{ old('type', $ticket_type->type) }}" required>

        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>