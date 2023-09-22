<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Animais</title>
</head>

<body>
    <h1>Insert new animais</h1>
    <form action="/animal" method="POST">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome"></td>
            </tr>
            <tr>
                <td>Sexo:</td>
                <td><input type="text" name="sexo"/></td>
            </tr>
            <tr>
                <td>Peso:</td>
                <td><input type="number" name="peso"/></td>
            </tr>
            <tr>
                <td>Idade:</td>
                <td><input type="number" name="idade"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" value="Criar"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><a href="/animais" style="display: inline">&#9664;&nbsp;Voltar</a></td>
            </tr>
        </table>
    </form>
</body>

</html>
