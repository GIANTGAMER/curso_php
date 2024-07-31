<?php

$i=1; // variável que define primeiro multiplicador

while ($i <= 10){
    $i2=1; // precisa estar dentro do primeiro loop
    echo "Tabuada do $i<br>";
    while ($i2 <=10){
        echo "$i X $i2 = ".$i * $i2."<br>";
        $i2++;
    }
    echo "<br>";
    $i++;
}


?>