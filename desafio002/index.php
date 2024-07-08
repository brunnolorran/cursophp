<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 002 - Números Aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatórios de 0 a 100...</p>
        <?php 
        $numerorandomico = rand(1,100);
            echo "<p>O número gerado foi <strong>$numerorandomico</strong></p>"
        ?>
        <a href="."><button>🔄 Gerar outro</button></a>
    </section>
</body>
</html>