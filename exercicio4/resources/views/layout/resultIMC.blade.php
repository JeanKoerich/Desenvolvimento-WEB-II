<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado IMC</title>
    <link rel="stylesheet" href="{{asset('css/styleGlobal.css')}}">
    <link rel="stylesheet" href="{{asset('css/styleIMC.css')}}">
</head>

<body>
    <h1>Resultado do Cálculo de IMC</h1>
    <h2>Seu IMC é: {{ $valor }}</h2>
    <br>
    <a href="/saude">Voltar</a>
</body>

</html>
