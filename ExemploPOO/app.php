<?php

require "Operacao.php";
require "Calculadora.php";

$opEscolhida = readline("Digite a operacao: ");
$n1 = readline("Digite o primeiro numero: ");
$n2 = readline("Digite o segundo numero: ");

$op = new Operacao($opEscolhida,$n1,$n2);
$calculadora = new Calculadora($op);

/* var_dump($calculadora); */

$calculadora->acao();
