<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Tipo Ticket</title>
</head>
<body>
    <h2>Crear Nuevo Tipo Ticket</h2>

    <form method="post" action="{{ route('ticketType.store') }}">
        @csrf
        <label for="type">Nuevo tipo de billete:</label>
        <input type="text" name="type" id="type" required>
        <br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>