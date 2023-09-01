<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividades</title>
</head>

<body>
    <h1>Update Atividade</h1>
    <form action="{{route('atividade.update',$atividade->id)}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Descricao:</td>
                <td><textarea name="desc" id="" cols="30" rows="10">{{$atividade->desc}}</textarea></td>
            </tr>
            <tr>
                <td>Preço:</td>
                <td><input type="number" name="valor" step=".01" value="{{$atividade->valor}}"/></td>
            </tr>
            <tr>
                <td>Status:</td>
                <td><input type="text" name="status" value="{{$atividade->status}}"/></td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <input type="submit" value="Salvar"/>
                    <a href="/atividades/"><button form=cancel >Cancelar</button></a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
