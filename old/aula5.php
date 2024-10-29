<?php

//variáveis

$num = 450;
$i = 1;

$i1 = 0;

$i2 = 1;
$soma = 0;

$i3 = 2;
$soma1 = 0;

$i4 = 1;
$soma2 = 0;
//variáveis

// multiplicação
echo "multiplicação de $num <br><br>";
while ($i <= 10) {
    echo "$num X $i = " . $resul = $num * $i . "<br>";
    $i++;
}
// multiplicação

echo "<br><br><br>";

//pares
echo "pares até 20 <br><br>";
while ($i1 <= 20) {
    echo $i1 . "<br>";
    $i1 = $i1 + 2;
}
//pares até 20

echo "<br><br><br>";

//soma todos os números de 100 a 100
echo "100 a 100 <br><br>";
while ($i2 <= 100) {
    $soma += $i2;
    $i2++;
}
echo "o resultado é $soma";
//soma todos os números de 100 a 100

echo "<br><br><br>";

//soma de todos os pares de 1-100
echo "1 a 100 pares <br><br>";
while ($i3 <= 100) {
    $soma1 += $i3;
    $i3 = $i3 + 2;
}
echo $soma1;

echo "<br><br><br>";

//soma de todos os impares de 1-100
echo "1 a 100 impares <br><br>";
while ($i4 <= 100) {
    $soma2 += $i4;
    $i4 = $i4 + 2;
}
echo $soma2;
?>