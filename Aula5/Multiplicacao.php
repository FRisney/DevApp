<?php

class Multiplicacao extends Calculo{
    function __construct(float $num1, float $num2){
        $this->operador1 = $num1 ?? 0;
        $this->operador2 = $num2 ?? 0;
        $this->calcular();
    }
    public function calcular(){
        $this->resultado = $this->operador1 * $this->operador2;
    }

}

