<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotação do Dólar - Conversor de Moedas v1.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            const COTACAO = 5.22;

            $valoremreal = floatval($_GET["valordigitado"]);
            $valoremrealformatado = number_format($valoremreal,2, ',', '.');

            $valorconvertido = round($valoremreal/COTACAO, 2);
            $valorconvertidoformatado = number_format($valorconvertido,2, ',', '.');

            echo "<p>Seus R$ $valoremrealformatado equivalem a <strong>US$  $valorconvertidoformatado</strong></p>"
        ?>
        <p class="text-small"><strong>*Cotação fixa de R$ 5,22</strong> informada diretamente no código.</p>
    </section>
</body>
</html>