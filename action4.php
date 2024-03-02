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