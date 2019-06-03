<?php
	$foo = "0";  // $foo é string (ASCII 48)
	$foo += 2;   // $foo é agora um interio (2)
	$foo = $foo + 1.3;  // $foo é agora um float (3.3)
	$foo = 5 + "10";   // $foo é inteiro (15)
	$foo = 5 + "10 minúsculos porcos"; // $foo é inteiro (15)


	echo $foo;
?>