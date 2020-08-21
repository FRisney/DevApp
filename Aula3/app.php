<?php

/**
 * Aplicacao
 */

require "Calculadora.php";

$op = readline("Digite a operacao: ");
$n1 = readline("Digite um numero: ");
$n2 = readline("Digite outro numero: ");

$calc = new Calculadora($n1, $n2, $op);

$calc->calculo();
