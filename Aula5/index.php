<?php

require "Calculo.php";
require "Adicao.php";
require "Subtracao.php";
require "Multiplicacao.php";
require "Divisao.php";

/* echo $_GET['num1']; */
/* echo $_GET['num2']; */

$sum = new Adicao($_GET['num1'], $_GET['num2']);
$sub = new Subtracao($_GET['num1'], $_GET['num2']);
$mul = new Multiplicacao($_GET['num1'], $_GET['num2']);
$div = new Divisao($_GET['num1'], $_GET['num2']);

echo '<pre>';
echo 'Primeiro operador:'.$_GET['num1'].'<br>';
echo 'Segundo operador:'.$_GET['num2'] .'<br>';
echo 'Adicao: '.$sum->getResultado().'<br>';
echo 'Subtracao: '.$sub->getResultado().'<br>';
echo 'Multiplicacao: '.$mul->getResultado().'<br>';
echo 'Divisao: '.$div->getResultado().'<br>';
echo '</pre>';

