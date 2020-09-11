<?php

require "Calculo.php";
require "Adicao.php";
require "Subtracao.php";
require "Multiplicacao.php";
require "Divisao.php";

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$sum = new Adicao($num1, $num2);
$sub = new Subtracao($num1, $num2);
$mul = new Multiplicacao($num1, $num2);
$div = new Divisao($num1, $num2);

echo '<pre>';
echo 'Primeiro operador: '.$num1.'<br>';
echo  'Segundo operador: '.$num2.'<br>';
echo 'Adicao: '.$sum->getResultado().'<br>';
echo 'Subtracao: '.$sub->getResultado().'<br>';
echo 'Multiplicacao: '.$mul->getResultado().'<br>';
echo 'Divisao: '.$div->getResultado().'<br>';
echo '</pre>';

