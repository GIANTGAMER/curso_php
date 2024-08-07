<?php

$ordenaralfabeto = ['B', 'C', 'A', 'D', 'E', 'F', 'G'];
$tamanhodoalfabeto = count($ordenaralfabeto);
$maxIndiceALFABETO = $tamanhodoalfabeto -1;

for ($i = 0; $i < $maxIndiceALFABETO; $i++) {
    $maxIndiceALFABETO_J = $tamanhodoalfabeto - $i - 1;
    for ($j = 0; $j < $maxIndiceALFABETO_J; $j++) {
        if ($ordenaralfabeto[$j] < $ordenaralfabeto[$j + 1]) {
            $temp = $ordenaralfabeto[$j];
            $ordenaralfabeto[$j] = $ordenaralfabeto[$j + 1];
            $ordenaralfabeto[$j + 1] = $temp;
        }
    }
}

echo "<strong>Alfebeto invertido</strong> <br>" . implode(" - ", $ordenaralfabeto);

echo "<br><br><br><br><br><br><br><br>";

$face1 = 20;
$face2 = 10;
$face3 = 20;

$equilatero = ($face1 = $face2 = $face3);
$isoceles = 0;
$escaleno




?>