<?php 
$tempoGastoNaViagem = trim(fgets(STDIN));
$velocidadeMedia = trim(fgets(STDIN));
const CONSUMO = 12;
// primeiro se calcula a distancia percorrida, e depois a quantidade de combustivel que gastou
$distanciaPercorrida =$velocidadeMedia * $tempoGastoNaViagem;
$quantidadeLitros = $distanciaPercorrida / CONSUMO;

$quantidadeLitros = number_format($quantidadeLitros,3,'.','');
echo "{$quantidadeLitros}\n";

?>