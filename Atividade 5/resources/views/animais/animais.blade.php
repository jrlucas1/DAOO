<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Animais</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4">Animais</h1>
        @if ($animais->count()>0)
        <table class="table-auto w-full">
            <thead>
                <tr class="bg-gray-200">
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
                <tr class="border-b border-gray-200">
                    <td class="px-4 py-2"><a href="{{route('singleAnm', $animal->id)}}" class="text-blue-500 hover:text-blue-700">{{$animal->id}}</a></td>
                    <td class="px-4 py-2">{{$animal->nome}}</td>
                    <td class="px-4 py-2">{{$animal->sexo}}</td>
                    <td class="px-4 py-2">{{$animal->peso}}</td>
                    <td class="px-4 py-2">{{$animal->idade}}</td>
                    <td class="px-4 py-2">
                        <a href="{{route('animais.edit', $animal->id)}}" class="text-yellow-500 hover:text-yellow-700">Editar</a>
                        <a href="{{route('animais.delete', $animal->id)}}" class="inline-block">
                            <button type="submit" class="text-red-500 hover:text-red-700">Deletar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        
        </table>
        @else
        <p class="text-red-500">Produtos não encontrados! </p>
        @endif
        <div class="mt-4">
                <a href="{{ route('animais.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Adicionar Animal
                </a>
            </div>
    </div>
    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
