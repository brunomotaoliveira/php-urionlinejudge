<?php 
    $valorA = fgets(STDIN);
    $valorB = fgets(STDIN);
    //$valorA = 5.0;
    //$valorB = 7.1;

    $media = (($valorA * 3.5) + ($valorB * 7.5)) / 11;

    $media = number_format($media,5,'.','');
    echo "MEDIA = {$media}\n";
?>