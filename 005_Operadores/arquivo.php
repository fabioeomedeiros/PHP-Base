<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../imagens/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <!-- <script type="text/javascript" src="script.js"></script> -->
    <title>Operadores</title>
</head>
<body>
    <div id="container">
        <h1>Operadores</h1>
        <div id="code">
            <?php
                $n1 = 103^5;
                $n2 = 3;
                $div = ($n1 / $n2);
                echo "R$ ".number_format($div, 2, ",", ".");
            ?>
        </div>
        <a class="back" href="javascript:history.back()">Voltar</a>
    </div>
</body>
</html>