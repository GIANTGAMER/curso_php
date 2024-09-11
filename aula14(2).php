<?php

class Banco {
    private $saldo = 1500;
    public $extrato;
    public $saldoInsuficiente= "Valor inserido inválido, verifique se possui alguma letra ou está vazio.";
    public $extratoInvalido= 0;
    public function saque ($valor){
        $padrao = "/[^0-9]/is";
        $valor = preg_replace($padrao, "", $valor);

        if (empty($valor)){
            $this->extrato = $this->saldoInsuficiente;
        }elseif ($this->saldo<$valor){
            $this->extrato = $this->saldoInsuficiente;
        } else {
            $this->extrato = $this->saldo - $valor;
        }
    }


    public function deposito ($valor){
        $padrao = "/[^0-9]/is";
        $valor = preg_replace($padrao, "", $valor);

        if (empty($valor)){
            $this->extrato = $this->saldoInsuficiente;
        } else {
            $this->extrato = $this->saldo + $valor;
        }
    }

}

$banco = new Banco();
$banco->saque("-100");
echo $banco->extrato;

?>