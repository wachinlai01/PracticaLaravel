<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tickets</title>
    <link rel="stylesheet" href="{{asset('css/tabla.css')}}">
</head>
<body>
    <ul>
        <li><a href="{{ route('tickets.index') }}">Tickets</a></li>
        <li><a href="{{ route('trainType.index') }}">Tipo Trenes</a></li>
        <li><a href="{{ route('trains.index') }}">Trenes</a></li>
        <li><a href="{{ route('ticketType.index') }}">Tipo tickets</a></li>
    </ul>
    <h1>Tickets</h1>
    <table>
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Precio</th>
                <th>Tren</th>
                <th>Clase</th>
                <th>Ver</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
            <tr>
                <td>{{$ticket->date}}</td>
                <td>{{$ticket->price}}</td>
                <td>{{$ticket->train->name}}</td>
                <td>{{$ticket->ticketType->type}}</td>
                <td><a href="{{ route('tickets.show', $ticket->id) }}">Ver Detalles</a></td>
                <td><a href="{{ route('tickets.edit', $ticket->id) }}">Actualizar</a></td>
                <td>
                    <form action="{{ route('tickets.destroy', $ticket->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <br>
    <a href="{{ route('tickets.create') }}">Crear Nuevo Ticket</a>
</body>
</html>