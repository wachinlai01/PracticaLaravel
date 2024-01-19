<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar Ticket</title>
</head>
<body>
    <h2>Detalles del Ticket</h2>

    <p><b>ID:</b> {{ $ticket->id }}</p>
    <p><b>Fecha:</b> {{ $ticket->date }}</p>
    <p><b>Nombre:</b> {{ $ticket->price }}</p>
    <p><b>Nombre del tren:</b> {{ $ticket->train->name }}</p>
    <p><b>Tipo de billet:</b> {{ $ticket->ticketType->type }}</p>

    <a href="{{ route('tickets.index') }}">Volver a la Lista</a>
</body>
</html>