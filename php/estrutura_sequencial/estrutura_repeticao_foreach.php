<?php  	
	$carros = array( 'Toyota Camry', 
					'Chevrolet Camaro', 
					'Ford Fusion', 
					'Ford Mustang');

	foreach ($carros as $value) {
		echo "$value <br>";
	}

	foreach ($carros as $key => $value) {
		echo "$key => $value <br>";
	}
?>

