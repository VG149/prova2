<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Animal</title>
    </head>
    <body>
        <h1>Animal</h1>

        <form action="/editar-animal/{{ $animal-> id }}" method="POST">
            @csrf
            <label for="lblNome">Nome:</label>
            <input type="text" name="nome" value="{{ $animal->nome }}">
            <br><br>
            <label for="lblValor">Especie:</label>
            <input type="text" name="valor" value="{{ $animal->especie }}">
            <br><br>
            <button>Editar</button>
        </form>
    </body>
</html>
