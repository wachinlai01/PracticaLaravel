<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar Tipo Ticket</title>
</head>
<body>
    <h2>Detalles del Tipo Ticket</h2>

    <p><b>ID:</b> {{ $ticket_type->id }}</p>
    <p><b>Tipo:</b> {{ $ticket_type->type }}</p>

    <a href="{{ route('ticketType.index') }}">Volver a la Lista</a>
</body>
</html>