<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regiões Brasileiras</title>
</head>
<body>

<?php

$r = isset ($_GET["estado"]) ? $_GET["estado"] : 0;

switch ($r) {
    case '1':
    case '3':    
    case '4':
    case '13':
    case '21':
    case '22':  
        echo "Região Norte"; 
        break; 
    case '2':
    case '5':    
    case '6':
    case '9':
    case '14':
    case '16':  
    case '17':
    case '19':
    case '25':     
        echo "Região Nordeste";  
        break;
    case '15':
    case '20':    
    case '23':    
        echo "Região Sul";
        break;
    case '7':
    case '12':    
    case '18':  
    case '24':
        echo "Região Sudeste";
        break;
    case '8':
    case '10':    
    case '11':  
    case '26':
    case '27':
        echo "Região Centro-Oeste";
}

?>
    <br> <br><a href="javascript:history.go (-1)"> Voltar</a>

</body>
</html>