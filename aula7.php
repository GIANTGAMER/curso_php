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

//ESCREVE QUAIS OS PARES decrescente
echo "<strong> PARES DECRESCENTE</strong>  <br>";
for ($i = count($par); $i >= 0; $i--){
    echo $par[$i] . " ";
}

echo "<br><br>";

//ESCREVE QUAIS OS IMPARES decrescente
echo "<br> <strong> IMPARES DECRESCENTE</strong>  <br>";
for ($i = count($impar); $i >= 0; $i--){
    echo $impar[$i] . " ";
}

?>