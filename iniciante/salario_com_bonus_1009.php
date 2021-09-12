<?php
$nomeDoVendedor = trim(fgets(STDIN));
$salarioFixo = trim(fgets(STDIN));
$totalDeVendas = trim(fgets(STDIN));

$totalParaReceber = $totalDeVendas *(15/100);
$totalParaReceber = $totalParaReceber + $salarioFixo;
$totalParaReceber = number_format($totalParaReceber,2,'.','');
echo "TOTAL = R$ {$totalParaReceber}\n";
?>