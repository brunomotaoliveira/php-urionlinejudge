<?php 
    $numeroDoFuncionario = fgets(STDIN);
    $qntdHorasTrabalhadas = fgets(STDIN);
    $valorPorHora = fgets(STDIN);

    $numeroDoFuncionario = 6;
    $qntdHorasTrabalhadas = 145;
    $valorPorHora = 15.55;

    $salario = $qntdHorasTrabalhadas * $valorPorHora;
    $salario = number_format($salario,2,'.','');
    echo "\nNUMBER = {$numeroDoFuncionario}\n";
    echo "\nSALARY = U$ {$salario}\n";
?>