<?php 
$p1 = explode(" ",trim(fgets(STDIN)));
$x1 = floatval($p1[0]); // pode-se utilizar doubleval no lugar de floatval
$y1 = floatval($p1[1]);

$p2 = explode(" ",trim(fgets(STDIN)));
$x2 = floatval($p2[0]);
$y2 = floatval($p2[1]);

$distancia = sqrt((($x2 - $x1) ** 2) + (($y2 - $y1) ** 2)); // sqrt = raiz quadrada
$distancia = number_format($distancia,4,'.','');

echo "{$distancia}\n";

?>