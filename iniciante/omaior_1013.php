<?php 
$lendoTresValores = explode(" ",trim(fgets(STDIN)));
$valorA = intval($lendoTresValores[0]);
$valorB = intval($lendoTresValores[1]);
$valorC = intval($lendoTresValores[2]);

$maiorAB = ($valorA + $valorB + abs($valorB - $valorA)) /2; // abs = retorna o valor absoluto
$maiorAB = ($valorC + $maiorAB + abs($maiorAB - $valorC)) /2;

echo "{$maiorAB} eh o maior\n";
?>