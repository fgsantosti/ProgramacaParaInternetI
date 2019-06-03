<?php  

	function horas_em_segundos($hora){
		global $total_segundos;
		$total_segundos = $hora * 3600;
	}

	horas_em_segundos(24);
	echo "$total_segundos";
?>

