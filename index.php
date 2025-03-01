<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão PHP</title>
    <link rel="stylesheet" href="estilo.css" >
</head>
<body>
    <form action="resultado.php" method="GET">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" required>
        <br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" rows="4" required></textarea>
        <br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
