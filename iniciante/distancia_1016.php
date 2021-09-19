<?php 
    // 1km = 2 minutos

    $distancia = trim(fgets(STDIN));
    $calculoDoTempo = $distancia * 2;

    echo "{$calculoDoTempo} minutos";
?>