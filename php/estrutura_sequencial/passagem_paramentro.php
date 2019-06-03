<?php 

	function incrementar(&$variavel, $valor=40){
		$variavel += $valor;
	}

	$a = 20;
	incrementar($a);
	echo "$a";


