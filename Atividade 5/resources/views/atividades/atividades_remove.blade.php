<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
</head>

<body>
    <section class="section">
        <div class="container">
            @if ($atividade)
            <h1 class="title">{{ $atividade->nome }}</h1>
            <p class="subtitle">{{ $atividade->descricao }}</p>
            <table class="table is-fullwidth">
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
            <form action="{{route('atividades.remove',$atividade->id) }}" method='post'>
                @csrf
                <div class="field is-grouped">
                    <div class="control">
                    <input type="submit" name="confirmar" value="Deletar" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    </div>
                    <div class="control">
                        <a href="/atividades" class="button is-link">Cancelar</a>
                    </div>
                </div>
            </form>
            @else
            <p class="subtitle">Produtos não encontrados! </p>
            @endif
            <a href="/atividades" class="button is-link is-light">&#9664;Voltar</a>
        </div>
    </section>
</body>

</html>