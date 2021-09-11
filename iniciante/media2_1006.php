<?php 
$valorA = fgets(STDIN);
$valorB = fgets(STDIN);
$valorC = fgets(STDIN);

$media = (($valorA * 2) + ($valorB * 3) + ($valorC * 5)) / 10;

$media = number_format($media,1,".","");
echo "MEDIA = {$media}";
?>