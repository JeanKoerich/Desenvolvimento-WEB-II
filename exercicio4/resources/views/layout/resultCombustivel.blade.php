<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Gasto de Combustível</title>
    <link rel="stylesheet" href="{{asset('css/styleGlobal.css')}}">
    <link rel="stylesheet" href="{{asset('css/styleCombustivel.css')}}">
</head>

<body>
    <h1>Resultado do Cálculo de Consumo</h1>
    <h2>O valor total do gasto será de:</h2>
    <p>{{ $tipo }} - R$ {{ $gasto }}</p>

    <br>
    <a href="/combustivel">Voltar</a>
</body>

</html>
