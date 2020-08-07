<?php
echo "Iniciando calculadora".PHP_EOL;
echo "Digite + para somar".PHP_EOL;
echo "Digite - para diminuir".PHP_EOL;
echo "Digite * para multiplicar".PHP_EOL;
echo "Digite / para dividir".PHP_EOL;

$num1 = readline("Insira um numero: ");

if($num1 == "X" || $num1 == "x"){
	echo "Voce fechou a calculadora".PHP_EOL;
	return false;
}

$operacao = readline("Insira a operacao: ");
$num2 = readline("Insira outro numero: ");
$resultado = 0;

switch($operacao){
	case "+":
		$resultado = $num1 + $num2;
		break;
	case "-":
		$resultado = $num1 - $num2;
		break;
	case "*":
		$resultado = $num1 * $num2;
		break;
	case "/":
		$resultado = $num1 / $num2;
		break;
}

echo "O Resultado de ".$num1." ".$operacao." ".$num2." = ".$resultado.PHP_EOL;

?>
