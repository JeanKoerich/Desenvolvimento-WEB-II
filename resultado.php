<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h2>Dados Recebidos</h2>

    <?php
    $nome     = trim($_REQUEST['nome'] ?? 'Não informado');
    $telefone = trim($_REQUEST['telefone'] ?? 'Não informado');
    $email    = trim($_REQUEST['email'] ?? 'Não informado');
    $mensagem = trim($_REQUEST['mensagem'] ?? 'Não informado');

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email = "E-mail inválido";
    }

    echo "<p><strong>Nome:</strong> " . htmlspecialchars($nome) . "</p>";
    echo "<p><strong>Telefone:</strong> " . htmlspecialchars($telefone) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Mensagem:</strong> " . nl2br(htmlspecialchars($mensagem)) . "</p>";

    echo "<h2>Método HTTP Utilizado</h2>";
    echo "<p><strong>Método:</strong> " . $_SERVER['REQUEST_METHOD'] . "</p>";

    echo "<h2>Cabeçalhos da Requisição</h2>";
    $cabecalhos = function_exists('getallheaders') ? getallheaders() : (function_exists('apache_request_headers') ? apache_request_headers() : []);
    
    if (!empty($cabecalhos)) {
        foreach ($cabecalhos as $header => $value) {
            echo "<p><strong>" . htmlspecialchars($header) . ":</strong> " . htmlspecialchars($value) . "</p>";
        }
    } else {
        echo "<p>Nenhum cabeçalho disponível.</p>";
    }
    ?>

</body>
</html>
