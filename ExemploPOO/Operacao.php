<?php
/**
 * Classe Operacao
 */

class Operacao
{
    /* Atributos */
    public $numero1;
    public $numero2;
    public $resultado;
    public $tipo;

    /* Metodos */
    public function __construct($tipo, $n1, $n2)
    {
        $this->tipo = $tipo;
        $this->numero1 = $n1;
        $this->numero2 = $n2;
    }

    public function calculo()
    {
        switch ($this->tipo) {
            case 'soma':
                $this->resultado = $this->soma();
                break;
            case 'subtracao':
                $this->resultado = $this->subtracao();
                break;
            case 'multiplicacao':
                $this->resultado = $this->multiplicacao();
                break;
            case 'divisao':
                $this->resultado = $this->divisao();
                break;
            default:
                echo "Nao eh um tipo valido";
                break;
        }
    }

    public function soma(){
        return $this->numero1 + $this->numero2;
    }

    public function subtracao(){
        return $this->numero1 - $this->numero2;
    }

    public function multiplicacao(){
        return $this->numero1 * $this->numero2;
    }

    public function divisao(){
        return $this->numero1 / $this->numero2;
    }
}
