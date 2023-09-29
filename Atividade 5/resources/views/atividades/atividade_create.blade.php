<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividades</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-8">Insert new atividade</h1>
        <form action="/atividade" method="POST">
            @csrf
            {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
            <div class="bg-white rounded-lg shadow-lg p-8">
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="desc">
                        Descricao:
                    </label>
                    <textarea class="form-textarea mt-1 block w-full" name="desc" id="desc" cols="30" rows="10"></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="valor">
                        Valor:
                    </label>
                    <input class="form-input mt-1 block w-full" type="number" name="valor" id="valor">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="status">
                        Status:
                    </label>
                    <input class="form-input mt-1 block w-full" type="text" name="status" id="status">
                </div>
                <div class="flex justify-center">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                        Criar
                    </button>
                </div>
                <div class="flex justify-center mt-4">
                    <a href="/atividades" class="text-gray-600 hover:text-gray-800">
                        &#9664;&nbsp;Voltar
                    </a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
