<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../imagens/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css/estilo2.css">
    <!-- <script type="text/javascript" src="script.js"></script> -->

    <title>Maior de Idade</title>
</head>
<body>
    <div id="container">
        <h1>Maior de Idade</h1>
        <form>
        <fieldset>
                <legend>Verificação</legend>
                <label for='id-nome'>Nome: </label>
                <input id='id-nome' name='nm-nome' type='text' placeholder='Escreva seu nome'>
                <br>
                <label for='id-nasc'>Ano de Nascimento: </label>
                <input id='id-nasc' name='nm-nasc' type='number' min="1970" placeholder='4 dígitos'>
            </fieldset>
            <div id="display">
                <?php
                    $nome = isset($_GET['nm-nome'])?$_GET['nm-nome']:"<nome não informado>";
                    $nasc = isset($_GET['nm-nasc'])?$_GET['nm-nasc']:0;
                    $idade = date('Y') - $nasc;
                    echo "$nome tem $idade de idade";
                    echo "</br>"; echo "</br>";
                    if ($idade < 16) {
                        echo "Voto e Habilitação PROIBIDOS";
                    } elseif ($idade < 18) {
                        echo "Voto OPCIONAL e Habilitação PROIBIDA";
                    } elseif ($idade < 65) {
                        echo "Voto OBRIGATÓRIO e Habilitação OPCIONAL";
                    } else {
                        echo "Voto e Habilitação OPICIONAIS";
                    }

                ?>
            </div>
            <a class="back" href="javascript:history.back()">Voltar</a>
        </form>
    </div>
</body>
</html>