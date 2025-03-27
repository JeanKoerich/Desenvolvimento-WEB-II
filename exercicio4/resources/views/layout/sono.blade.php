<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horas de Sono</title>
    <link rel="stylesheet" href="{{asset('css/styleGlobal.css')}}">
    <link rel="stylesheet" href="{{asset('css/styleSono.css')}}">
</head>

<body>
    <h1>Horas de Sono</h1>

    <form action="{{ url('/sono/calcular') }}" method="GET">
        <label for="data_nascimento">Qual a sua data de nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" required>
        <br>

        <label for="sono">Quantas horas dormiu:</label>
        <input type="number" step="0.1" id="sono" name="sono" min="0" max="24" required>
        <br><br>

        <button type="submit">Recomendação diária de sono</button>
    </form>

    <br>
    <a href="/">Voltar</a>
</body>

</html>
