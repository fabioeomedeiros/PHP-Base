<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../imagens/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <!-- <script type="text/javascript" src="script.js"></script> -->

    <?php
        $txt = isset($_GET["nm-texto"])?$_GET["nm-texto"]:"[texto não informado]";
        $tam = isset($_GET["nm-tam"])?$_GET["nm-tam"]:"14pt";
        $cor = isset($_GET["nm-cor"])?$_GET["nm-cor"]:"#ff0000";
    ?>

    <style>
        span#texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>

    <title>Formatação de Texto</title>
</head>
<body>
    <div id="container">
        <h1>Formatação de Texto</h1>
        <div id="code">
            <?php
                echo "<span id='texto'>$txt</span>";
            ?>
        </div>
        <a class="back" href="javascript:history.back()">Voltar</a>
    </div>
</body>
</html>