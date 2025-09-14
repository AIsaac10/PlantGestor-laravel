<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Tipos de Cultivos</h1>

    <a href="{{ route('cultivos.create') }}">Novo Cultivo</a>

    <ul>
        @forelse ($cultivos as $cultivo)
            <li>
                <strong>{{ $cultivo->name }}</strong> -
                <a href="{{ route('cultivos.edit', $cultivo->id) }}">Editar</a>
            </li>

        @empty
            <li>Nenhum tipo de cultivo cadastrado.</li>
        @endforelse
    </ul>
</body>
</html>