<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Atividades</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-8">Atividades</h1>
        <form action="{{ route('atividades.search') }}" method="GET" class="mb-8">
            <input type="text" name="search" required class="border-2 border-gray-300 p-2 w-full" placeholder="Search..."/>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2">Search</button>
        </form>

        @if ($atividades->count()>0)
        <table class="table-auto w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-2">Id</th>
                    <th class="px-4 py-2">Descricao</th>
                    <th class="px-4 py-2">Valor</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($atividades as $atividade)
                <tr class="text-gray-700">
                    <td class="border px-4 py-2"><a href="{{route('singleAtv', $atividade->id)}}" class="text-blue-500 hover:text-blue-700">{{$atividade->id}}</a></td>
                    <td class="border px-4 py-2">{{$atividade->desc}}</td>
                    <td class="border px-4 py-2">{{$atividade->valor}}</td>
                    <td class="border px-4 py-2">{{$atividade->status}}</td>
                    <td class="border px-4 py-2">
                        <a href="{{route('edit', $atividade->id)}}" class="text-blue-500 hover:text-blue-700" title="Editar">&#9998;</a>
                        <a href="{{route('atividades.delete', $atividade->id)}}" class="text-red-500 hover:text-red-700" title="Deletar">&#128465;</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p class="text-lg">Atividades não encontradas! </p>
        @endif
    </div>
    <div class="flex justify-center mt-4 pr-8">
        <a href="{{route('atividade.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ">Adicionar Atividade</a>
    </div>
</body>
</html>