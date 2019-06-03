<?php  

	$exibir_frase = TRUE;
	if ($exibir_frase) {
		echo "Módulo III";
	}
	echo "<br>";
	$umidade = 91;
	$vai_chover = ($umidade > 90);
	if ($vai_chover) {
		echo "Vai chover";
		echo "<br>";
		echo $vai_chover;
	}

?>

