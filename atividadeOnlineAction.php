<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Atividade Online</title>
</head>
<body>
    <div class="w3-container w3-teal">
        
<?php
$compra = $_POST["txtValorCompra"];
$formaPg = $_POST["cmbPag"];
$por;

if ($formaPg == 'deposito') {
    $por = 10;
} elseif ($formaPg == 'boleto') {
    $por = 8;
} else {
    $por = 0;

}
echo "PROMOÇÃO DE MÊS DE ANIVERSÁRIO!<br>";
echo"".$_POST['txtNome']."! <br> ";
echo "Valor da compra sem desconto: R$".$compra."<br>";
echo "Forma de pagamento escolhida: ".$formaPg."<br>";
echo "Desconto de: ".$por."%<br>";
echo "Você economizou: R$".($compra * $por / 100)."<br>";

switch ($formaPg) {
    case 'deposito':
    case 'boleto':
        echo "Valor a pagar: R$".($compra - (100 / $por)) ;
        break;
    case 'cartaoCredito':
        echo "Valor a pagar: R$".$compra;
}




// if ($formaPg == 'deposito' OR 'boleto'){
//     echo "Valor a pagar: R$".($compra - (100 / $por)) ;
// }else{
//     echo "Valor a pagar: R$";
// }

?>
    </div>

    
</body>
</html>