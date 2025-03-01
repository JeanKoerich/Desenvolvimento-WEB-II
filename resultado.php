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

    $nome     = $_REQUEST['nome'];
    $telefone = $_REQUEST['telefone'];
    $email    = $_REQUEST['email'];
    $mensagem = $_REQUEST['mensagem'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email = "E-mail inválido";
    }

    $data = "";
    $data .= "<p><strong>Nome:</strong> " . htmlspecialchars($nome) . "</p>";
    $data .= "<p><strong>Telefone:</strong> " . htmlspecialchars($telefone) . "</p>";
    $data .= "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
    $data .= "<p><strong>Mensagem:</strong> " . nl2br(htmlspecialchars($mensagem)) . "</p>";

    $data .= "<h2>Método HTTP Utilizado</h2>";
    $data .= "<p><strong>Método:</strong> " . $_SERVER['REQUEST_METHOD'] . "</p>";

    $data .= "<h2>Cabeçalhos da Requisição</h2>";
    $cabecalhos = function_exists('getallheaders') ? getallheaders() : 
    (function_exists('apache_request_headers') ? apache_request_headers() : []);
    
    if (!empty($cabecalhos)) {
        foreach ($cabecalhos as $header => $value) {
            $data .= "<p><strong>" . htmlspecialchars($header) . ":</strong> " . 
            htmlspecialchars($value) . "</p>";
        }
    } else {
        $data .= "<p>Nenhum cabeçalho disponível.</p>";
    }

    require_once __DIR__ . '/vendor/autoload.php';
    $mpdf = new \Mpdf\Mpdf();
    $mpdf -> WriteHTML($data);
    $mpdf -> Output("resultado.pdf" , "I");
    ?>
    
</body>
</html>
