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
        <legend>Notas</legend>
                <label for='id-nome'>Nome do Aluno:</label>
                <input id='id-nome' name='nm-nome' type='text'>
                <br>
                <label for='id-n1'>Nota 1:</label>
                <input id='id-n1' name='nm-n1' type='number' min='0' max='10' step='0.5'>
                <br>
                <label for='id-n2'>Nota 2:</label>
                <input id='id-n2' name='nm-n2' type='number' min='0' max='10' step='0.5'>
            </fieldset>
            <div id="display">
                <?php
                    $nome = isset($_GET['nm-nome'])?$_GET['nm-nome']:"<nome não informado>";
                    $n1 = isset($_GET['nm-n1'])?$_GET['nm-n1']:0;
                    $n2 = isset($_GET['nm-n2'])?$_GET['nm-n2']:0;
                    $media = ($n1 + $n2) / 2;
                    $n1 = number_format($n1, 1);
                    $n2 = number_format($n2, 1);
                    $media = number_format($media, 1);
                    if ($media < 4) {
                        $sit = "REPROVADO";
                    } elseif ($media < 7) {
                        $sit = "PROVA FINAL";
                    } else {
                        $sit = "APROVADO";
                    }
                    echo "$nome tirou $n1 e $n2 alcançando a média: $media <br>";
                    echo "A situação de $nome é: $sit <br>";
                ?>
            </div>
            <a class="back" href="javascript:history.back()">Voltar</a>
        </form>
    </div>
</body>
</html>