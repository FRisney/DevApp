<?php

function main(){
	$a = 0;
	$r = 0;
	$e = 0;

	$a = readline("Insira um numero: ");
	while($a < 0){
		$a = readline("Insira um numero: ");
	}

	$e = number_format(pow($a, 2), 2);
	$r = number_format(sqrt($a), 2);
	echo "A potecia de ".$a." eh ".$e.PHP_EOL;
	echo "A raiz de ".$a." eh ".$r.PHP_EOL;
}

main();
