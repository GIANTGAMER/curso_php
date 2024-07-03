<?php
$nome = "Gian";
$sobrenome = "Pietro";
echo "olá ".$nome." ".$sobrenome."!<br>";

echo strlen($nome);
echo "<br>";
echo strlen($sobrenome);
echo "<br>";
echo strlen($nome) + strlen($sobrenome);
echo "<br>";
echo strtoupper($nome);
echo "<br>";
echo strtoupper($sobrenome);
echo "<br>";
echo strtolower($nome);
echo "<br>";
echo strtolower($sobrenome);
echo "<br>";
echo strrev($nome);
echo "<br>";
echo strrev($sobrenome);
echo "<br>";
echo "hoje é ";
echo date("d/m/Y");
echo "<br>";
echo "agora são ".date("H:i:s");
echo "<br>";
echo "Data ".date("d/m/Y").". Hora ".date("H:i:s");
echo "<br>";
// 0 domingo 6 sábado
$DSemana = date("w");

if ($DSemana == 0) {
    echo "Hoje é domingo e são ".date("H:i:s")." horas.";
}elseif ($DSemana == 1) {
    echo "Hoje é segunda e são ".date("H:i:s")." horas."; 
}elseif ($DSemana == 2) {
    echo "Hoje é terça e são ".date("H:i:s")." horas.";
}elseif ($DSemana == 3) {
    echo "Hoje é quarta e são ".date("H:i:s")." horas.";
}elseif ($DSemana == 4) {
    echo "Hoje é quinta e são ".date("H:i:s")." horas.";
}elseif ($DSemana == 5) {
    echo "Hoje é sexta e são ".date("H:i:s")." horas.";
}elseif ($DSemana == 6) {
    echo "Hoje é sábado e são ".date("H:i:s")." horas.";
}





?>