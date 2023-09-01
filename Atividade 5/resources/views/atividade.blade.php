<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Atividades</title>
</head>
<body>
    <h1>Users</h1>
    @if ($atividade->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Descricao</th>
                <th>Valor</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$atividade->id}}</td>
                <td>{{$atividade->desc}}</td>
                <td>{{$atividade->valor}}</td>
                <td>{{$atividade->status}}</td>
            </tr>
        </tbody>
</table>
    @else
    <p>Atividade não encontrada! </p>
    @endif
    <a href="/atividades/"> Voltar </a>
</body>
</html>
