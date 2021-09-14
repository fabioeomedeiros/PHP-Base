<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../imagens/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <!-- <script type="text/javascript" src="script.js"></script> -->
    <title>Maior de Idade</title>
</head>
<body>
    <div id="container">
        <h1>Maior de Idade</h1>
       
        <form action="arquivo.php" method="GET">
            <fieldset>
                <legend>Idade</legend>
                <label for='id-nasc'>Ano de Nascimento: </label>
                <input id='id-nasc' name='nm-nasc' type='number' min='1870'>
            </fieldset>
            <div id='code'>
                <?php
                    $nasc = isset($_GET['nm-nasc'])?$_GET['nm-nasc']:0;
                    $idade = date(Y) - $nasc;
                    echo $idade;
                ?>
             </div>
             <a class="back" href="javascript:history.back()">Voltar</a>
        </form>
    </div>
</body>
</html>