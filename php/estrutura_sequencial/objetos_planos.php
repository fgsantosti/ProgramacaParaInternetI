
<?php
	$a = new stdClass; //cria um objeto plano

	$a -> nome = 'Maria'; //define um atributo

	$b = $a; //cria uma réplica

	$b -> nome = 'Joana'; //define um atributo

	echo "<br>";

	print $a -> nome; //resultado Joana

	echo "<br>";
 
	print $b -> nome; //resultado Joana
?>

