<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>switch</title>
</head>
<body>
    <?php
        $n = isset ($_GET["num"]) ? $_GET ["num"] : 0;
        //a variavel $_GET[num] foi definida? se sim pode usar : se não colocar o valor 0. Em resumo, o código verifica se $_GET["num"] está definido. Se estiver definido, $n receberá esse valor. Se não estiver definido, $n receberá o valor 0 como padrão. Isso é útil para evitar mensagens de erro quando a variável $_GET["num"] não está presente na URL.
        $o = isset ($_GET["oper"])? $_GET["oper"] : 1;
        switch ($o) {
            case '1':
                $r = $n * 2;
                break;
            case '2':
                $r = $n ^ 0.5;
                break;    
            case '3':
                $r = $n ^3;
        }
        echo "O resultado da operação solicitada foi .$r "
    ?>
    <br>
    <a href="switch.php">voltar

    </a>

</body>
</html>