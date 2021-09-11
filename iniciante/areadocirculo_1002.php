<?php 
    $n = 3.14159;
    $raio = fgets(STDIN);
    //$raio = 100.64;
    $area = ($raio ** 2) * $n;

    $area = number_format($area, 4, '.', '');
    echo "A={$area}\n";

?>