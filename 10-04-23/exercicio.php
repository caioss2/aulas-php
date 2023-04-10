<?php 

	$nome1 = "Maria";
	$nome2 = "João";
	$nome3 = "Pedro";
	$nome4 = "Lucas";
	$nome5 = "Paulo";

	echo("$nome1<br/>$nome2<br/>$nome3<br/>$nome4<br/>$nome5<br/>");

?> 

#Exemplo declaração de vriável com array 

<?php 

	$nome = array("Maria","João","Pedro","Lucas","Paulo");

	echo "Os nomes no array <br/>";

	foreach ($nome as $nomes) {
		echo "<br/>".$nomes;
	}