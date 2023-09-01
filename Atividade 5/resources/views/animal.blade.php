<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Animais</title>
</head>
<body>
    <h1>Produtos</h1>
    @if ($animal->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Sexo</th>
                <th>Peso</th>
                <th>Idade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$animal->id}}</a></td>
                <td>{{$animal->nome}}</td>
                <td>{{$animal->sexo}}</td>
                <td>{{$animal->peso}}</td>
                <td>{{$animal->idade}}</td>
            </tr>
        </tbody>
    </table>
    <a href="/animais/"> Voltar </a>
    @else
    <p>Produtos não encontrados! </p>
    @endif
</body>
</html>
