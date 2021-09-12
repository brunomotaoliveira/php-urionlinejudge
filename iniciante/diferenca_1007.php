<?php 

$valorA = fgets(STDIN);
$valorB = fgets(STDIN);
$valorC = fgets(STDIN);
$valorD = fgets(STDIN);

$diferenca = ($valorA * $valorB) - ($valorC * $valorD);

echo "DIFERENCA = {$diferenca}\n";
?>