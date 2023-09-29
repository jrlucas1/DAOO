<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
    <!-- Import Tailwind CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Produto</h1>
        @if ($produto)
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">Id</th>
                    <th class="px-4 py-2">Nome</th>
                    <th class="px-4 py-2">Descricao</th>
                    <th class="px-4 py-2">Preco</th>
                    <th class="px-4 py-2">Quantidade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border px-4 py-2">{{$produto->id}}</td>
                    <td class="border px-4 py-2">{{$produto->nome}}</td>
                    <td class="border px-4 py-2">{{$produto->desc}}</td>
                    <td class="border px-4 py-2">{{$produto->preco}}</td>
                    <td class="border px-4 py-2">{{$produto->quantidade}}</td>
                </tr>
            </tbody>
        </table>
        @else
        <p class="text-lg font-bold">Produto não encontrado! </p>
        @endif
    </div>
</body>
</html>
