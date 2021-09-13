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
/**
 * explode => Divide uma string em strings, utilizando no caso o espaço " ". Como parâmetro, se tornando uma array. Assim a variavel $linha1, se torna uma array.
 * 
 * trim => remove espaços do que for capturado pelo fgets.
 * 
 *  fgets => captura os dados, no caso o que for digitado pelo teclado, parametro STDIN.
 * 
 *  intval => vai converter o valor em inteiro. No caso o $linha[0]. A string armazenada na array na posição 0, será convertida em inteiro e depois armazenado em $codigoDaPeca1.
 * 
 *  doubleval ou floatval => assim como o intval que converte em inteiro. O floatval irá converter a string em ponto flutuante(decimal). OBS: doubleval é um "apelido" para floatval, ambos funcionam da mesma forma.
 */
    
?>