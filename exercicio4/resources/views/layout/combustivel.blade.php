<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gasto de Combustível</title>
    <link rel="stylesheet" href="{{asset('css/styleGlobal.css')}}">
    <link rel="stylesheet" href="{{asset('css/styleCombustivel.css')}}">
</head>

<body>
    <div>
        <h1>Instruções</h1>
        <p>Esta aplicação calcula o valor gasto com combustível durante a viagem, baseado no consumo do veículo e na
            distância percorrida.</p>
    </div>

    <div>
        <h1>Cálculo do Valor (R$) do Consumo</h1>
        <form action="{{ url('combustivel/calcular') }}" method="GET">
            <label for="tipo">Tipo de Combustível:</label>
            <select id="tipo" name="tipo" required>
                <option value="" disabled selected>Selecione o tipo de combustível</option>
                <option value="Gasolina">Gasolina</option>
                <option value="Etanol">Etanol</option>
                <option value="Diesel">Diesel</option>
                <option value="GNV">GNV</option>
            </select>
            <br>

            <label for="valor">Valor por litro (R$):</label>
            <input type="number" step="0.01" id="valor" name="valor" required>
            <br>

            <label for="distancia">Distância a percorrer (km):</label>
            <input type="number" step="0.1" id="distancia" name="distancia" required>
            <br>

            <label for="consumo">Consumo do veículo (km/l):</label>
            <input type="number" step="0.1" id="consumo" name="consumo" required>
            <br><br>

            <button type="submit">Calcular</button>
        </form>
    </div>

    <br>
    <a href="/">Voltar</a>
</body>

</html>
