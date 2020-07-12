<?php
    /*Construir um script em PHP que leia a quilometragem inicial e final de um veículo em uma viagem e a
quantidade de combustível consumido. Em seguida calcule, armazene e imprima a média de quilômetros por litro de
combustível e a média de combustível por quilômetro rodado.*/
    $p1 = $_POST["p1"];
	$p2 = $_POST["p2"];
	$l = $_POST["l"];
	$mp = ($p2 - $p1)/$l;
	$ml = $l/($p2 - $p1);
	echo "A média de quilômetros por litro é mp = ".number_format($mp,2)." km/l.";
	echo "<br>";
	echo "A média de combustível por quilômetro rodado é ml = ".number_format($ml,2)." l/km.";