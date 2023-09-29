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
            @if ($animal)
            <h1 class="title">{{ $animal->nome }}</h1>
            <p class="subtitle">{{ $animal->descricao }}</p>
            <table>
            <thead>
                <tr>
                    <th class="px-4 py-2">Id</th>
                    <th class="px-4 py-2">Nome</th>
                    <th class="px-4 py-2">Sexo</th>
                    <th class="px-4 py-2">Peso</th>
                    <th class="px-4 py-2">Idade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border px-4 py-2">{{$animal->id}}</td>
                    <td class="border px-4 py-2">{{$animal->nome}}</td>
                    <td class="border px-4 py-2">{{$animal->sexo}}</td>
                    <td class="border px-4 py-2">{{$animal->peso}}</td>
                    <td class="border px-4 py-2">{{$animal->idade}}</td>
                </tr>
            </tbody>
        </table>
            <form action="{{route('animais.remove',$animal->id) }}" method='post'>
                @csrf
                <div class="field is-grouped">
                    <div class="control">
                    <input type="submit" name="confirmar" value="Deletar" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    </div>
                    <div class="control">
                        <a href="/animais" class="button is-link">Cancelar</a>
                    </div>
                </div>
            </form>
            @else
            <p class="subtitle">Animais não encontrados! </p>
            @endif
            <a href="/animais" class="button is-link is-light">&#9664;Voltar</a>
        </div>
    </section>
</body>

</html>