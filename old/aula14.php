<?php


class Calculadora {

    public $resultado;

    public function somar ($valor1, $valor2){
        $this->resultado = $valor1 + $valor2;
    }
    public function subtrair ($valor1, $valor2){
        $this->resultado = $valor1 - $valor2;
    }
    public function multiplicar ($valor1, $valor2){
        $this->resultado = $valor1 * $valor2;
    }
    public function dividir ($valor1, $valor2){
        $this->resultado = $valor1 / $valor2;
    }
}
$calculadora = new Calculadora();

$calculadora->multiplicar(1, 3);

echo $calculadora->resultado;



?>