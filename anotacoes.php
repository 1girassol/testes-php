<?php
// Desvio condicional Simples 
if(expressao)
{
[instrucoes];
}

// exemplo:
if($_POST['cmbRegiao'] == "Sudeste")
{
echo "Neste mês estamos com frete grátis para o SUDESTE";
}
?>

<?php
// Desvio condicional composto
if(expressao)
{
[instrucoes]; // Se verdadeiro
} else
{
[instrucoes]; // Se falso
}

// exemplo:
$n1 = $_POST['txtN1'];
$n2 = $_POST['txtN2'];
$n3 = $_POST['txtN3'];
$media = ($n1+$n2+$n3)/3;
$resultado;
echo "".$_POST['txtNome']."! Sua Média foi ".$media."!!! <br>";
if($media >= 7)
{
$resultado = "Aprovado";
}
 else
{
$resultado = "Reprovado";
}
echo "Resultado:".$resultado."<br>";
?>

<?php

// encadeamento de decisões elseif

if($media >= 7)
{
$resultado = "Aprovado";
} elseif($media < 5)
{
$resultado = "Reprovado";
} else
{
$resultado = "Exame";
}
?>

<?php

// encadeamento de decisões switch

switch(expressão){
    case 1:
        echo "a";
        break;
    case 2:
        echo "b";
        break;
    default:
        echo "erro";        
}
?>

<!-- //operador ternário -->
<h1>
<div class="w3-container w3-teal">
<h1>
<?php
echo "".$_POST['txtNome']." ! <br>";
?>
Na promoção de aniversário você ganhou
<?php
$valorTotal = $_POST['txtValorTotal'];
echo $valorTotal > 500 ? "20% " :
"10%";
 ?>
de desconto!
