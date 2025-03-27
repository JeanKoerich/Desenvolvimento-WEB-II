    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cálculo IMC</title>
        <link rel="stylesheet" href="{{asset('css/styleGlobal.css')}}">
        <link rel="stylesheet" href="{{asset('css/styleIMC.css')}}">
    </head>

    <body>
        <h1>Calculadora de IMC</h1>

        <form action="{{ url('/saude/calcular') }}" method="GET">
            <label for="peso">Qual é o seu peso? (kg):</label>
            <input type="number" id="peso" name="peso" step="0.1" required>
            <br>

            <label for="altura">Qual é a sua altura? (cm):</label>
            <input type="number" step="1" id="altura" name="altura" required>
            <br><br>

            <button type="submit">Calcular IMC</button>
        </form>

        <br>
        <a href="/">Voltar</a>
    </body>

    </html>
