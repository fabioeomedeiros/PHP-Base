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
                <legend>Escolha</legend>
                <label for='id-num'>Número: </label>
                <input id='id-num' name='nm-num' type='number' >
                <br>
                <input id='id-raiz' name='oper' type='radio' value='1' checked> 
                <label for='id-raiz'>Raiz quadrada</label>
                <input id='id-dobro' name='oper' type='radio' value='2'> 
                <label for='id-dobro'>Dobro</label>
                <input id='id-cubo' name='oper' type='radio' value='3'> 
                <label for='id-cubo'>Cubo</label>
            </fieldset>
            <div id="display">
                <?php
                    $num = isset($_GET['nm-num'])?$_GET['nm-num']:0;
                    $op = isset($_GET['oper'])?$_GET['oper']:1;
                    switch ($op) {
                        case 1:
                            $r = sqrt($num);
                            $e = "Raiz";
                            break;
                        case 2:
                            $r = $num * 2;
                            $e = "Dobro";
                            break;
                        case 3:
                            $r = $num**3;
                            $e = "Cubo";
                    }
                    echo "O resultado da operação $e em $num é $r"
                ?>
            </div>
            <a class="back" href="javascript:history.back()">Voltar</a>
        </form>
    </div>
</body>
</html>