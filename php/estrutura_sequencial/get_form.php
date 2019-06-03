<?php 	

	$n1 = $_GET['n1'];
	$n2 = $_GET['n2'];
	$op = $_GET['op'];

	function calcula($numero1, $numero2, $op){
		if ($op == '+') {
			$resp = $numero1 + $numero2;
		}
		
		return $resp;	
	}
	
	$result = calcula($n1, $n2, $op);

	echo "$result";

	//header("Location: form.php?resposta=$soma"); 
	//echo "A soma é: $soma";
	//header('Location: form.html'); 

	//header('Location: http://www.globo.com.br'); 
?>