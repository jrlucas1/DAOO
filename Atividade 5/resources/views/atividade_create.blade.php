<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividades</title>
</head>

<body>
    <h1>Insert new atividade</h1>
    <form action="/atividade" method="POST">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>Descricao:</td>
                <td><textarea name="desc" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>Valor:</td>
                <td><input type="number" name="valor"/></td>
            </tr>
            <tr>
                <td>Status:</td>
                <td><input type="text" name="status"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" value="Criar"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><a href="/atividades" style="display: inline">&#9664;&nbsp;Voltar</a></td>
            </tr>
        </table>
    </form>
</body>

</html>
