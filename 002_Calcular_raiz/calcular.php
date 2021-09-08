<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"> -->
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <!-- <script type="text/javascript" src="script.js"></script> -->
    <title>Hello World</title>
</head>
<body>
    <div id="container">
        <h1>Calcular Raiz</h1>
        <div id="code">
            <?php
                $valor = $_GET["nm-sqrt"];
                $rq = sqrt($valor);
                echo "A raiz quadrada de $valor é ".number_format($rq, 2);
            ?>
            <a class="back" href="javascript:history.back()">Voltar</a>
        </div> 
    </div>
</body>
</html>