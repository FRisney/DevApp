<?php
/**
 * Classe Calculadora
 */

class Calculadora
{
    /* Atributos */
	public $operacao;

    /* Metodos */
    public function __construct($op)
    {
		$this->operacao = $op;
    }

    public function acao()
    {
        $this->operacao->calculo();
		echo "Resultado: " . $this->operacao->resultado . PHP_EOL;
    }
}
