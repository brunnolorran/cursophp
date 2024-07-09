<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotação do Dólar - Conversor de Moedas v2.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v2.0</h1>
        <?php 
            date_default_timezone_set('America/Sao_Paulo');
            $dataatual = date("m-d-Y");
            $urldolar = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='".$dataatual."'&\$top=100&\$format=json";
            $objeto = json_decode(file_get_contents($urldolar));
            $cotacaoCompra = round($objeto->value[0]->cotacaoCompra,2);
            
            $valoremreal = floatval($_GET["valordigitado"]);
            $valoremrealformatado = number_format($valoremreal,2, ',', '.');

            $valorconvertido = round($valoremreal/$cotacaoCompra, 2);
            $valorconvertidoformatado = number_format($valorconvertido,2, ',', '.');

            echo "<p>Seus R$ $valoremrealformatado equivalem a <strong>US$  $valorconvertidoformatado</strong></p>"
        ?>
        <p class="text-small">*Cotação obtida diretamente do site do <strong>Banco Central do Brasil</strong></p>
    </section>
</body>
</html>