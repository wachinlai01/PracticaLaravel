<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipo Trenes</title>
    <link rel="stylesheet" href="{{asset('css/tabla.css')}}">
</head>
<body>
    <ul>
        <li><a href="{{ route('tickets.index') }}">Tickets</a></li>
        <li><a href="{{ route('trainType.index') }}">Tipo Trenes</a></li>
        <li><a href="{{ route('trains.index') }}">Trenes</a></li>
        <li><a href="{{ route('ticketType.index') }}">Tipo tickets</a></li>
    </ul>
    <h1>Tipo Trenes</h1>
    <table>
        <thead>
            <tr>
                <th>Tipos de Trenes</th>
                <th>Ver</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($train_types as $train_type)
            <tr>
                <td>{{$train_type->type}}</td>
                <td><a href="{{ route('trainType.show', $train_type->id) }}">Ver Detalles</a></td>
                <td><a href="{{ route('trainType.edit', $train_type->id) }}">Actualizar</a></td>
                <td>
                    <form action="{{ route('trainType.destroy', $train_type->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('trainType.create') }}">Crear Nuevo Tipo</a>
</body>
</html>