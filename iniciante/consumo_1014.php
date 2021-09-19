<?php 
$distanciaTotalPercorrida = trim(fgets(STDIN));
$totalDeCombustivelGasto = trim(fgets(STDIN));

$consumoMedio = $distanciaTotalPercorrida / $totalDeCombustivelGasto;
$consumoMedio = number_format($consumoMedio,3,'.','');
echo "{$consumoMedio} km/l\n";
?>