<?php

function banco($valor, $operacao, $saldoAtual) {

    $saldo = $saldoAtual;

    if ($operacao == "extrato") {
        return $saldo;
    }

    if ($operacao == "Saque" && $valor >= 0 ) {
        // $saldo = $saldo - $valor;
        $saldo -= $valor;
    }

    if ($operacao == "Deposito" && $valor >= 0) {
        // $saldo = $saldo + $valor;
        $saldo += $valor;
    }
    
    if ($operacao == "Saque" && $saldoAtual<$valor){
        $saldo = "Saldo Indisponível";
    }
    if ($operacao == "Deposito" && $valor <= 0){
        $saldo = "Deposito de valor invalido, verificar.";
    }
    if ($operacao == "Saque" && $valor <= 0){
        $saldo = "Saque de valor invalido, verificar.";
    }
    return $saldo;
}

$saldoAtual = 500; // tem um valor inicial de 500.
echo "Valor inicial: $saldoAtual<br>";

$valor = 500;
$operacao = "Deposito";
$saldoAtual = banco($valor, $operacao, $saldoAtual);
echo "$operacao = $valor, Extrato: $saldoAtual<br>";

$valor = 200;
$operacao = "Saque";
$saldoAtual = banco($valor, $operacao, $saldoAtual);
echo "$operacao = $valor, Extrato: $saldoAtual<br>"; // 400

$valor = 100;
$operacao = "Saque";
$saldoAtual = banco($valor, $operacao, $saldoAtual);
echo "$operacao = $valor, Extrato: $saldoAtual<br>";

?>