<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Animais</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-8">Animais</h1>
        @if ($animais->count()>0)
        <table class="table-auto w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-2">Id</th>
                    <th class="px-4 py-2">Nome</th>
                    <th class="px-4 py-2">Sexo</th>
                    <th class="px-4 py-2">Peso</th>
                    <th class="px-4 py-2">Idade</th>
                    <th class="px-4 py-2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($animais as $animal)
                <tr class="text-gray-700">
                    <td class="border px-4 py-2">{{$animal->id}}</td>
                    <td class="border px-4 py-2">{{$animal->nome}}</td>
                    <td class="border px-4 py-2">{{$animal->sexo}}</td>
                    <td class="border px-4 py-2">{{$animal->peso}}</td>
                    <td class="border px-4 py-2">{{$animal->idade}}</td>
                    <td class="border px-4 py-2">
                        <a href="{{route('animais.edit', $animal->id)}}" class="text-blue-500 hover:text-blue-700">Editar</a>
                        <a href="{{route('animais.delete', $animal->id)}}" class="text-red-500 hover:text-red-700">Deletar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p class="text-lg">Animais não encontrados! </p>
        @endif
    </div>
    <div class="flex justify-center mt-4 pr-8">
        <a href="{{route('animais.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Adicionar Animal</a>
    </div>
</body>
</html>