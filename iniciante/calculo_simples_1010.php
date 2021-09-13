<?php 
    $linha1 = explode(" ", trim(fgets(STDIN)));
    $codigoDaPeca1 = intval($linha1[0]);
    $qntdDePeca1 = intval($linha1[1]);
    $valorUnitarioPeca1 = doubleval($linha1[2]);

    $linha2 = explode(" ", trim(fgets(STDIN)));
    $codigoDaPeca2 = intval($linha2[0]);
    $qntdDePeca2 = intval($linha2[1]);
    $valorUnitarioPeca2 = doubleval($linha2[2]);

    $valorPago = ($qntdDePeca1 * $valorUnitarioPeca1) + ($qntdDePeca2 * $valorUnitarioPeca2);

    $valorPago = number_format($valorPago,2,'.','');
    echo "VALOR A PAGAR: R$ {$valorPago}\n";

    
?>