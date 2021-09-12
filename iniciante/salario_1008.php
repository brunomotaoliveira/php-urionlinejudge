<?php 
    $numeroDoFuncionario = trim(fgets(STDIN));
    $qntdHorasTrabalhadas = trim(fgets(STDIN));
    $valorPorHora = trim(fgets(STDIN));

    $salario = $qntdHorasTrabalhadas * $valorPorHora;
    $salario = number_format($salario,2,'.','');
    echo "NUMBER = {$numeroDoFuncionario}\n";
    echo "SALARY = U$ {$salario}\n";

    // trim — Retira espaço no início e final de uma string
?>