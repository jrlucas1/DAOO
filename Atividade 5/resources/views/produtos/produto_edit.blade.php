<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <!-- Adicionando o CDN do Tailwind CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <form method="POST" action="{{ route('produtos.update', $produto->id) }}" class="space-y-4">
                <div>
                    <label for="nome" class="block text-sm font-medium text-gray-700">Nome:</label>
                    <input type="text" name="nome" value="{{ $produto->nome }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div>
                    <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição:</label>
                    <textarea name="descricao" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $produto->descricao }}</textarea>
                </div>
                <div>
                    <label for="preco" class="block text-sm font-medium text-gray-700">Preço:</label>
                    <input type="number" name="preco" value="{{ $produto->preco }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div>
                    <label for="quantidade" class="block text-sm font-medium text-gray-700">Quantidade:</label>
                    <input type="number" name="quantidade" value="{{ $produto->quantidade }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="flex items-center justify-end">
                    <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150">
                        Atualizar
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
