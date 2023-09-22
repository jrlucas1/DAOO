</head>

<body>
    <h1>Insert new animais</h1>
    <form action="{{route('animais.update',$animal->id)}}" method="POST">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" value="{{$animal->nome}}"></td>
            </tr>
            <tr>
                <td>Sexo:</td>
                <td><input type="text" name="sexo" value="{{$animal->sexo}}"/></td>
            </tr>
            <tr>
                <td>Peso:</td>
                <td><input type="number" name="peso" value="{{$animal->peso}}"/></td>
            </tr>
            <tr>
                <td>Idade:</td>
                <td><input type="number" name="idade" value="{{$animal->idade}}"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" value="Atualizar"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><a href="/animais" style="display: inline">&#9664;&nbsp;Voltar</a></td>
            </tr>
        </table>
    </form>
</body>

</html>
