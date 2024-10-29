<?php
$par = [];
$impar = [];
$i=1;

//ARMAZENA PARES E IMPARES EM VARIAVEIS
while ($i <=100) {
    if ($i % 2 ==0){
        $par[] = $i;
    } else {
        $impar[] = $i;
    }
    $i++;
}

//ESCREVE QUAIS OS PARES crescente
echo "<strong> PARES CRESCENTE</strong>  <br>";
for ($i = 0; $i <= count($par); $i++){
    echo $par[$i] . " ";
}

echo "<br><br>";

//ESCREVE QUAIS OS IMPARES crescente
echo "<br> <strong> IMPARES CRESCENTE</strong>  <br>";
for ($i = 0; $i <= count($impar); $i++){
    echo $impar[$i] . " ";
}
echo "<br><br><br><br>";


$par1 = [];
$impar1 = [];
$i1=100;

//ARMAZENA PARES E IMPARES EM VARIAVEIS decrescentemente
while ($i1 >=1) {
    if ($i1 % 2 ==0){
        $par1[] = $i1;
    } else {
        $impar1[] = $i1;
    }
    $i1--;
}



//ESCREVE QUAIS OS PARES decrescente
echo "<strong> PARES CRESCENTE</strong>  <br>";
for ($i1 = 0; $i1 <= count($par1); $i1++){
    echo $par1[$i1] . " ";
}

echo "<br><br>";

//ESCREVE QUAIS OS IMPARES decrescente
echo "<br> <strong> IMPARES CRESCENTE</strong>  <br>";
for ($i1 = 0; $i1 <= count($impar1); $i1++){
    echo $impar1[$i1] . " ";
}

?>