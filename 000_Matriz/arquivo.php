<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../imagens/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css/estilo2.css">
    <!-- <script type="text/javascript" src="script.js"></script> -->

    <title>Título</title>
</head>
<body>
    <div id="container">
        <h1>Título</h1>
        <form>
            <fieldset>
                <legend>Campo</legend>
            </fieldset>
            <div id="display">
                <?php
                    $nome = "   Fabio Medeiros    ";
                    // $nome = trim($nome);
                    echo $nome;
                ?>
            </div>
            <a class="back" href="javascript:history.back()">Voltar</a>
        </form>
    </div>
</body>
</html>