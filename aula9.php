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

function Banco ($opera, $valor3, $extrato){
   $saldo = 1000;
   $return = 0;

   if ($opera == "+"){
      $return = $saldo + $valor3;
      return $return;
   }

   if ($opera == "-"){
      $return = $saldo - $valor3;
      return $return;
   }

   if ($extrato == "calabresa"){
      return $saldo;
   }
}

$opera = "+";
$valor3 = 900;
$extrato;

echo Banco($opera, $valor3, $extrato);





?>