<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar</title>
</head>
<body>
    <h1>Criar novo Cultivo</h1>

    <form action="{{ route('cultivos.store') }}" method="POST">
    @csrf

     <div>
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" required>
        </div>

        <br>
        <input type="submit" value="Salvar">
        <br>
        <a href="{{ route('cultivos.index') }}">Cancelar</a>



    </form>
</body>
</html>