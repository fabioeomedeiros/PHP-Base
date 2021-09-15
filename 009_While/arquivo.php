<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../imagens/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css/estilo2.css">
    <!-- <script type="text/javascript" src="script.js"></script> -->

    <title>Operações</title>
</head>
<body>
    <div id="container">
        <h1>Operações</h1>
        <form>
        <fieldset>
                <legend>Contagem</legend>
                <table>
                    <tr>
                        <td>
                            <label for='id-i'>Início:</label>
                        </td>
                        <td>
                            <input id='id-i' name='nm-i' type='number'>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for='id-f'>Fim:</label>
                        </td>
                        <td>
                            <input id='id-f' name='nm-f' type='number'>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for='id-s'>Passo:</label>
                        </td>
                        <td>
                            <input id='id-s' name='nm-s' type='number'>
                        </td>
                    </tr>
                </table>
            </fieldset>
            <div id="display">
                <?php
                    $inicio = isset($_GET['nm-i'])?$_GET['nm-i']:0;
                    $fim = isset($_GET['nm-f'])?$_GET['nm-f']:0;
                    $passo = isset($_GET['nm-s'])?$_GET['nm-s']:0;

                    if ($inicio <= $fim) {
                        $i = $inicio;
                        while ($i <= $fim) {
                            echo "$i ";
                            $i = $i + $passo;
                        }
                    } else {
                        $i = $inicio;
                        while ($i >= $fim) {
                            echo "$i ";
                            $i = $i - $passo;
                        }
                    }
                ?>
            </div>
            <a class="back" href="javascript:history.back()">Voltar</a>
        </form>
    </div>
</body>
</html>