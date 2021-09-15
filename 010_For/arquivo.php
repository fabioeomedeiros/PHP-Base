<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../imagens/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css/estilo2.css">
    <!-- <script type="text/javascript" src="script.js"></script> -->

    <!-- <style>
        td {
            padding:0px 5px;
        }
    </style> -->

    <title>For</title>
</head>
<body>
    <div id="container">
        <h1>For</h1>
        <form>
            <fieldset>
                <legend>Contagem</legend>
            </fieldset>
            <div id="display">
                <?php
                    $inicio = isset($_GET['nm-i'])?$_GET['nm-i']:0;
                    $fim = isset($_GET['nm-f'])?$_GET['nm-f']:0;
                    $passo = isset($_GET['nm-s'])?$_GET['nm-s']:0;
                    if ($inicio <= $fim) {
                        for ($i = $inicio; $i <= $fim; $i += $passo) {
                            echo "$i ";
                        }
                    } else {
                        for ($i = $inicio; $i >= $fim; $i -= $passo) {
                            echo "$i ";
                        }
                    }
                ?>
                <br>
                <?php
                    $n = isset($_GET['nm-num'])?$_GET['nm-num']:0;
                    echo "$n <br/>";
                    echo "<table>";
                    for ($i = 0; $i<=10; $i++) {
                        $p = $i * $n;
                        echo "<tr>
                                <td> $i </td>
                                <td> x </td>
                                <td> $n </td>
                                <td> = </td>
                                <td> $p </td>
                            <tr/>";
                    }
                    echo "</table>";
                ?> 
            </div>
            <a class="back" href="javascript:history.back()">Voltar</a>
        </form>
    </div>
</body>
</html>