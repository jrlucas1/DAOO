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
    @if ($atividades->count()>0)
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
            @foreach($atividades as $atividade)
            <tr>
                <td> <a href="{{route('singleAtv', $atividade->id)}}" > {{$atividade->id}} </a></td>
                <td>{{$atividade->desc}}</td>
                <td>{{$atividade->valor}}</td>
                <td>{{$atividade->status}}</td>
                <td><a href="{{route('delete', $atividade->id)}}" title="Deletar">&#128465</a></td>
            </tr>
            @endforeach
        </tbody>
</table>
    @else
    <p>Atividades não encontradas! </p>
    @endif

</body>
</html>
