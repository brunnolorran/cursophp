<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h1>Resultado final</h1>
    </header>
    <main>
        <?php 
            $numerodigitado = intval($_GET["numero"]) ?? 0;
            echo "
                    <p>O número escolhido foi <strong>$numerodigitado</strong></p>
                    <p>O seu antecessor é <strong>".($numerodigitado - 1)."</strong></p>
                    <p>O seu sucessor é <strong>".($numerodigitado + 1)."</strong></p>
            ";
        ?>
        <button onclick="javascript:window.location.href='index.html'">&larr; Voltar</button>
    </main>
</body>
</html>