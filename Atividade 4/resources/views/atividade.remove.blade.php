
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    @if ($atividade)
        <h1>{{ $atividade->Id }}</h1>
        <p>{{ $atividade->descricao }}</p>
        <ul>
            <li>Status: {{ $atividade->status }}</li>
            <li>Valor: {{ $atividade->valor }}</li>
        </ul>
        <table>
            <tr>
                <td>
                    <form action="{{ route('atividades.remove',$atividade->id) }}" method='post'>
                        @csrf
                        <input type="submit" name='confirmar' value="Remover" />
                    </form>
                </td>
                <td>
                    <a href="/atividades/"><button>Cancelar</button></a>
                </td>
            </tr>
        </table>
    @else
        <p>Produtos não encontrados! </p>
    @endif
    <a href="/atividades/">&#9664;Voltar</a>
</body>
</html>

