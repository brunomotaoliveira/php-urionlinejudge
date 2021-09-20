<?php 
$tempoGastoNaViagem = trim(fgets(STDIN));
$velocidadeMedia = trim(fgets(STDIN));
const CONSUMO = 12;

$distanciaPercorrida =$velocidadeMedia * $tempoGastoNaViagem;
$quantidadeLitros = $distanciaPercorrida / CONSUMO;

$quantidadeLitros = number_format($quantidadeLitros,3,'.','');
echo "{$quantidadeLitros}\n";

?>