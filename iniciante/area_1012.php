<?php 
$valores = explode(" ",trim(fgets(STDIN)));
$valorA = floatval($valores[0]); // ou double val. Converte a string em ponto flutuante
$valorB = floatval($valores[1]);
$valorC = floatval($valores[2]);
const VALORDOPI = 3.14159; // php possui o pi. Porém é necessario utilizar o que o exercicio solicita. Criando assim uma constante para armazenar o valor de PI

// area do triangulo retangulo => area = (base * altura) /2
$areaDoTrianguloRetangulo = ($valorA * $valorC) / 2;
$areaDoCirculo = ($valorC ** 2) * VALORDOPI;

// area do trapezio => ((base maior + base menor) * altura) / 2
$areaDoTrapezio = (($valorA + $valorB) * $valorC) / 2;

$areaDoQuadrado = $valorB * $valorB;
$areaDoRetangulo = $valorA * $valorB;

//formatando os numeros
$areaDoTrianguloRetangulo = number_format($areaDoTrianguloRetangulo,3,'.','');
$areaDoCirculo = number_format($areaDoCirculo,3,'.','');
$areaDoTrapezio = number_format($areaDoTrapezio,3,'.','');
$areaDoQuadrado = number_format($areaDoQuadrado,3,'.','');
$areaDoRetangulo = number_format($areaDoRetangulo,3,'.','');

//imprimindo os resultados
echo "TRIANGULO: {$areaDoTrianguloRetangulo}";
echo "CIRCULO: {$areaDoCirculo}";
echo "TRAPEZIO: {$areaDoTrapezio}";
echo "QUADRADO: {$areaDoQuadrado}";
echo "RETANGULO: {$areaDoRetangulo}";

?>