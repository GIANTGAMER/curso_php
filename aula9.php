<?php


function calculadora ($valor1, $operador, $valor2){
   $resultado = 0;
   
    if ($operador == "+"){
    $resultado = $valor1 + $valor2;
   } elseif ($operador == "-"){
    $resultado = $valor1 - $valor2;
   } elseif ($operador == "*"){
    $resultado = $valor1 * $valor2;
   } elseif ($operador == "/"){
    $resultado = $valor1 / $valor2;
   } elseif ($operador == "%"){
    $resultado = $valor1 * $valor2 / 100;
   }
   return $resultado;
}

$valor1 = 100;
$valor2 = 10;
$operador = "%";

$resultado = calculadora($valor1, $operador, $valor2);
echo $resultado;

echo "<br><br><br><br>";


function banco ($dep, $saque, $extrato){
    $resultado = 0;
    $saldo = 2500;
    if ($dep>$saque){
        $saldo+($dep-$saque);
    }
    return $resultado;
}

?>