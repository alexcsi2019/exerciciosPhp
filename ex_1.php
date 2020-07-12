<?php
    /*Construir um script em PHP que leia 2 números inteiros e em seguida calcule, armazene e imprima a
média aritmética e a metade da diferença entre eles.*/
    $num_1 = $_POST["num_1"];
	$num_2 = $_POST ["num_2"];
	$media = ($num_1 + $num_2)/2;
	$diferenca = ($num_1 - $num_2)/2;
	
	echo "A média aritmética entre dois inteiros é $media.";
	echo "<br>";
	echo "A diferença entre dois interios é $diferenca.";
	echo "<br>";
	
	
	
