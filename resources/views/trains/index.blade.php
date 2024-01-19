<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trenes</title>
    <link rel="stylesheet" href="{{asset('css/tabla.css')}}">
</head>
<body>
    <ul>
        <li><a href="{{ route('tickets.index') }}">Tickets</a></li>
        <li><a href="{{ route('trainType.index') }}">Tipo Trenes</a></li>
        <li><a href="{{ route('trains.index') }}">Trenes</a></li>
        <li><a href="{{ route('ticketType.index') }}">Tipo tickets</a></li>
    </ul>
    <h1>Trenes</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Pasajeros</th>
                <th>Año</th>
                <th>Tren</th>
                <th>Ver</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
            <tr>
                <td>{{$train->name}}</td>
                <td>{{$train->passengers}}</td>
                <td>{{$train->year}}</td>
                <td>{{$train->trainType->type}}</td>
                <td><a href="{{ route('trains.show', $train->id) }}">Ver Detalles</a></td>
                <td><a href="{{ route('trains.edit', $train->id) }}">Actualizar</a></td>
                <td>
                    <form action="{{ route('trains.destroy', $train->id) }}" method="post">
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
    <a href="{{ route('trains.create') }}">Crear Nuevo Tren</a>
</body>
</html>