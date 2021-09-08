<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../imagens/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <!-- <script type="text/javascript" src="script.js"></script> -->
    <title>Cadastro Simples</title>
</head>
<body>
    <div id="container">
        <h1>Cadastro Simples</h1>
        <div id="code">
            <?php
                $nome = isset($_GET["nm-nome"])?$_GET["nm-nome"]:"[nome não informado]";
                $nasc = isset($_GET["nm-nasc"])?$_GET["nm-nasc"]:0;
                $sexo = isset($_GET["nm-sexo"])?$_GET["nm-sexo"]:"[seco não informado]";
                $idade = date("Y") - $nasc;
                echo "$nome nasceu em $nasc tem $idade anos e é $sexo"
            ?>
        </div>
        <a class="back" href="javascript:history.back()">Voltar</a>
    </div>
</body>
</html>