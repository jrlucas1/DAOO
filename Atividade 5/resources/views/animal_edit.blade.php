<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Animais</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <h1 class="text-3xl font-bold text-center mb-8">Insert new animais</h1>
    <form action="{{route('animais.update',$animal->id)}}" method="POST" class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <div class="mb-4">
            <label for="nome" class="block text-gray-700 font-bold mb-2">Nome:</label>
            <input type="text" name="nome" id="nome" value="{{$animal->nome}}" class="border border-gray-400 p-2 w-full rounded-lg">
        </div>
        <div class="mb-4">
            <label for="sexo" class="block text-gray-700 font-bold mb-2">Sexo:</label>
            <input type="text" name="sexo" id="sexo" value="{{$animal->sexo}}" class="border border-gray-400 p-2 w-full rounded-lg">
        </div>
        <div class="mb-4">
            <label for="peso" class="block text-gray-700 font-bold mb-2">Peso:</label>
            <input type="number" name="peso" id="peso" value="{{$animal->peso}}" class="border border-gray-400 p-2 w-full rounded-lg">
        </div>
        <div class="mb-4">
            <label for="idade" class="block text-gray-700 font-bold mb-2">Idade:</label>
            <input type="number" name="idade" id="idade" value="{{$animal->idade}}" class="border border-gray-400 p-2 w-full rounded-lg">
        </div>
        <div class="flex justify-center">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Atualizar</button>
        </div>
        <div class="flex justify-center mt-4">
            <a href="/animais" class="text-gray-600 hover:text-gray-800"> &#9664;&nbsp;Voltar</a>
        </div>
    </form>
</body>

</html>
