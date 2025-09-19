<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1>Editar Tipo de Cultivo</h1>

    <form action="{{ route('cultivos.update', $cultivo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nome do cultivo:</label>
        <input type="text" name="name" id="name" value="{{ $cultivo->name }}" required>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>