<?php  
	$carro = new stdClass;
	
	$carro -> modelo 	= 'Toyota Camry';
	$carro -> ano 		= '2019';
	$carro -> cor 		= 'Prat';

	print_r($carro);
	echo "<br>";

	print $carro -> modelo . '<br>';
	print $carro -> ano . '<br>';
	print $carro -> cor . '<br>';	

?>