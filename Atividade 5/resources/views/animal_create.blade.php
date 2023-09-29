<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Animais</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200">
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Insert new animais</h1>
        <form action="/animal" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="nome">
                    Nome:
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="nome" id="nome">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="sexo">
                    Sexo:
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="sexo" id="sexo">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="peso">
                    Peso:
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="peso" id="peso">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="idade">
                    Idade:
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="idade" id="idade">
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Criar
                </button>
                <a href="/animais" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                    Voltar
                </a>
            </div>
        </form>
    </div>
</body>

</html>
