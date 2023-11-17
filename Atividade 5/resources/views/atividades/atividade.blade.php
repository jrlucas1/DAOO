<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Atividades</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-8">Atividades</h1>
        @if ($atividade)
        <table class="w-full text-left table-auto">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2">Id</th>
                    <th class="px-4 py-2">Descricao</th>
                    <th class="px-4 py-2">Valor</th>
                    <th class="px-4 py-2">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border px-4 py-2">{{$atividade->id}}</td>
                    <td class="border px-4 py-2">{{$atividade->desc}}</td>
                    <td class="border px-4 py-2">{{$atividade->valor}}</td>
                    <td class="border px-4 py-2">{{$atividade->status}}</td>
                </tr>
            </tbody>
        </table>
        @else
        <p class="text-red-500">Atividade não encontrada!</p>
        @endif
        <a href="/atividades/" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-8 inline-block">Voltar</a>
    </div>
</body>
</html>