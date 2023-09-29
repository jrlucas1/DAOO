<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <!-- Import Tailwind CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Produtos</h1>
        @if ($produtos->count()>0)
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">Id</th>
                    <th class="px-4 py-2">Nome</th>
                    <th class="px-4 py-2">Descricao</th>
                    <th class="px-4 py-2">Preco</th>
                    <th class="px-4 py-2">Quantidade</th>
                    <th class="px-4 py-2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produtos as $produto)
                <tr>
                    <td class="border px-4 py-2"><a href="{{route('singleProd', $produto->id)}}" class="text-blue-500 hover:text-blue-800">{{$produto->id}}</a></td>
                    <td class="border px-4 py-2">{{$produto->nome}}</td>
                    <td class="border px-4 py-2">{{$produto->desc}}</td>
                    <td class="border px-4 py-2">{{$produto->preco}}</td>
                    <td class="border px-4 py-2">{{$produto->quantidade}}</td>
                    <td class="border px-4 py-2">
                        <a href="{{route('produtos.edit', $produto->id)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                       <a href="{{route('produtos.delete', $produto->id)}}" class="inline-block"> Delete </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p class="text-lg font-bold">Produtos não encontrados! </p>
        @endif
        <div class="flex justify-end mb-4">
                <a href="{{ route('produtos.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Novo Produto</a>
            </div>
        </table>
    </div>
</body>
</html>
