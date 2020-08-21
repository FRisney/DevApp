<?php

/*
 * Classe Calculadora
 */

class Calculadora
{
    /* Atributos */
    public $num1;
    public $num2;
    public $operacao;

    /* Metodos */
    public function __construct($num1, $num2, $operacao)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operacao = $operacao;
    }

    public function calculo()
    {
        switch ($this->operacao) {
        case '+':
            $this->impressao_result($this->soma());
            break;
        case '-':
            $this->impressao_result($this->subtracao());
            break;
        case '*':
            $this->impressao_result($this->multiplicacao());
            break;
        case '/':
            if ($this->num2 == 0) {
                $this->impressao_erro(-1);
            } else {
                $this->impressao_result($this->divisao());
            }
            break;
        default:
            $this->impressao_erro(-2);
        }
    }

    public function soma()
    {
        return $this->num1 + $this->num2;
    }

    public function subtracao()
    {
        return $this->num1 - $this->num2;
    }

    public function multiplicacao()
    {
        return $this->num1 * $this->num2;
    }

    public function divisao()
    {
        return $this->num1 / $this->num2;
    }

    public function impressao_result($result)
    {
        echo "O resultado eh: " . $result . PHP_EOL;
    }

    public function impressao_erro($cod)
    {
        echo "Erro: ";
        switch ($cod) {
            case -1:
                echo "Divisao por zero." . PHP_EOL;
                break;
            case -1:
                echo "Operacao invalida." . PHP_EOL;
                break;
        }
    }
}
