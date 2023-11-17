<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividades</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto py-4">
        <h1 class="text-2xl font-bold mb-4">Update Atividade</h1>
        <form action="{{route('atividade.update',$atividade->id)}}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="1">
            <table class="w-full">
                <tr>
                    <td class="py-2">Descricao:</td>
                    <td><textarea name="desc" id="" cols="30" rows="10" class="w-full border rounded-lg p-2">{{$atividade->desc}}</textarea></td>
                </tr>
                    <td class="py-2">Preço:</td>
                    <td><input type="number" name="valor" step=".01" value="{{$atividade->valor}}" class="w-full border rounded-lg p-2"/></td>
                </tr>
                <tr>
                    <td class="py-2">Status:</td>
                    <td><input type="text" name="status" value="{{$atividade->status}}" class="w-full border rounded-lg p-2"/></td>
                </tr>
                <tr align="center">
                    <td colspan="2">
                        <input type="submit" value="Salvar" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"/>
                        <a href="/atividades/"><button form=cancel class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Cancelar</button></a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
