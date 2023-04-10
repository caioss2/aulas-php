<?php 

	$num = array(1, 2, 3, 4, 5);

	foreach( $num as $Valor){
		echo "Valor é $Valor <br />";
	}

	$num[0] = "um";
	$num[1] = "dois";
	$num[2] = "três";
	$num[3] = "quatro";
	$num[4] = "cinco"; 

	foreach( $num as $Valor ){
		echo "Valor é $Valor <br />";
	}

?>
