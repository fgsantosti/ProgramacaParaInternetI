<?php  
	
	$a = 4;
	
	$b = &$a;
	
	$b = 10;

	echo $a; //resultado 10

	echo "<br>"; //quebra de linha

	echo $b; //resultado 10

?>

