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
            $numerodigitado = $_GET["numero"] ?? "Nenhum";
            // $antecessor = $numerodigitado - 1;
            // $sucessor = $numerodigitado + 1;
            echo "
                    <p>O numero escolhido foi <strong>$numerodigitado</strong></p>
                    <p>O seu antecessor é <strong>$antecessor</strong></p>
                    <p>O seu sucessor é <strong>$sucessor</strong></p>
            ";
        ?>
        <a href="javascript:history.go(-1)">
            <button>&larr; Voltar</button>
        </a>
    </main>
</body>
</html>