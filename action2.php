<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch 02</title>
</head>
<body>
    <?php

    $d = isset ($_GET["dia"]) ? $_GET["dia"] : 0;
    switch ($d) {
        case '2':
        case '3':
        case '4':
        case '5':
        case '6':
            echo "Dia de estudar! foco, força e fé!";
            break;        
        case '7':
        case '8':
            echo "Dia de descansar! tsssss";
            break;
        default:
            echo "Digite um dia entre 2 a 8";    

    }

    ?>
<br>
    <a href="javascript:history.go (-1)">Voltar</a>

    <!-- javascript volte uma pagina do meu historico (anterior) -->
    
</body>
</html>