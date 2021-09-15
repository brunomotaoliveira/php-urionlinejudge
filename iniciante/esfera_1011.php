<?php 
    $raioDaEsfera = trim(fgets(STDIN));
    $pi = 3.14159;

    $calcularVolume = (4/3) * $pi;
    $calcularVolume = $calcularVolume * ($raioDaEsfera ** 3);

    $calcularVolume = number_format($calcularVolume,3,'.','');
    echo "VOLUME = {$calcularVolume}\n";
?>