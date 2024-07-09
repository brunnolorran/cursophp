<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio - Analisador de Número Real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Analisador de Número Real</h1>
        <?php 
            $numeroreal = $_GET["valordigitado"];
            $numerorealformatado = number_format($numeroreal,10, ',', '.');
            $numerointeiroarredondado = round($numeroreal);
            $partefracionaria = substr(strpbrk($numeroreal, '.,'), 1);

            echo "<p>Analisando o número <strong>$numerorealformatado</strong> informado pelo usuário:</p>";

            echo "<ul><li>A parte inteira do número é <strong>$numerointeiroarredondado</strong></li><li>A parte fracionária do número é <strong>0,$partefracionaria</strong></li></ul>"
        ?>
    </section>
</body>
</html>