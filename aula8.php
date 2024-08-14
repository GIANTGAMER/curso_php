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

$face1 = 10;
$face2 = 10;
$face3 = 0;

$triângulo = [$face1, $face2, $face3];

if ($triângulo[2]==0||$triângulo[1]==0||$triângulo[0]==0){
    echo "Os valores informados não formam um triângulo";

}  elseif ($triângulo[0] == $triângulo[1] && $triângulo[0] == $triângulo[2]){
    echo "O triângulo é equilátero.";
    
}elseif ($triângulo[0] == $triângulo[1] || $triângulo[0] == $triângulo[2]){
    echo "O triângulo é isoceles";

} elseif ($triângulo[0] != $triângulo[1] && $triângulo[0] != $triângulo[2]){
    echo "O triângulo é escaleno";
} 




?>